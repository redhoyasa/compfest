<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seminar extends CI_Controller {

	public function pawash(){
		$this->template->display('front-end/seminar_v1.php');
	}

	public function index()
	{
		$this->template->display('front-end/seminar/seminar');
	}
	
	public function register()
	{
		$this->template->display('front-end/seminar/seminar_register');
	}

	public function email_check($str)
	{
		if ($this->seminar_model->userAvailable($str))
		{
			return true;	
		}
		else
		{
			$this->form_validation->set_message('email_check', 'Email sudah digunakan');
			return false;
		}
	}

	public function register_seminar()
	{

		$this->form_validation->set_rules('name', 'Nama', 'required|strip_tags');
		$this->form_validation->set_rules('id_no', 'Nomor Identitas', 'required|strip_tags');
		$this->form_validation->set_rules('phone', 'Nomor Telepon', 'required|numeric|strip_tags');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_message('alpha', '%s harus berisi alfabet');
		$this->form_validation->set_message('valid_email', '%s tidak valid');
		$this->form_validation->set_message('numeric', '%s harus berisi angka');
		$this->form_validation->set_message('min_length', 'Motivasi %s harus lebih dari 100 karakter');

		$this->form_validation->set_error_delimiters('<div class="alert alert-error" style="width:200px;">', '</div>');

		$valid = false;
		$submit = array();
		$row = $this->seminar_model->getSeminar();
		foreach($row as $r) {
			if($this->input->post('seminar-'. $r->id_seminar) == 1) {
				$this->form_validation->set_rules('motivation-'. $r->id_seminar, 'Seminar ' . $r->id_seminar, 'required|min_length[100]|strip_tags');
				$valid = true;
				$submit['formerror-'.$r->id_seminar] = true;
			}
		}

		if ($this->form_validation->run() == FALSE)
		{
			$formerror['s'] = $submit;
			$this->template->display('front-end/seminar/seminar_register', $formerror);
		}
		else
		{
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['id_no'] = $this->input->post('id_no');
			$data['phone'] = $this->input->post('phone');
			$data['token'] = md5($this->input->post('email'));
			$data['status'] = '0';

			if($valid) 
			{
				$this->seminar_model->saveRegister($data);
				$user = $this->seminar_model->getUserByEmail($data['email']);

				$row = $this->seminar_model->getSeminar();
				$seminar = array();
				foreach($row as $r) {
					if($this->input->post('seminar-'. $r->id_seminar) == 1) {
						$seminar['id_seminar_user'] = $user->id_seminar_user;
						$seminar['id_seminar'] = $r->id_seminar;
						$seminar['motivation'] = $this->input->post('motivation-'. $r->id_seminar);
						$seminar['approve'] = 0;
						$this->seminar_model->saveSeminarRegister($seminar);
					}
				}

				redirect('seminar/register_final/' . $seminar['id_seminar_user'] .'/'. $data['token'],$data);

			} 
			else 
			{
				if($this->seminar_model->userAvailable($data['email'])) {
					$out['noa'] = true;
				}
				$out['choice'] = true;
				$this->template->display('front-end/seminar/seminar_register',$out);
			} 
			
		}
	}

	function register_final() {
		$id_seminar_user = $this->uri->segment('3');
		$token = $this->uri->segment('4');
		$user = $this->seminar_model->getUserById($id_seminar_user);
		if($user == null) {
			redirect('seminar/register');
		}
		if($token == $user->token && $user->status == 0) {
			$data['nama'] = $user->name;
			$data['email'] = $user->email;

			$data['seminar'] = $this->seminar_model->getSeminarUserById($user->id_seminar_user);
			$this->template->display('front-end/seminar/seminar_register_final',$data);
		} else {
			redirect('seminar/register');
		}
	}

	function finish() {
		$id_seminar_user = $this->uri->segment('3');
		$token = $this->uri->segment('4');
		$user = $this->seminar_model->getUserById($id_seminar_user);
		if($user == null) {
			redirect('seminar/register');
		}
		if($token == $user->token) {
			if($user->status == 0) {
				$this->seminar_model->UpdateStatusUserById($id_seminar_user, 1);

				$this->load->library('email');
				$this->email->from('seminar@compfest.web.id', 'Seminar CompFest 2013');
				$this->email->to($user->email);

				$this->email->subject('Pendaftaran Seminar COMPFEST 2013');
				$this->email->message('Halo, ' . $user->name . '!'. "\n\n" . 'Terima kasih telah mendaftar di ' . 
			'Seminar Computer Festival 2013. Pendaftaran Anda sedang kami verifikasi. Silakan tunggu email balasan dari kami untuk ' .
			'mendapatkan tiket seminar Anda.' . "\n\n" . 'Jika ada pertanyaan, silakan disampaikan melalui event@compfest.web.id.' . "\n\n\n\n" . 'Terima kasih, ' .
			"\n" . 'Panitia Seminar Computer Festival 2013');
				$this->email->send();
			}
			$this->template->display('front-end/seminar/seminar_registration_complete');
		} else  {
			redirect('seminar/register');
		}
	}

	function refund() {
		$id_seminar_user = $this->uri->segment('3');
		$token = $this->uri->segment('4');
		$user = $this->seminar_model->getUserById($id_seminar_user);
		if($user == null) {
			redirect('seminar/register');
		}
		if($token == $user->token && $user->status == 0) {
			$this->seminar_model->DeleteUserById($id_seminar_user);
			$this->seminar_model->DeleteSeminarUserById($id_seminar_user);
		}
		redirect('seminar/register');
	}

	function confirm() {
		$id_seminar_user = $this->uri->segment('4');
		$token = $this->uri->segment('3');
		$user = $this->seminar_model->getUserById($id_seminar_user);
		if($user == null) {
			redirect('seminar/register');
		}
		if($token == $user->token) {
			$data['name'] = $user->name;
			$data['token'] = $user->token;
			$data['id_seminar_user'] = $user->id_seminar_user;
			$data['seminar'] = $this->seminar_model->getSeminarUserById($id_seminar_user);

			$this->template->display('front-end/seminar/seminar_confirm', $data);
		} else {
			redirect('seminar/register');
		}
	}

	function attend() {
		$id_seminar_user = $this->uri->segment('4');
		$token = $this->uri->segment('3');
		$user = $this->seminar_model->getUserById($id_seminar_user);
		if($user == null) {
			redirect('seminar/register');
		}
		if($token == $user->token && $user->status == 2) {
			$this->seminar_model->UpdateStatusUserById($id_seminar_user, 3);
			$this->template->display('front-end/seminar/seminar_attend');
		} else {
			redirect('seminar/register');
		}
	}

	function cancel() {
		$id_seminar_user = $this->uri->segment('4');
		$token = $this->uri->segment('3');
		$user = $this->seminar_model->getUserById($id_seminar_user);
		if($user == null) {
			redirect('seminar/register');
		}
		if($token == $user->token && $user->status == 2) {
			$this->seminar_model->UpdateStatusUserById($id_seminar_user, 4);
			$this->template->display('front-end/seminar/seminar_cancel');
		} else {
			redirect('seminar/register');
		}
	}
}


/* End of file seminar.php */
/* Location: ./application/controllers/seminar.php */