<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Status {

	function __construct() {
		$this->CI = & get_instance();
		//$this->CI->load->helper->('cookie');
		//$this->CI->load->model->('users_model');
		
		$this->users_model = & $this->CI->users_model;
		$this->member_model = & $this->CI->member_model;
		$this->kompetisi_model = & $this->CI->kompetisi_model;
	}
	
	function seminar_status($str) {
		switch($str) {
			case 0 : return '<span class="label">Sedang mendaftar</span>';
			case 1 : return '<span class="label label-info">Terdaftar</span>';
			case 2 : return '<span class="label label-important">Menunggu Konfirmasi</span>';
			case 3 : return '<span class="label label-success">Hadir</span>';
			case 4 : return '<span class="label label-inverse">Menolak</span>';
		}
	}

	function team_resume_status($str) {
		switch($str) {
			case 0 : return '<span class="label">Sedang mendaftar</span>';
			case 1 : return '<span class="label label-info">Lengkap, menunggu persetujuan</span>';
			case 2 : return '<span class="label label-info">Terdaftar</span>';
		}
	}
	
	
	function oac_position($str) {
		switch($str) {
			case 1 : return 'Animator';
			case 2 : return 'Modeler';
			case 3 : return 'Designer & Ilustrator';
			case 4 : return 'Sound Engineer';
			default: return 'Belum mengisi';
		}
	}
	
	function mobile_category($str) {
		switch($str) {
			case 1 : return 'Transportation';
			case 2 : return 'Environment';
			case 3 : return 'Health';
			case 4 : return 'I Love My City';
			default: return 'Belum mengisi';
		}
	}
	
	function edugames_category($str) {
		switch($str) {
			case 1 : return 'Kids Education';
			case 2 : return 'Math & Science Education';
			case 3 : return 'Linguistic Education';
			case 4 : return 'General Knowledge';
			default: return 'Belum mengisi';
		}
	}
	
	function cac_status($str) {
		switch($str) {
			case 1 : return 'Pending';
			case 2 : return 'Accept';
			case 3 : return 'Reject';
			default: return 'Kosong';
		}
	}
	
	function idea_status() {
		$team = $this->users_model->get_login_info($this->CI->session->userdata('email'));
		$id_team = $team->id_team;
		$event = $this->kompetisi_model->getEventById($team->id_event);
		$error = array();
	
		if(($team->name_mit == '' || $team->back_mit == '' || $team->purpose_mit == '' || $team->idea_cat_mit == 'false') && $team->id_event == 6){
			$error[] = 'Belum melengkapi ide aplikasi, silahkan lengkapi ide aplikasi Anda';			
		}
			
		if(($team->name_edu == '' || $team->back_edu == '' || $team->purpose_edu == '' || $team->idea_cat_edu == 'false') && $team->id_event == 7){
			$error[] = 'Belum melengkapi ide game, silahkan lengkapi ide game Anda';			
		}
		
		

		return $error;
	
	}

	function team_status() {
		$team = $this->users_model->get_login_info($this->CI->session->userdata('email'));
		$id_team = $team->id_team;
		$event = $this->kompetisi_model->getEventById($team->id_event);
		$error = array();
		
		//cek anggota
		$member = $this->member_model->get_all_member($id_team); 
		if(!$member) {
			$error[] = 'Data anggota belum lengkap, silahkan lengkapi pada halaman <a href="'. site_url('member/edit') .'">Ubah Tim</a>';
			//jika tidak ada anggota
			return $error;
		} else {
			//jika ada
			foreach ($member as $m) {
				if($m->register_name != '') {
					//jika ada nama
					if($m->register_id == ''  && $m->register_role != 9) {
						//jika id card kosong
						$error[] = 'Kartu Identitas ' . $this->detail_role($m->register_role) . ' belum diunggah, Unggah pada halaman <a href="'. site_url('member/detail') .'">ini</a>';
					}

					/*if($m->register_photo == '' && $m->register_role != 9) {
						//jika foto kosong
						$error[] = 'Foto ' . $this->detail_role($m->register_role) . ' tidak lengkap, silahkan lengkapi pada halaman <a href="'. site_url('member/detail') .'">ini</a>';
						
					}*/
				}
			}

			//cek buki pembayaran
			if($team->payment == '' && $event->payment == 1) {
				$error[] = 'Bukti Pembayaran belum diunggah';
			}
			
			if($team->cv_oac == '' && $team->id_event == 5) {
				$error[] = 'CV belum diunggah';
			}
			
			if($team->pf_oac == '' && $team->id_event == 5) {
				$error[] = 'Portofolio belum diunggah';
			}
			if($team->role_oac == 0 && $team->id_event == 5) {
				$error[] = 'Belum mengisi posisi, silahkan ubah profil Anda';
			}
			
			if($team->cpc_surat == '' && ($team->id_event == 1 || $team->id_event == 2)) {
				$error[] = 'Belum mengunggah surat keterangan, silahkan unggah dihalaman Unggah Surat';
			}
			
			
			
			return $error;			
		}


	}

	function detail_role($int) {
		$team = $this->users_model->get_login_info($this->CI->session->userdata('email'));
		switch($int) {
			case 1 : 
				if($team->id_event == 2 || $team->id_event == 5)
					return "Peserta";
				else 
					return "Ketua Tim";
			case 9 : return "Pembimbing";
			default: return "Anggota tim " . ($int - 1);
		}
	}
}
?>