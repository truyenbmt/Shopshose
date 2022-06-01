<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mproduct');	
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
		/* seo content */
		$data['title'] = $data['copyright'];
		$data['type'] = 'website/article';
		$data['url'] = $data['website'];
		$data['seo_content'] = $data['seo_descript'];
		$data['webtv_map'] = base_url().'uploads/logo.png';
		/* load view */	
		$data['slide'] = $this->mhome->get_slide(1);
		$data['banner'] = $this->mhome->get_slide(2);
		$data['pro_home'] = $this->mhome->get_table_limit('wtv_products',12);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');
		$data['khuyenmai'] = $this->mhome->get_id('wtv_thongtin',8);
		$data['tinmoi'] = $this->mhome->get_table_limit('wtv_news',4);

		$data['template'] = 'v_home';
    	$this->load->view('index', $data);

	}

	public function lienhe()
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
			$data['gmaps'] = $key['gmaps'];
		}
		/* seo content */
		$data['title'] = $data['copyright'];
		$data['type'] = 'website/article';
		$data['url'] = $data['website'];
		$data['seo_content'] = $data['seo_descript'];
		$data['webtv_map'] = base_url().'uploads/logo.png';
		/* load view */
		$data['slide'] = $this->mhome->get_slide(1);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');
		
		$data['template'] = 'v_contact';
    	$this->load->view('index', $data);

	}
}
