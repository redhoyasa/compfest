<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Kompetisi_model extends CI_Model {
	public $table = 'c_event';
	public $table_reg = 'c_register';
	public $table_team = 'c_team';
	public $primary_key = 'id_event';
	public $table_cac = 'c_cac';
	
	/*
	 * untuk menampilkan semua seminar
	 */
	public function getEvent() 
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}

	/*
	 * untuk menampilkan sesuai ID
	 */
	public function getEventById($id) 
	{
		$this->db->from($this->table);
		$this->db->where('id_event',$id);
		$query = $this->db->get();
		$result = $query->result();
		if(count($result) == 0) {
			return null;
		}
		return $result[0]; 
	}

	/*
	 * mengecek ketersediaan email
	 */
	public function userAvailable($email) {
		$this->db->from($this->table_team);
		$this->db->where('email', $email);
		$result = $this->db->count_all_results();
		if($result > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	/*
	 * mengecek ketersediaan nama tim
	 */
	public function teamAvailable($name) {
		$this->db->from($this->table_team);
		$this->db->where('team_name', $name);
		$result = $this->db->count_all_results();
		if($result > 0) {
			return false;
		} else {
			return true;
		}
	}

	/*
	 * Fungsi untuk menyimpan informasi tim
	 */
	public function saveTeam($data) 
	{
		$this->db->insert($this->table_team, $data);
	}

	/*
	 * Fungsi untuk menampilkan tim
	 */
	function get_team($id_team) {
		$this->db->where('id_team',$id_team);
		$this->db->limit(1);
		$query = $this->db->get($this->table_team);
		if($query->num_rows() > 0)  {
			$team = $query->result();
			return $team[0];
		} else {
			return false;
		}
	}
	
	function get_team_token($token) {
		$this->db->where('token',$token);
		$this->db->limit(1);
		$query = $this->db->get($this->table_team);
		if($query->num_rows() > 0)  {
			$team = $query->result();
			return $team[0];
		} else {
			return false;
		}
	}
	
	/*
	 * Fungsi untuk menampilkan tim token
	 */
	function active_token($token) {
		$this->db->where('token', $token);
		$data['active'] = 1;
		return $this->db->update($this->table_team, $data);
	}

		/*
	 * Fungsi untuk menampilkan tim
	 */
	function get_team_by_event($id_event) {
		$this->db->where('id_event',$id_event);
		$query = $this->db->get($this->table_team);
		return ($query->num_rows() > 0) ? $query->result() : false;		
	}
	
	//fungsi untuk menampilkan data cac berdasarkan tim
	function get_cac_data($id_team){
		$sql = "SELECT * FROM c_cac a, c_team b WHERE a.id_team = b.id_team AND b.id_team = ?";

		$query = $this->db->query($sql, array($id_team)); 
		return ($query->num_rows() > 0) ? $query->result() : false;
	}
}