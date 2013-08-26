<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CP extends CI_Controller {

	public function index()
	{
		redirect('competition/');
	}
	
	public function penyisihan($kategori) {
		if ($kategori === "SMA"){
			$this->load->view('front-end/competition/cp/SMA');
		} else if ($kategori === "Mahasiswa") {
			$this->load->view('front-end/competition/cp/Mahasiswa');
		}
	}
	
	
}


/* End of file playground.php */
/* Location: ./application/controllers/playground.php */