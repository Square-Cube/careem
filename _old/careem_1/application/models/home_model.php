<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	// constructor
	function __construct() {
		parent::__construct();
	}

	// register
	function register() {
		
		$name = $this->input->post('name');
            $email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$added_at = date('d/m/Y');
		
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		if($query->num_rows() != 0) {
			return "duplicate_email";
			die();
		}

            $this->db->where('phone', $phone);
            $query = $this->db->get('users');
            if($query->num_rows() != 0) {
                  return "duplicate_phone";
                  die();
            }

		$this->db->set('name', $name);
            $this->db->set('email', $email);
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

            // 50% OFF YOUR RIDE ->             100 per day
            // 70% OFF YOUR RIDE->              50 per day
            // FREE RIDE ->                     25 per day
            // 100 EGP OFF YOUR CHEQUE ->       10 per day
            // FIFA VIDEO GAME 2018 ->          01 per day
            // FOOTBALL JERSEY ->               01 per day

		$prizes = array(
      		'50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'100 EGP OFF YOUR CHEQUE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'FREE RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'FREE RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'FREE RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'100 EGP OFF YOUR CHEQUE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'FREE RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'70% OFF YOUR RIDE',
                  '100 EGP OFF YOUR CHEQUE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'100 EGP OFF YOUR CHEQUE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'FREE RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'50% OFF YOUR RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'70% OFF YOUR RIDE',
      		'100 EGP OFF YOUR CHEQUE',
      		'50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'70% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'50% OFF YOUR RIDE',
      		'FREE RIDE',
      		'70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '100 EGP OFF YOUR CHEQUE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '100 EGP OFF YOUR CHEQUE',
                  '70% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FIFA VIDEO GAME 2018',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '100 EGP OFF YOUR CHEQUE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '100 EGP OFF YOUR CHEQUE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FOOTBALL JERSEY',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '50% OFF YOUR RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '70% OFF YOUR RIDE',
                  '100 EGP OFF YOUR CHEQUE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '70% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  '50% OFF YOUR RIDE',
                  'FREE RIDE',
                  '70% OFF YOUR RIDE'
  		);

		$today = date('d/m/Y');

		$this->db->where('added_at', $today);
		$this->db->where('prize', 'FOOTBALL JERSEY');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 1) {
			$prizes = array_diff($prizes, array('FOOTBALL JERSEY'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', 'FIFA VIDEO GAME 2018');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 1) {
			$prizes = array_diff($prizes, array('FIFA VIDEO GAME 2018'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', '100 EGP OFF YOUR CHEQUE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 10) {
			$prizes = array_diff($prizes, array('100 EGP OFF YOUR CHEQUE'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', 'FREE RIDE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 25) {
			$prizes = array_diff($prizes, array('FREE RIDE'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', '70% OFF YOUR RIDE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 50) {
			$prizes = array_diff($prizes, array('70% OFF YOUR RIDE'));
		}

		$this->db->where('added_at', $today);
		$this->db->where('prize', '50% OFF YOUR RIDE');
		$query = $this->db->get('users');
		if ($query->num_rows() >= 100) {
			$prizes = array_diff($prizes, array('50% OFF YOUR RIDE'));
		}

		if (!empty($prizes)) {
			$random_prize = $prizes[array_rand($prizes)];
		} else {
			$random_prize = "50% OFF YOUR RIDE";
		}
		
		$this->db->where('id', $user_id);
		$this->db->set('prize', $random_prize);
		
		$this->db->update('users');

		return $random_prize;
		
	}

}