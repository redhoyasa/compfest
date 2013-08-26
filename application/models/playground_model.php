<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Playground_model extends CI_Model {
	public $peserta    = 'c_playground_peserta';
	public $playground = 'c_playground';
	public $game       = 'c_playground_game';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_user_by($id){
		$this->db->where('id',$id);
		$query = $this->db->get($this->peserta);
		return ($query->num_rows() > 0) ? $query->row() : false;
	}

	/**
	* Insert a new user according their ID's
	* $data = array (
	* 			'id'			=>  user's ID
	* 			'nama'  		=>  user's name
	*			'email'			=>  user's email
	*			'twitter' 		=>  user's twitter
	*			'tim'			=>  user's tim
	*			'point_used'	=>  0 (default)
	* 		  );
	*/
	function insert_user($data){
		return $this->db->insert($this->peserta, $data);
	}


	function point_decrease($id, $minus){
		$query = $this->db->query("UPDATE ".$this->peserta." SET point_used = point_used - ".$minus." WHERE id='".$id."'");
	}

	function point_increase($id, $plus){
		$this->db->query("UPDATE ".$this->peserta." SET point_used = point_used + ".$plus." WHERE id='".$id."'"); 
	}

}