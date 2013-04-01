<?php if(!defined('BASEPATH')) exit('No Direct script access allowed');

class Template {
	protected $_ci;
	
	function __construct() {
		$this->_ci = &get_instance();
	}
	
	function display($template, $data=null) {
		$data['content'] = $this->_ci->load->view($template, $data, true);
		//$data['menu'] = $this->_ci->load->view('menu', $data, true);
		//$data['footer'] = $this->_ci->load->view('footer', $data, true);
		$this->_ci->load->view('front-end/template',$data);
	}

	function admin($template, $data=null) {
		$data['content'] = $this->_ci->load->view($template, $data, true);
		//$data['menu'] = $this->_ci->load->view('menu', $data, true);
		//$data['footer'] = $this->_ci->load->view('footer', $data, true);
		$this->_ci->load->view('admin/template',$data);
	}

}
?>