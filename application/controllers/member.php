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
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		if($team->team_status != 0) {
			redirect('member/dashboard');
		}
		$this->template->display('member/member_edit');
	}

	function cek_pass($str) {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		$login = $this->access->login($team->email, $str);
		if($login) {
			return true;
		} else {
			$this->form_validation->set_message('cek_pass','Password lama salah');
			return false;
		}
	}

	function update() {
		$this->form_validation->set_rules('old_password', 'Password lama', 'required|callback_cek_pass');
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

	function updatemember() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		if($team->team_status != 0) {
			redirect('member/dashboard');
		}
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		
	    $event = $this->kompetisi_model->getEventById($team->id_event);
	    
	    $this->form_validation->set_rules('register_name_1', 'Nama', 'min_length[3]|max_length[100]|required|strip_tags');
	    $this->form_validation->set_rules('register_phone_p', 'Nomor Telepon Pembimbing', 'numeric|strip_tags');
	    $this->form_validation->set_rules('register_phone_1', 'Nomor Telepon Ketua Tim', 'numeric|strip_tags|required');
	    $this->form_validation->set_rules('register_phone_2', 'Nomor Telepon Anggota 2', 'numeric|strip_tags');
	    $this->form_validation->set_rules('register_phone_3', 'Nomor Telepon Anggota 3', 'numeric|strip_tags');
	    $this->form_validation->set_rules('register_phone_4', 'Nomor Telepon Anggota 4', 'numeric|strip_tags');
	    $this->form_validation->set_rules('register_email_p', 'Email Pembimbing', 'valid_email|strip_tags');
	    $this->form_validation->set_rules('register_email_1', 'Email Ketua Tim', 'valid_email|strip_tags|required');
	    $this->form_validation->set_rules('register_email_2', 'Email Anggota 2', 'valid_email|strip_tags');
	    $this->form_validation->set_rules('register_email_3', 'Email Anggota 3', 'valid_email|strip_tags');
	    $this->form_validation->set_rules('register_email_4', 'Email Anggota 4', 'valid_email|strip_tags');
		
		$this->form_validation->set_error_delimiters('<div class="alert-error" style="text-align:center";">', '</div>');
		$this->form_validation->set_message('matches','%s tidak sesuai');
		$this->form_validation->set_message('required','%s harus diisi');
		$this->form_validation->set_message('max_length','panjang maksimal %s adalah 100 karakter');
		$this->form_validation->set_message('min_length','panjang minimal %s adalah 3 karakter');
		$this->form_validation->set_message('numeric','%s harus berupa angka');
		$this->form_validation->set_message('valid_email','%s harus berupa email valid');

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->display('member/member_edit');
		}
		else
		{
		
			for ($r = 1; $r <= $event->members; $r++) {
				$data['register_name'] = $this->input->post('register_name_' . $r);
				$data['register_email'] = $this->input->post('register_email_' . $r);
				$data['register_phone'] = $this->input->post('register_phone_' . $r);
				
			    if($this->member_model->get_member($team->id_team, $r) == false) {
					$data['register_role'] = $r;
			    	$data['id_team'] = $team->id_team;
					$this->member_model->save_member($data);
				} else {
					$id = $team->id_team;
					$role = $r;
					if($data['register_name'] == '') {
						$data['register_name'] = '';
						$data['register_email'] = '';
						$data['register_phone'] = '';
					}

					$this->member_model->edit_member($id, $role, $data);
				}
				//print_r($data);
			}

			//UNTUK PEMBIMBING
			if($this->input->post('register_name_p') != '') {
				$data['register_name'] = $this->input->post('register_name_p');
				$data['register_email'] = $this->input->post('register_email_p');
				$data['register_phone'] = $this->input->post('register_phone_p');

				if($this->member_model->get_member($team->id_team, 9) == false) {
					$data['register_role'] = 9;
			    	$data['id_team'] = $team->id_team;
					$this->member_model->save_member($data);
				} else {
					$id = $team->id_team;
					$role = 9;
					$this->member_model->edit_member($id, $role, $data);
				}
			}
			
			
			if($team->id_event == 5) {
				$update['role_oac'] = $this->input->post('role_oac');
			}
			
			if($team->id_event == 6) {
				$update['cat_mit'] = $this->input->post('cat_mit');
			}
			
			if($team->id_event == 6 || $team->id_event == 5) {
				$this->member_model->edit_team($team->id_team, $update);
			}
			redirect('member/detail');
			
			
			
			
			
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
			if($team->team_status == 1) {
				redirect('member/payment');
			}
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
					redirect('member/payment');
				} else {
					redirect('member/payment/fail');
				}
		} else {
			$this->template->display('member/payment');
		}
		
	}

	function idcard() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		if($team->team_status != 0) {
			redirect('member/dashboard');
		}
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		$id_team = $team->id_team;
		$role = $this->input->post('role');

		$config['upload_path'] = './uploads/idcard';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048';
		$config['max_width']  = '4960';
		$config['max_height']  = '4960';
		$config['file_name']  = 'idcard_'.$team->id_team.'_'.$role.'_'.md5($team->id_team);

		$this->upload->initialize($config);
		if ($this->upload->do_upload('idcard'))
		{
			$up = array('upload_data' => $this->upload->data());
			$data['register_id'] = $up['upload_data']['file_name'];

			$this->member_model->edit_member($team->id_team,$role,$data);
			redirect('member/detail');
		} else {
			redirect('member/detail/fail');
		}
	}

	function photo() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		if($team->team_status != 0) {
			redirect('member/dashboard');
		}
		$id_team = $team->id_team;
		$role = $this->input->post('role');

		$config['upload_path'] = './uploads/photo';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['max_width']  = '4960';
		$config['max_height']  = '4960';
		$config['file_name']  = 'photo_'.$team->id_team.'_'.$role.'_'.md5($team->id_team);

		$this->upload->initialize($config);
		if ($this->upload->do_upload('photo'))
		{
			$up = array('upload_data' => $this->upload->data());
			$data['register_photo'] = $up['upload_data']['file_name'];

			$this->member_model->edit_member($team->id_team,$role,$data);
			redirect('member/detail');
		} else {
			redirect('member/detail/fail');
		}
	}

	function confirm() {
		if(count($this->status->team_status()) == 0) {
			$team = $this->users_model->get_login_info($this->session->userdata('email'));	
			$data['team_status'] = 1;
			$this->member_model->edit_team($team->id_team, $data);
			redirect('member/dashboard');
		}
		redirect('member/dashboard');
	}
	
	//finalisasi ide 
	function finalization() {
		if(count($this->status->idea_status()) == 0) {
			$team = $this->users_model->get_login_info($this->session->userdata('email'));	
			$data['idea_fix'] = 1;
			$this->member_model->edit_team($team->id_team, $data);
			redirect('member/dashboard');
		}
		redirect('member/dashboard');
	}
	
	//batal finalisasi
	function unfinalization() {
	
		if(count($this->status->idea_status()) == 0) {
			$team = $this->users_model->get_login_info($this->session->userdata('email'));	
			$data['idea_fix'] = 0;
			$this->member_model->edit_team($team->id_team, $data);
			redirect('member/dashboard');
		}
		redirect('member/dashboard');
	}
	
	/*
	Submit Ide apps hanya untuk peserta mit
	*/
	function apps_idea() {
	
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
	
		//nampilin halaman edit apps idea
		$this->template->display('member/idea_mit');
	}
	
	//fungsi buat update ide ke database
	public function update_apps_idea() {
	
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		
		
	    	$event = $this->kompetisi_model->getEventById($team->id_event);
	

		if($team->id_event != 6) {
			redirect('member/dashboard');
		}
		
		$this->form_validation->set_rules('nama_aplikasi', 'Nama Aplikasi', 'min_length[3]|max_length[50]|strip_tags');
		$this->form_validation->set_rules('latar_ide', 'Latar Belakang Ide', 'min_length[3]|max_length[750]|strip_tags');
		$this->form_validation->set_rules('tujuan_aplikasi', 'Tujuan Aplikasi', 'min_length[3]|max_length[1500]|strip_tags');
		
		$this->form_validation->set_error_delimiters('<div class="alert-error" style="text-align:center;">', '</div>');
		$this->form_validation->set_message('required','%s harus diisi');
		$this->form_validation->set_message('max_length','melebihi batas maksimal karakter');
		$this->form_validation->set_message('min_length','panjang minimal %s adalah 3 karakter');

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->display('member/idea_mit');
		}
		else
		{
			$data['name_mit'] = $this->input->post('nama_aplikasi');
			$data['back_mit'] = $this->input->post('latar_ide');
			$data['purpose_mit'] = $this->input->post('tujuan_aplikasi');
			
			//get array of checked categories			
			$cat = $this->input->post('categories');
						
			$data['idea_cat_mit'] = json_encode($cat);
			
			//update data team
			$this->member_model->edit_team($team->id_team, $data);
			
			//echo $data['idea_cat_mit'];
			
			redirect('member/apps_idea');
		}

	}
	
	/*
	Submit Ide apps hanya untuk peserta edugames
	*/
	function game_idea() {
	
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		
		//nampilin halaman edit apps idea
		$this->template->display('member/idea_edu');
	}
	
	//fungsi buat update ide ke database
	public function update_game_idea() {
	
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
	
		
	    	$event = $this->kompetisi_model->getEventById($team->id_event);
	

		if($team->id_event != 7) {
			redirect('member/dashboard');
		}
		
		$this->form_validation->set_rules('nama_game', 'Nama Game', 'min_length[3]|max_length[50]|strip_tags');
		$this->form_validation->set_rules('latar_ide', 'Latar Belakang Ide', 'min_length[3]|max_length[750]|strip_tags');
		$this->form_validation->set_rules('tujuan_game', 'Tujuan Game', 'min_length[3]|max_length[1500]|strip_tags');
		
		$this->form_validation->set_error_delimiters('<div class="alert-error" style="text-align:center";">', '</div>');
		$this->form_validation->set_message('required','%s harus diisi');
		$this->form_validation->set_message('max_length','melebihi batas maksimal karakter');
		$this->form_validation->set_message('min_length','panjang minimal %s adalah 3 karakter');

		
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->display('member/idea_edu');
		}
		else
		{
			$data['name_edu'] = $this->input->post('nama_game');
			$data['back_edu'] = $this->input->post('latar_ide');
			$data['purpose_edu'] = $this->input->post('tujuan_game');
			
			//get array of checked categories			
			$cat = $this->input->post('categories');
						
			$data['idea_cat_edu'] = json_encode($cat);
			
			//update data team
			$this->member_model->edit_team($team->id_team, $data);
			
			//echo $data['idea_cat_mit'];
			
			redirect('member/game_idea');
		}

	}
	
	/*
	CV hanya untuk peserta OAC
	*/
	function cvoac() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));

		if($team->id_event != 5) {
			redirect('member/dashboard');
		}
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$team = $this->users_model->get_login_info($this->session->userdata('email'));
			if($team->team_status == 1) {
				redirect('member/cvoac');
			}
				$config['upload_path'] = './uploads/cv';
				$config['allowed_types'] = 'pdf';
				$config['max_size']	= '4096';
				$config['file_name']  = 'cv_'.$team->id_team.'9'.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('cvoac'))
				{
					$up = array('upload_data' => $this->upload->data());
		
					$data['cv_oac'] = $up['upload_data']['file_name'];

					$this->member_model->edit_team($team->id_team, $data);
					redirect('member/cvoac');
				} else {
					redirect('member/cvoac/fail');
				}
		} else {
			$this->template->display('member/cvoac');
		}
		
	}
	
	function pfoac() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));

		if($team->id_event != 5) {
			redirect('member/dashboard');
		}

			$team = $this->users_model->get_login_info($this->session->userdata('email'));
			if($team->team_status == 1) {
				redirect('member/cvoac');
			}
				$config['upload_path'] = './uploads/pf';
				$config['allowed_types'] = 'zip|rar|docx|doc|pdf|txt';
				$config['max_size']	= '4096';
				$config['file_name']  = 'pf_'.$team->id_team.'9'.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('pfoac'))
				{
					$up = array('upload_data' => $this->upload->data());
		
					$data['pf_oac'] = $up['upload_data']['file_name'];

					$this->member_model->edit_team($team->id_team, $data);
					redirect('member/cvoac');
				} else {
					redirect('member/cvoac/fail2');
				}
	}
	
	function cpcproof() {
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		$event = $this->kompetisi_model->getEventById($team->id_event);

		if($team->id_event != 1 && $team->id_event != 2) {
			redirect('member/dashboard');
		}
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$team = $this->users_model->get_login_info($this->session->userdata('email'));
			if($team->team_status == 1) {
				redirect('member/cpcproof');
			}
				$team = $this->users_model->get_login_info($this->session->userdata('email'));
				$config['upload_path'] = './uploads/surat';
				$config['allowed_types'] = 'zip|rar|docx|doc|pdf|gif|png|jpg';
				$config['max_size']	= '9196';
				$config['max_width']  = '4960';
				$config['max_height']  = '4960';
				$config['file_name']  = 'suratcpc_'.$team->id_team.'9'.md5($team->id_team);

				$this->upload->initialize($config);
				if ($this->upload->do_upload('cpc_surat'))
				{
					$up = array('upload_data' => $this->upload->data());
		
					$data['cpc_surat'] = $up['upload_data']['file_name'];

					$this->member_model->edit_team($team->id_team, $data);
					redirect('member/cpcproof');
				} else {
					redirect('member/cpcproof/fail');
					//$error = array('error' => $this->upload->display_errors());
					
					//print_r($error);
				}
		} else {
			$this->template->display('member/cpcproof');
		}
	}
	
	function prototype() {
	
		$team = $this->users_model->get_login_info($this->session->userdata('email'));
		$event = $this->kompetisi_model->getEventById($team->id_event);
	
		if($team->id_event != 7 && $team->id_event != 6) {
			redirect('member/dashboard');
		}
	
		$this->template->display('member/prototype');
	}
	
	function upload_prototype() {
			require 'DropboxUploader.php';
	    	try {
			$team = $this->users_model->get_login_info($this->session->userdata('email'));
			$event = $this->kompetisi_model->getEventById($team->id_event);
			$namatim = $team->team_name;
			/*
			 * UNTUK FILE PROTOTYPE
			 */
		
		
			if(!isset($_FILES['prototype'])){
				throw new Exception('Upload file prototype mengalami gangguan,silahkan <a href="http://compfest.web.id/member/upload_prototype">kembali</a>');
			}
		
			$ex = explode(".",$_FILES['prototype']['name']);
			$extension = $ex[count($ex) - 1]; 
			$types = array('rar','zip');
	
		if (!in_array($extension, $types)) {
	   	    throw new Exception('Format prototype tidak diizinkan,silahkan <a href="http://compfest.web.id/member/upload_prototype">kembali</a>');
		}
			
	        if ($_FILES['prototype']['error'] !== UPLOAD_ERR_OK)
	            throw new Exception('File prototype tidak dapat diupload dari komputer anda,silahkan <a href="http://compfest.web.id/member/upload_prototype">kembali</a>');
	
	        $tmpDir = uniqid('/tmp/DropboxUploader');
	        if (!mkdir($tmpDir))
	            throw new Exception('Upload file prototype mengalami gangguan,silahkan <a href="http://compfest.web.id/member/upload_prototype">kembali</a>');
	
	        if ($_FILES['prototype']['name'] === "")
	            throw new Exception('Nama file prototype tidak didukung silahkan <a href="http://compfest.web.id/member/upload_prototype">kembali</a>');
	
	        $tmpFile = $tmpDir.'/Prototype1_'.$namatim.'.'.$extension;
	        if (!move_uploaded_file($_FILES['prototype']['tmp_name'], $tmpFile))
	            throw new Exception('Tidak dapat mengupload file prototype silahkan <a href="http://compfest.web.id/member/upload_prototype">kembali</a>');
				
	
			
	        //Upload file
		
		
		if($team->id_event == 7) {
			$uploader = new DropboxUploader('zaka.zaidan@ui.ac.id', 'hal0hal0bandung');
			$uploader->upload($tmpFile, 'COMPFEST2013/PROTOTYPE/EDUGAMES/'.$namatim.'/');
			
			$this->load->library('email');
		    
		    $config['wordwrap'] = FALSE;
		   	$config['mailtype'] = 'html';
	        $this->email->initialize($config);

		    $this->email->clear();
			$this->email->from('competition@compfest.web.id', 'Kompetisi CompFest 2013');
			$this->email->to('zaka.smansa@gmail.com');
			$this->email->subject('[Prototype] ' . $namatim);
			$body = 'Dear Panitia EduGames'. "\n\n".'<br>';
			$body .= 'Kami dari tim '. $namatim.' telah mengirim prototype aplikasi kami.'.'<br>';

			$this->email->message($body);
			$this->email->send();
		}else{
			$uploader = new DropboxUploader('it.solution@compfest.web.id', 'AntiGaring');
			$uploader->upload($tmpFile, 'PROTOTYPE/'.$namatim.'/');
			
			$this->load->library('email');
		    
		    $config['wordwrap'] = FALSE;
		   	$config['mailtype'] = 'html';
	        $this->email->initialize($config);

		    $this->email->clear();
			$this->email->from('competition@compfest.web.id', 'Kompetisi CompFest 2013');
			$this->email->to('it.solution@compfest.web.id');
			$this->email->subject('[Prototype] ' . $namatim);
			$body = 'Dear Panitia Mobile IT Solution'. "\n\n".'<br>';
			$body .= 'Kami dari tim '. $namatim.' telah mengirim prototype aplikasi kami.'.'<br>';

			$this->email->message($body);
			$this->email->send();
		}
			
		$date = date("d-M-Y H:i:s");
		$data['prototype'] = $team->prototype + 1;
		$this->member_model->edit_team($team->id_team, $data);
	    } catch(Exception $e) {
		//echo "<h2>Upload Gagal</h2><span class=\"alert alert-error\">" . htmlspecialchars($e->getMessage()) . "</span><hr>";
		redirect('member/prototype/fail');
	    }
	
	    //bersih-bersih
	    if (isset($tmpFile) && file_exists($tmpFile))
	        unlink($tmpFile);
			
			
	    if (isset($tmpFileBidang) && file_exists($tmpFileBidang))
	        unlink($tmpFileBidang);
		
		redirect('member/prototype');
	}

}


/* End of file competition.php */
/* Location: ./application/controllers/competition.php */