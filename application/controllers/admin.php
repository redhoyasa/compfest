<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {

	public function index() {
		$this->template->admin('admin/dashboard');
	}

	/*
	 * Fungsi untuk menampilkan peserta seminar
	 */ 
	public function seminar() {
		if($this->session->userdata('event') != 2) {
			redirect('admin');
		}
		$this->template->admin('admin/seminar');
	}

	/*
	 * Fungsi untuk menampilkan detil peserta seminar
	 */
	public function seminar_user() {
		if($this->session->userdata('event') != 2) {
			redirect('admin');
		}
		$id_user = $this->uri->segment(3);
		$user = $this->seminar_model->getUserById($id_user);
		if($user == null) {
			redirect('admin/seminar');
			return false;
		}

		$this->template->admin('admin/seminar_user');	
	}

	/*
	 * Fungsi untuk mengupdate status peserta seminar
	 */
	function update_seminar_user() {
		if($this->session->userdata('event') != 2) {
			redirect('admin');
		}
		$id_user = $this->uri->segment('3');
		$status = $this->uri->segment('4');

		$this->seminar_model->UpdateStatusUserById($id_user, $status);

		if($status == '2') {
			//kirim email notifikasi disini
		}

		redirect(site_url('admin/seminar_user') . '/' . $id_user);
	}

	/*
	 * Fungsi untuk menampilkan semua peserta kompetisi
	 */
	public function competition() {
		if($this->session->userdata('event') != 1) {
			redirect('admin');
		}
		$this->template->admin('admin/team_list');
	}

	/*
	 * Fungsi untuk menampilkan detil tim kompetisi
	 */
	public function competition_team() {
		if($this->session->userdata('event') != 1) {
			redirect('admin');
		}
		$this->template->admin('admin/team_detail');
	}

	/*
	 * Fungsi untuk mengubah status tim
	 */
	public function team_update() {
		if($this->session->userdata('event') != 1) {
			redirect('admin');
		}
		$id_team = $this->uri->segment('3');
		$status['team_status'] = $this->uri->segment('4');

		$this->member_model->edit_team($id_team, $status);

		if($status == '2') {
			//kirim email notifikasi disini
		}

		redirect(site_url('admin/competition_team') . '/' . $id_team);
	}

	/*
	 * Fungsi untuk menghapus tim
	 */
	public function team_delete() {
		if($this->session->userdata('event') != 1) {
			redirect('admin');
		}
		$id_team = $this->uri->segment('3');
		$this->member_model->delete_team($id_team);

		redirect(site_url('admin/competition') . '/' . $this->uri->segment('4'));
	}


	/*
	 * Fungsi untuk menampilkan semua berita
	 */
	public function news() {
		$this->template->admin('admin/news');
	}

	/*
	 * Fungsi untuk menyimpan berita
	 */
	public function save_news() {

		$data['title'] =  $this->input->post('title');
		if($data['title'] == '') {
			$date = new DateTime();
			$data['title'] = $date->format('Y-m-d H:i:s');
		}

		$data['url'] =  $this->input->post('url');
		if($data['url'] == '') {
			$date = new DateTime();
			$data['url'] = $date->format('Y-m-d H:i:s');
		}

		$data['publish'] =  0;
		$data['content'] =  $this->input->post('content');

		$this->news_model->save_news($data);
		redirect('admin/news');
	}

	/*
	 * Fungsi untuk update berita
	 */
	public function update_news() {
		$id = $this->input->post('id_news');

		$data['title'] =  $this->input->post('title');
		if($data['title'] == '') {
			$date = new DateTime();
			$data['title'] = $date->format('Y-m-d H:i:s');
		}

		$data['url'] =  $this->input->post('url');
		if($data['url'] == '') {
			$date = new DateTime();
			$data['url'] = $date->format('Y-m-d H:i:s');
		}

		if($this->session->userdata('event') == 0 || $this->session->userdata('event') == 0) {
			$data['publish'] =  $this->input->post('publish');
		} else {
			$data['publish'] =  0;
		}
		$data['content'] =  $this->input->post('content');

		$this->news_model->update_news($id, $data);
		redirect('admin/news');
	}

	/*
	 * Fungsi untuk menambahkan berita
	 */
	public function add_news() {
		$this->template->admin('admin/news_add');
	}

	/*
	 * Fungsi untuk menyunting berita
	 */
	public function edit_news() {
		$this->template->admin('admin/news_edit');
	}

	/*
	 * Fungsi untuk menghapus berita
	 */
	public function delete_news() {
		$id = $this->uri->segment(3);
		$this->news_model->delete_news($id);

		redirect('admin/news');
	}

	/*
	 * Fungsi untuk menampilkan semua halaman
	 */
	public function page() {
		if($this->session->userdata('event') != 0) {
			redirect('admin');
		}
		$this->template->admin('admin/page');
	}

	/*
	 * Fungsi untuk menambahkan halaman
	 */
	public function add_page() {
		if($this->session->userdata('event') != 0) {
			redirect('admin');
		}
		$this->template->admin('admin/page_add');
	}

	public function save_page() {
		if($this->session->userdata('event') != 0) {
			redirect('admin');
		}
		$data['title'] =  $this->input->post('title');
		if($data['title'] == '') {
			$date = new DateTime();
			$data['title'] = $date->format('Y-m-d H:i:s');
		}

		$data['url'] =  $this->input->post('url');
		if($data['url'] == '') {
			$date = new DateTime();
			$data['url'] = $date->format('Y-m-d H:i:s');
		}

		$data['publish'] =  $this->input->post('publish');
		$data['parent'] =  $this->input->post('parent');
		$data['content'] =  $this->input->post('content');

		$this->page_model->save_page($data);
		redirect('admin/page');
	}


	public function update_page() {
		if($this->session->userdata('event') != 0) {
			redirect('admin');
		}
		$id = $this->input->post('id_page');

		$data['title'] =  $this->input->post('title');
		if($data['title'] == '') {
			$date = new DateTime();
			$data['title'] = $date->format('Y-m-d H:i:s');
		}

		$data['url'] =  $this->input->post('url');
		if($data['url'] == '') {
			$date = new DateTime();
			$data['url'] = $date->format('Y-m-d H:i:s');
		}

		$data['publish'] =  $this->input->post('publish');
		$data['parent'] =  $this->input->post('parent');
		$data['content'] =  $this->input->post('content');

		$this->page_model->update_page($id,$data);
		redirect('admin/page');
	} 

	/*
	 * Fungsi untuk menyunting halaman
	 */
	public function edit_page() {
		if($this->session->userdata('event') != 0) {
			redirect('admin');
		}
		$this->template->admin('admin/page_edit');
	}

	/*
	 * Fungsi untuk menghapus halaman
	 */
	public function delete_page() {
		if($this->session->userdata('event') != 0) {
			redirect('admin');
		}
		$id = $this->uri->segment(3);
		$this->page_model->delete_page($id);

		redirect('admin/page');
	}
}


/* End of file competition.php */
/* Location: ./application/controllers/competition.php */