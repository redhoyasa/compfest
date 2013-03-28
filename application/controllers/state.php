<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class State extends CI_Controller {

	public function index(){
	}

	public function about(){
		$this->template->display('front-end/about');
	}
	
	public function contact_us(){
		$this->template->display('front-end/contact_us');
	}	

	public function roadshow(){
		$this->template->display('front-end/roadshow');
	}
}

