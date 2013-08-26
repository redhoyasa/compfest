<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Play extends CI_Controller {

	public function index() {
		$this->template->display('front-end/playground');
	}
	public function id($id = null) {
		echo "This is PlayGround System, access with ID: '$id' <br>";
		echo "UNDER CONSTURCTION";
	}

}