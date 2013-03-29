<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Seminar_model extends CI_Model {
	public $table = 'c_seminar';
	public $table_user = 'c_seminar_user';
	public $table_reg = 'c_seminar_reg';
	public $primary_key = 'id_seminar';
	
	/*
	 * untuk menampilkan semua seminar
	 */
	public function getSeminar() 
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}

	/*
	 * untuk menampilkan sesuai ID
	 */
	public function getSeminarById($id) 
	{
		$this->db->from($this->table);
		$this->db->where('id_seminar',$id);
		$query = $this->db->get();
		$result = $query->result();
		if(count($result) == 0) {
			return null;
		}
		return $result[0]; 
	}

	/*
	 * untuk menyimpan peserta seminar
	 */
	public function saveRegister($data) 
	{
		$this->db->insert($this->table_user, $data);
	}

	/*
	 * untuk menampilkan daftar seminar yang diikuti peserta
	 */
	public function saveSeminarRegister($data) 
	{
		$this->db->insert($this->table_reg, $data);
	}

	/*
	 * untuk mencari peserta dengan email
	 */
	public function getUserByEmail($email) {
		$this->db->from($this->table_user);
		$this->db->where('email',$email);
		$query = $this->db->get();
		$user = $query->result();
		return $user[0]; 
	}

	/*
	 * untuk mencari peserta berdasar id
	 */
	public function getUserById($id) {
		$this->db->from($this->table_user);
		$this->db->where('id_seminar_user',$id);
		$query = $this->db->get();
		$user = $query->result();
		if(count($user) == 0) {
			return null;
		}
		return $user[0]; 
	}

	/*
	 * mengecek ketersediaan email
	 */
	public function userAvailable($email) {
		$this->db->from($this->table_user);
		$this->db->where('email', $email);
		$result = $this->db->count_all_results();
		if($result > 0) {
			return false;
		} else {
			return true;
		}
	}

	/*
	 * untuk mencari seminar yang diikuti peserta
	 */
	public function getSeminarUserById($id) {
		$this->db->from($this->table_reg);
		$this->db->where('id_seminar_user',$id);
		$query = $this->db->get();
		$result = $query->result();
		if(count($result) == 0) {
			return null;
		}
		return $result; 
	}

	/*
	 * update status
	 */
	public function UpdateStatusUserById($id, $status) {
		$data = array(
               'status' => $status
            );

		$this->db->where('id_seminar_user', $id);
		$this->db->update($this->table_user, $data); 
	}

	/*
	 * delete user
	 */
	public function DeleteUserById($id) {
		$this->db->where('id_seminar_user', $id);
		$this->db->delete($this->table_user); 
	}

	/*
	 * delete seminar user
	 */
	public function DeleteSeminarUserById($id) {
		$this->db->where('id_seminar_user', $id);
		$this->db->delete($this->table_reg); 
	}

	/*
	 * delete seminar user
	 */
	public function get_seminar_register($kategori = null) {
		if($kategori == null) {
			return $this->db->query("SELECT * FROM c_seminar_user WHERE status <> 0")->result();
		} else {
			return $this->db->query("SELECT * FROM c_seminar_user as u, c_seminar_reg as r WHERE r.id_seminar = $kategori and r.id_seminar_user = u.id_seminar_user and status <> 0")->result();
		}
	}


	

}