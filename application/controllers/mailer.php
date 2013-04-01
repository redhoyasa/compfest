<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer extends Admin_Controller {

	public function index() {
		$this->template->admin('admin/dashboard');
	}

	/*
	 * Fungsi untuk menampilkan peserta seminar
	 */ 
	public function confirm_email_seminar($mail_address) {
		$this->email->clear();
	    $this->email->to($main_address);
	    $this->email->from('no-reply@compfest.web.id');
	    $this->email->subject('Seminar CompFest 2013');
	    $this->email->message('Test test test tests');
	    $this->email->send();
	}


}


/* End of file mailer.php */
/* Location: ./application/controllers/mailer.php */