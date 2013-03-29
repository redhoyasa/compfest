<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class News_model extends CI_Model {
	public $table = 'c_news';
	public $primary_key = 'id_news';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_all_news() {
		$this->db->order_by('timestamp', 'asc'); 
		$query = $this->db->get($this->table);
		return ($query->num_rows() > 0) ? $query->result() : false;
	}

	function get_news($id) {
		$this->db->where('id_news',$id); 
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			$list = $query->result();
			return $list[0];
		} else {
			return false;
		}
	}
	
	function get_news_url($url) {
		$this->db->where('url',$url); 
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			$list = $query->result();
			return $list[0];
		} else {
			return false;
		}
	}

	function save_news($data) {
		$this->db->insert($this->table, $data);
	}

	function update_news($id, $data) {
		$this->db->where('id_news', $id);
		$this->db->update($this->table, $data);
	}

	function delete_news($id) {
		$this->db->where('id_news', $id);
		$this->db->delete($this->table); 
	}
}