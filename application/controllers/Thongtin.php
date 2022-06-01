<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thongtin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('adm_thongtin');	
       	$this->load->model('mhome');
	}

	public function index()
	{

		
		$config = $this->mhome->get_table('wtv_config');
		foreach ($config as $key) {
			$data['logo'] = $key['logo'];
			$data['favicon'] = 	$key['favicon'];
			$data['seo_descript'] = $key['seo_descript'];
			$data['phone'] = $key['phone'];
			$data['email'] = $key['email'];
			$data['address'] = $key['address'];
			$data['website'] = $key['website'];
			$data['copyright'] = $key['copyright'];
			$data['fanpage'] = $key['fanpage'];
		}

		/* get data */
		$linkseo = $data['linkseo'] = $this->uri->segment(2);
		$thongtin = $data['thongtin'] = $this->adm_thongtin->get_thongtin3($linkseo);
		/* seo content */
		$data['type'] = 'website/article';
		$data['url'] = $data['website'];
		$data['seo_content'] = $thongtin['seo_descript'];
		$data['title'] = $thongtin['tieude'];
		$data['webtv_map'] = base_url().'uploads/logo.png';
		
		/* load view */
		$data['slide'] = $this->mhome->get_slide(1);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');
		$data['template'] = 'v_thongtin';
    	$this->load->view('index', isset($data) ? $data : NULL);

	}
	
}
