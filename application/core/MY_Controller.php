<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Member_Controller extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('access');
		if(!$this->access->is_login()) {
			redirect('auth');
		}	
	}
}

class Admin_Controller extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('access');
		if(!$this->access->is_admin()) {
			redirect('auth/admin');
		}	
	}
}

class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
}