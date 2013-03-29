<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competition extends CI_Controller {

	public function index()
	{
		redirect('competition/register');
	}

	public function register() {
		$this->template->display('front-end/competition/competition_register');
	}

	public function email_check($str)
	{
		if ($this->kompetisi_model->userAvailable($str))
		{
			return true;	
		}
		else
		{
			$this->form_validation->set_message('email_check', 'Email sudah digunakan');
			return false;
		}
	}

	public function register_competition() {
		$this->form_validation->set_rules('team_name', 'Nama Tim', 'required|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[50]|min_length[4]');
		$this->form_validation->set_rules('institution', 'Instansi', 'required');
		$this->form_validation->set_rules('competition','kompetisi','required');

		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_message('alpha_numeric', '%s harus berisi alpha numeric');
		$this->form_validation->set_message('valid_email', '%s tidak valid');
		$this->form_validation->set_message('min_length', '%s harus lebih dari 4 karakter');

		$this->form_validation->set_error_delimiters('<div class="alert alert-error" style="width:200px;">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->display('front-end/competition/competition_register');
		} else {
			$team['team_name'] = $this->input->post('team_name');
			$team['email'] = $this->input->post('email');
			$team['password'] = md5($this->input->post('password'));
			$team['institution'] = $this->input->post('institution');
			$team['id_event'] = $this->input->post('competition');
			$this->kompetisi_model->saveTeam($team);
			
			$this->load->library('email');
			$this->email->from('competition@compfest.web.id', 'Kompetisi CompFest 2013');
			$this->email->to($team['email']);

			$this->email->subject('Pendaftaran Kompetisi COMPFEST 2013');
			$this->email->message('Halo, ' . $team['team_name'] . '!'. "\n\n" . 'Terima kasih telah mendaftar di ' . 
		'Kompetisi '.$this->kompetisi_model->getEventById($team['id_event'])->event_name.' Computer Festival 2013. Pendaftaran Anda sedang kami verifikasi. Silakan tunggu email balasan dari kami untuk ' .
		'mendapatkan tiket seminar Anda.' . "\n\n" . 'Jika ada pertanyaan, silakan disampaikan melalui competiti@compfest.web.id.' . "\n\n\n\n" . 'Terima kasih, ' .
		"\n" . 'Panitia Seminar Computer Festival 2013');
			$this->email->send();
			
			redirect('competition/register_final/');
		}
	}

	public function register_final() {
		$this->template->display('front-end/competition/competition_register_final');
	}
}


/* End of file competition.php */
/* Location: ./application/controllers/competition.php */