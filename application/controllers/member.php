<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends Member_Controller {

	public function index()
	{
		redirect('member/dashboard');
	}

	public function dashboard() {
		$this->template->display('member/dashboard');
	}

	public function edit() {
		$this->template->display('member/member_edit');
	}

	function update() {
		$this->form_validation->set_rules('password', 'Password', 'matches[re_password]|required');
		$this->form_validation->set_error_delimiters('<div class="alert-error" style="text-align:center;padding:5px;border-radius:5px;font-size:13px;">', '</div><br>');
		$this->form_validation->set_message('matches','%s tidak sesuai');
		$this->form_validation->set_message('required','%s harus diisi');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->display('member/dashboard');
		}
		else
		{
			$id_team = $this->session->userdata('id_team');
			$password = $this->input->post('password');
			$this->users_model->update($id_team,$password);
			$data['passu'] = true;
			$this->template->display('member/dashboard',$data);
		}
	}

	function update_member() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		
	    $event = $this->kompetisi_model->getEventById($team->id_event);

	    //kosongkan member terlebih dahulu
	    if($this->member_model->get_all_member($team->id_team) != false) {
			$this->member_model->empty_member($team->id_team);
		}
	    
	    for ($r = 1; $r <= $event->members; $r++) {
			$this->form_validation->set_rules('register_name_' . $r, 'Nama', 'min_length[3]|max_length[100]|required|strip_tags');
		}
		$this->form_validation->set_error_delimiters('<div class="	alert-error" style="text-align:center";">', '</div>');
		$this->form_validation->set_message('matches','%s tidak sesuai');
		$this->form_validation->set_message('required','%s harus diisi');
		$this->form_validation->set_message('max_length','panjang maksimal %s adalah 100 karakter');
		$this->form_validation->set_message('min_length','panjang minimal %s adalah 3 karakter');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->display('member/member_edit');
		}
		else
		{
			$error = array();
			for ($r = 1; $r <= $event->members; $r++) {
				$upload[$r] = true;	
				$config['upload_path'] = './uploads/photo';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2048';
				$config['max_width']  = '4960';
				$config['max_height']  = '4960';
				$config['file_name']  = 'Photo_'.$team->id_team.''.$r.''.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('register_photo_'.$r))
				{
					$up = array('upload_data' => $this->upload->data());
		
					$data['register_photo'] = $up['upload_data']['file_name'];
				} else {
					$upload = false;
					echo $this->upload->display_errors();
				}


				$config['upload_path'] = './uploads/idcard';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2048';
				$config['max_width']  = '4960';
				$config['max_height']  = '4960';
				$config['file_name']  = 'ID_' .$team->id_team.''.$r.''.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('register_id_'.$r))
				{
					$up = array('upload_data' => $this->upload->data());

					$data['register_id'] = $up['upload_data']['file_name'];
				} else {
					$upload = false;
				}


				$data['register_name'] = $this->input->post('register_name_' . $r);
				$data['register_email'] = $this->input->post('register_email_' . $r);
				$data['register_phone'] = $this->input->post('register_phone_' . $r);
				$data['register_role'] = $this->input->post('register_role_' . $r);
				$data['id_team'] = $team->id_team;

				$this->member_model->save_member($data);
				if(!$upload) {
					$error[] = true;
				}
				
			}

			//UPLOAD UNTUK PEMBIMBING
			if($this->input->post('register_name_p') != '') {
				$data = array(); 
				$upload = true;	
				$config['upload_path'] = './uploads/photo';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2048';
				$config['max_width']  = '4960';
				$config['max_height']  = '4960';
				$config['file_name']  = 'Photo_'.$team->id_team.'9'.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('register_photo_p'))
				{
					$up = array('upload_data' => $this->upload->data());
		
					$data['register_photo'] = $up['upload_data']['file_name'];
				} else {
					$upload = false;
				}


				$config['upload_path'] = './uploads/idcard';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2048';
				$config['max_width']  = '4960';
				$config['max_height']  = '4960';
				$config['file_name']  = 'ID_' .$team->id_team.''.$r.''.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('register_id_p'))
				{
					$up = array('upload_data' => $this->upload->data());

					$data['register_id'] = $up['upload_data']['file_name'];
				} else {
					$upload = false;
				}
				

				$data['register_name'] = $this->input->post('register_name_p');
				$data['register_email'] = $this->input->post('register_email_p');
				$data['register_phone'] = $this->input->post('register_phone_p');
				$data['register_role'] = $this->input->post('register_role_p');
				$data['id_team'] = $team->id_team;

				if(!$upload) {
					$error[] = true;
				}

				$this->member_model->save_member($data);
			}
			//end of UPLOAD PEMBIMBING

			if(count($error) > 0 ) {
				$update['team_status'] = 0;
			} else {
				$update['team_status'] = 1;
			}
			$this->member_model->edit_team($team->id_team, $update);
			redirect("member/detail");
			
		}
	}

	function detail() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
	    $event = $this->kompetisi_model->getEventById($team->id_event);

		if($this->member_model->get_all_member($team->id_team) == false) {
			redirect('member/edit');
		} else {
			$this->template->display('member/detail');
		}
	    
	}

	function payment() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		$event = $this->kompetisi_model->getEventById($team->id_event);

		if($event->payment == 0) {
			redirect('member/dashboard');
		}
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$team = $this->users_model->get_login_info($this->session->userdata('email'));
				$config['upload_path'] = './uploads/payment';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '2048';
				$config['max_width']  = '4960';
				$config['max_height']  = '4960';
				$config['file_name']  = 'payment_'.$team->id_team.'9'.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('payment'))
				{
					$up = array('upload_data' => $this->upload->data());
		
					$data['payment'] = $up['upload_data']['file_name'];

					$this->member_model->edit_team($team->id_team, $data);
					redirect('member/dashboard');
				} else {
					redirect('member/payment/fail');
				}
				echo "Post";
		} else {
			$this->template->display('member/payment');
		}
		
	}
}


/* End of file competition.php */
/* Location: ./application/controllers/competition.php */