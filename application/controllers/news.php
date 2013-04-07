<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->template->display('front-end/news/news_all');
	}

	public function getNews($url){
		$data['url'] = $url;
		$this->template->display('front-end/news/news',$data);
	}

}

