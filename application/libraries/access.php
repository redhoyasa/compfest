<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Access {
	public $user;
	
	function __construct() {
		$this->CI = & get_instance();
		$auth = $this->CI->config->item('auth');
		//$this->CI->load->helper->('cookie');
		//$this->CI->load->model->('users_model');
		
		$this->users_model = & $this->CI->users_model;
	}
	
	/*
	 * Cek login USER
	 */
	function login($email, $password) {
		$result = $this->users_model->get_login_info($email);
		if($result) {
			$password = md5($password);
			if($password === $result->password) {
				$id_team = $result->id_team;
				$this->CI->session->set_userdata('id_team',$id_team);
				$this->CI->session->set_userdata('email',$email);
				return true;
			}
			return false;
		}
	}
	
	
	/*
	 * cek apakah login
	 */
	function is_login() {
		return ($this->CI->session->userdata('id_team')) ? true : false;
	}



	//UNTUK ADMIN DISNI
	function admin_login($email, $password) {
		$result = $this->users_model->get_admin_info($email);
		if($result) {
			$password = md5($password);
			if($password === $result->password) {
				$id_admin = $result->id_admin;
				$event = $result->event;
				$this->CI->session->set_userdata('id_admin',$id_admin);
				$this->CI->session->set_userdata('event',$event);
				return true;
			}
			return false;
		}
	}

	function is_admin() {
		return ($this->CI->session->userdata('id_admin')) ? true : false;
	}
	
	/*
	 * logout
	 */
	function logout() {
		$this->CI->session->unset_userdata('id_team');
		$this->CI->session->unset_userdata('id_admin');
		$this->CI->session->unset_userdata('email');
	}
}
?>