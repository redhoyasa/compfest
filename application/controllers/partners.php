<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partners extends CI_Controller {

	public function index()
	{
		$this->template->display('front-end/partner');
	}
	
	public function ibm() {
		$this->template->display('front-end/ibm');
	}
	
	
}


/* End of file playground.php */
/* Location: ./application/controllers/playground.php */