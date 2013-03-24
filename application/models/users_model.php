<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Users_model extends CI_Model {
	public $table = 'c_team';
	public $primary_key = 'id_team';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_login_info($email) {
		$this->db->where('email',$email);
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		return ($query->num_rows() > 0) ? $query->row() : false;
	}

	function get_admin_info($email) {
		$this->db->where('email',$email);
		$this->db->limit(1);
		$query = $this->db->get('c_admin');
		return ($query->num_rows() > 0) ? $query->row() : false;
	}

	function update($id_team, $password) {
		$data = array(
               'password' => md5($password)
            );

		$this->db->where('id_team', $id_team);
		$this->db->update($this->table, $data); 
	}
}