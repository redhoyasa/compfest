<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entertainment extends CI_Controller {

	public function index()
	{
		$this->template->display('front-end/entertainment');
	}
	
	public function betabok()
	{
		$this->template->display('front-end/overview');
	}

}


/* End of file playground.php */
/* Location: ./application/controllers/playground.php */