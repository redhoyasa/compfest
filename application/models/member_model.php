<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Member_model extends CI_Model {
	public $table = 'c_register';
	public $table_team = 'c_team';
	public $primary_key = 'id_register';
	
	function __construct() {
		parent::__construct();
	}
	
	/*
	 * Fungsi untuk menampilkan semua member sebuah tim
	 */
	function get_all_member($id) {
		$this->db->where('id_team',$id);
		$this->db->order_by('register_role', 'asc'); 
		$query = $this->db->get($this->table);
		return ($query->num_rows() > 0) ? $query->result() : false;
	}


	
	/*
	 * Fungsi untuk menampilkan member sesuai tim dan perannya
	 */
	function get_member($id_team, $role) {
		$this->db->where('id_team',$id_team);
		$this->db->where('register_role', $role);
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		return ($query->num_rows() > 0) ? $query->row() : false;		
	}

	/*
	 * Fungsi untuk menambahkan member tim
	 */
	public function save_member($data) {
		$this->db->insert($this->table, $data);
	}

	/*
	 * Fungsi untuk mengubah member
	 */
	public function edit_member($id, $role, $data) {
		$this->db->where('register_role', $role);
		$this->db->where('id_team', $id);
		$this->db->update($this->table, $data); 
	}

	/*
	 * Fungsi untuk menghapus member
	 */
	public function empty_member($id_team) {
		$this->db->where('id_team',$id_team);
		$this->db->delete($this->table);
	}

	/*
	 * Fungsi untuk mengubah tim
	 */
	public function edit_team($id_team, $data) {
		$this->db->where('id_team', $id_team);
		$this->db->update($this->table_team, $data); 
		return true;
	}
	

	/*
	 * Fungsi untuk menghapus tim
	 */
	public function delete_team($id_team) {
		$this->db->where('id_team', $id_team);
		$this->db->delete($this->table_team); 
	}
}