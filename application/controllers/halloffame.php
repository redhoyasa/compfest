<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halloffame extends CI_Controller {

	public function index()
	{
		$this->template->display('front-end/halloffame');
	}
}

