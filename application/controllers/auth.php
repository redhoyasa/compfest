<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	/*
	 * Fungsi untuk menampilan login form untuk peserta
	 */
	public function index() {
		if($this->access->is_login()) {
			redirect("member/dashboard");
		} else $this->template->display('auth/login');
	}

	/*
	 * Fungsi untuk menampilan login form untuk admin
	 */
	public function admin() {
		$this->template->display('admin/login');
	}

	/*
	 * Fungsi untuk login peserta
	 */
	public function login() {
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		$this->form_validation->set_rules('email','Email','trim|required|strip_tags|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('token','token','callback_check_login');
		
		if($this->form_validation->run() == false) {
			$this->template->display('auth/login');
		} else {
			redirect('member');
		}
	}

	/*
	 * Fungsi untuk memvalidasi input login peserta
	 */
	function check_login() {
		$username = $this->input->post('email',true);
		$password = $this->input->post('password',true);
		
		$login = $this->access->login($username, $password);
		
		if($login) {
			return true;
		} else {
			$this->form_validation->set_message('check_login','Wrong username or password');
			return false;
		}
	}

	/*
	 * Fungsi untuk menampilan logout
	 */
	function logout() {
		$this->access->logout();
		redirect(base_url());
	}


	//ADMIN DISNI
	/*
	 * Fungsi untuk login admin
	 */
	public function admin_login() {
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		$this->form_validation->set_rules('email','Email','trim|required|strip_tags|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('token','token','callback_check_admin_login');
		if($this->form_validation->run() == false) {
			echo $this->form_validation->run();
			$this->template->display('admin/login');
		} else {
			redirect('admin/');
		}
	}

	/*
	 * Fungsi untuk memvalidasi input login admin
	 */
	function check_admin_login() {
		$username = $this->input->post('email',true);
		$password = $this->input->post('password',true);
		
		$login = $this->access->admin_login($username, $password);
		
		if($login) {
			return true;
		} else {
			$this->form_validation->set_message('check_login','Wrong username or password');
			return false;
		}
	}

}


/* End of file auth.php */
/* Location: ./application/controllers/auth.php */