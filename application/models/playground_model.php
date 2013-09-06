<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Playground_model extends CI_Model {
	public $table = 'playground';
	public $primary_key = 'id';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_all_page($level = -1) {
		if($level != -1) {
			$this->db->where('parent', $level);
		}
		$this->db->order_by('position', 'asc'); 
		$query = $this->db->get($this->table);
		return ($query->num_rows() > 0) ? $query->result() : false;
	}

	function get_page($id) {
		$this->db->where('id_page',$id); 
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			$list = $query->result();
			return $list[0];
		} else {
			return false;
		}
	}
	
	function get_page_url($url) {
		$this->db->where('url',$url); 
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			$list = $query->result();
			return $list[0];
		} else {
			return false;
		}
	}

	function save_page($data) {
		$this->db->insert($this->table, $data);
	}

	function update_page($id, $data) {
		$this->db->where('id_page', $id);
		$this->db->update($this->table, $data);
	}

	function delete_page($id) {
		$this->db->where('id_page', $id);
		$this->db->delete($this->table); 
	}
}