<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// constructor	
	function __construct() {
		
		parent::__construct();
		date_default_timezone_set("Africa/Cairo"); // set time to cairo
		$this->load->model('home_model'); // load home model once

	}

	// display Home
	public function index() {
		
		$data['title'] = 'Register';
		$this->session->sess_destroy();
		$this->load->view('register.php', $data);
		
	}

	// register function - if the user valid then register
	public function register() {

		$response = $this->home_model->register();

		if($response == "duplicate_phone") {
			echo "duplicate_phone";
		} else {
			echo "done";
		}
	}

	// display wheel
	public function wheel() {
		
		$data['title'] = 'Wheel';
		$data['prize'] = $this->home_model->get_prize();
		$this->load->view('wheel.php', $data);
		
	}

}