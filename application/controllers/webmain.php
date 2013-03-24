<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webmain extends CI_Controller {

	public function index() {
		redirect(base_url());
	}

	public function page() {
		$this->template->display('main/pagedetail');
	}

	public function pageall() {
		$this->template->display('main/pageall');
	}

	public function news() {
		$this->template->display('main/newsdetail');
	}
}


/* End of file competition.php */
/* Location: ./application/controllers/webmain.php */