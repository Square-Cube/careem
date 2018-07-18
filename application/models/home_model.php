<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	// constructor
	function __construct() {
		parent::__construct();
	}

	// register
	function register() {
		
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$added_at = date('d/m/Y');
		
            $this->db->where('phone', $phone);
            $query = $this->db->get('users');
            if($query->num_rows() != 0) {
                  return "duplicate_phone";
                  die();
            }

		$this->db->set('name', $name);
		$this->db->set('phone', $phone);
		$this->db->set('added_at', $added_at);
		
		$this->db->insert('users');

		$user_id = $this->db->insert_id();

		$data = array(
			'user_id' => $user_id
		);
						
		$this->session->set_userdata($data); // start session contain user informations

		return "done";
		
	}

	// get prize
	function get_prize() {
		
		$user_id = $this->session->userdata('user_id');

            // 50% OFF YOUR RIDE ->             190
            // 70% OFF YOUR RIDE ->             120
            // FREE RIDE ->                     75
            // BLUETOOTH SPEAKER ->             4
            // FIFA VIDEO GAME 2018 ->          1 or 2
            // FOOTBALL JERSEY ->               1 or 2

		$prizes_1 = array(
      		'50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  'FREE RIDE'
  		);

            $prizes_2 = array(
                  'BLUETOOTH SPEAKER',
                  'FIFA VIDEO GAME 2018',
                  'FOOTBALL JERSEY'
            );

		$today = date('d/m/Y');

            if($today == "15/07/2018") {

                  $this->db->where('added_at', $today);
                  $this->db->where('prize', 'FOOTBALL JERSEY');
                  $query = $this->db->get('users');
                  if ($query->num_rows() >= 2) {
                        $prizes_2 = array_diff($prizes_2, array('FOOTBALL JERSEY'));
                  }

            } else {

                  $this->db->where('added_at', $today);
                  $this->db->where('prize', 'FOOTBALL JERSEY');
                  $query = $this->db->get('users');
                  if ($query->num_rows() >= 1) {
                        $prizes_2 = array_diff($prizes_2, array('FOOTBALL JERSEY'));
                  }

            }

            $this->db->where('prize', 'FOOTBALL JERSEY');
            $query = $this->db->get('users');
            if ($query->num_rows() >= 4) {
                  $prizes_2 = array_diff($prizes_2, array('FOOTBALL JERSEY'));
            }

            if($today == "14/07/2018") {

                  $this->db->where('added_at', $today);
                  $this->db->where('prize', 'FIFA VIDEO GAME 2018');
                  $query = $this->db->get('users');
                  if ($query->num_rows() >= 2) {
                        $prizes_2 = array_diff($prizes_2, array('FIFA VIDEO GAME 2018'));
                  }

            } else {

                  $this->db->where('added_at', $today);
                  $this->db->where('prize', 'FIFA VIDEO GAME 2018');
                  $query = $this->db->get('users');
                  if ($query->num_rows() >= 1) {
                        $prizes_2 = array_diff($prizes_2, array('FIFA VIDEO GAME 2018'));
                  }
                  
            }

            $this->db->where('prize', 'FIFA VIDEO GAME 2018');
            $query = $this->db->get('users');
            if ($query->num_rows() >= 4) {
                  $prizes_2 = array_diff($prizes_2, array('FIFA VIDEO GAME 2018'));
            }

            $this->db->where('added_at', $today);
            $this->db->where('prize', 'BLUETOOTH SPEAKER');
            $query = $this->db->get('users');
            if ($query->num_rows() >= 4) {
                  $prizes_2 = array_diff($prizes_2, array('BLUETOOTH SPEAKER'));
            }

            $this->db->where('prize', 'BLUETOOTH SPEAKER');
            $query = $this->db->get('users');
            if ($query->num_rows() >= 12) {
                  $prizes_2 = array_diff($prizes_2, array('BLUETOOTH SPEAKER'));
            }

		$this->db->where('added_at', $today);
		$this->db->where('prize', 'FREE RIDE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 75) {
			$prizes_1 = array_diff($prizes_1, array('FREE RIDE'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', '70% OFF YOUR RIDE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 120) {
			$prizes_1 = array_diff($prizes_1, array('70% OFF YOUR RIDE'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', '50% OFF YOUR RIDE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 190) {
			$prizes_1 = array_diff($prizes_1, array('50% OFF YOUR RIDE'));
		}

            if ($user_id % 8 == 0) {
                  if (!empty($prizes_2)) {
                        $random_prize = $prizes_2[array_rand($prizes_2)];
                  } else {
                        if (!empty($prizes_1)) {
                              $random_prize = $prizes_1[array_rand($prizes_1)];
                        } else {
                              $random_prize = "SORRY :(";
                        }
                  }
            } else if (!empty($prizes_1)) {
			$random_prize = $prizes_1[array_rand($prizes_1)];
		} else {
			$random_prize = "SORRY :(";
		}
		
		$this->db->where('id', $user_id);
		$this->db->set('prize', $random_prize);
		
		$this->db->update('users');

		return $random_prize;
		
	}

}