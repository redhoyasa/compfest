<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competition extends CI_Controller {

	public function index()
	{
		$this->template->display('front-end/competition/competition');
	}

	public function register() {
		$this->template->display('front-end/competition/competition_register');
	}
	
	public function nandarcantik() {
		$this->template->display('front-end/competition/nandar');
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
	
	public function team_check($str)
	{
		if ($this->kompetisi_model->teamAvailable($str))
		{
			return true;	
		}
		else
		{
			$this->form_validation->set_message('team_check', 'Nama tim sudah digunakan');
			return false;
		}
	}

	public function register_competition() {
		$this->form_validation->set_rules('team_name', 'Nama Tim', 'required|strip_tags|callback_team_check|max_length[15]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[50]|min_length[6]|matches[repassword]');
		$this->form_validation->set_rules('institution', 'Instansi', 'required|strip_tags');
		$this->form_validation->set_rules('competition','kompetisi','required|strip_tags');

		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_message('alpha_numeric', '%s harus berisi alpha numeric');
		$this->form_validation->set_message('valid_email', '%s tidak valid');
		$this->form_validation->set_message('min_length', '%s harus lebih dari 4 karakter');
		$this->form_validation->set_message('matches','%s tidak sesuai');

		$this->form_validation->set_error_delimiters('<div class="alert alert-error" style="width:200px;">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->template->display('front-end/competition/competition_register');
		} else {
			$team['team_name'] = $this->input->post('team_name');
			$team['email'] = $this->input->post('email');
			$team['password'] = md5($this->input->post('password'));
			$team['institution'] = $this->input->post('institution');
			$team['id_event'] = $this->input->post('competition');
			$team['token'] = md5(md5($this->input->post('team_name')));
			$this->kompetisi_model->saveTeam($team);
			
			$this->load->library('email');
		    
		    	$config['wordwrap'] = FALSE;
		   	$config['mailtype'] = 'html';
	        	$this->email->initialize($config);

		    	$this->email->clear();
			$this->email->from('competition@compfest.web.id', 'Kompetisi CompFest 2013');
			$this->email->to($team['email']);
			$this->email->subject('Pendaftaran Kompetisi COMPFEST 2013');
			$body = 'Dear Tim, ' . $team['team_name'] . '!'. "\n\n".'<br>';
			$body .= 'Terima kasih telah mendaftar di kompetisi CompFest 2013.'.'<br>';
		    	$body .= 'Silakan konfirmasi akun tim Anda di halaman berikut. ';
		    	$body .= '<a href="http://www.compfest.web.id/competition/confirm/'.$team['token'].'/">';
		    	$body .= 'http://www.compfest.web.id/competition/confirm/'.$team['token'].'/</a> lalu login dengan akun anda.';
		    	$body .= '<br><br>Jika mengalami kesulitan, silahkan email ke <a href="mailto:competition@compfest.web.id">competition@compfest.web.id</a>';
		    	$body .= '<br><br>Selamat berpetualang di #FantasticJourney CompFest 2013!';
		 
		    
			$this->email->message($body);
			$this->email->send();
			
			redirect('competition/register_final/');
		}
	}
	
	function confirm() {
		$token = $this->uri->segment('3');
		$user = $this->kompetisi_model->get_team_token($token);
		if($user == null) {
			redirect('competition/register');
		}
		$this->kompetisi_model->active_token($token);
		redirect('auth');
	}

	public function register_final() {
		$this->template->display('front-end/competition/competition_register_final');
	}
}


/* End of file competition.php */
/* Location: ./application/controllers/competition.php */