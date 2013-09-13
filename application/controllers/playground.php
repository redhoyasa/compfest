<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playground extends CI_Controller {

	public function index()
	{
		$this->template->display('front-end/playground');
	}
	

	public function daftar($id) {
		$this->load->model('playground_model');
		$data = array (
				'id'			=>  $id,
	 			'nama'  		=>  'Sutanto',
				'email'			=>  'tanto@gmail.com',
				'twitter' 		=>  '@susanto',
				'tim'			=>  'Cinta Keluarga',
				'point_used'	=>  0
	 		  );


		if ($this->playground_model->insert_user($data)) {
			echo "Berhasil";
		} else echo "Gagal";

	}	

	public function user_info($id) {
		$this->load->model('playground_model');
		$data = array (
				'id'			=>  $id,
	 			'nama'  		=>  'Sutanto',
				'email'			=>  'tanto@gmail.com',
				'twitter' 		=>  '@susanto',
				'tim'			=>  'Cinta Keluarga',
				'point_used'	=>  0
	 		  );


		$data = $this->playground_model->get_user_by($id);
		foreach ($data as $value) {
			echo $value. "<br>";
		}
	}

	public function decrease_score($id,$minus){
		$this->load->model('playground_model');
		$this->playground_model->point_decrease($id,$minus);
	}

	public function increase_score($id,$plus){
		echo $id ."+".$plus;
		$this->load->model('playground_model');
		$this->playground_model->point_increase($id,$plus);
	}
	
}


/* End of file playground.php */
/* Location: ./application/controllers/playground.php */