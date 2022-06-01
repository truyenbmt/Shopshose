<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mproduct');	
       	$this->load->model('mhome');
	}

	public function index()
	{	

		$id = $this->uri->segment(2);
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
		$data['product'] = $this->mproduct->get_pro($id);
		/* seo content */
		$data['type'] = 'website/article';
		$data['seo_content'] = $data['seo_descript'];
		$data['title'] = $data['product']['name'];
		$data['webtv_map'] = 'uploads/product/'.$data['product']['img'];
		$data['url'] = base_url().'product/'.$id;
		
		/* load view */
		$data['slide'] = $this->mhome->get_slide(1);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');
		$data['khuyenmai'] = $this->mhome->get_id('wtv_thongtin',8);
		$data['template'] = 'v_product';
    	$this->load->view('index', isset($data) ? $data : NULL);

	}

	
	public function category()
	{	

		$cat_id = $this->uri->segment(2);
		$data['cat_id'] = $this->mproduct->get_catid($cat_id);
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
		/* pagination */
		$this->load->library('pagination');
		$config['base_url'] = base_url()."category/".$cat_id.'/';
		$config['per_page'] = 12;
		$config['num_links'] = 2;
		$totalRows = $this->mproduct->row_pro($cat_id);
		$config['total_rows'] = $totalRows;
		/* css pagination */
		$config['next_link'] = 'Trang sau';
		$config['prev_link'] = 'Trang trước';
		$config['num_tag_open'] = '<span style="padding:10px;">';
        $config['num_tag_close'] = '</span>';

    	$this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
        $start = $this->uri->segment(3);
		$data['pro_cat'] = $this->mproduct->get_category($cat_id, $config["per_page"], $start);

		/* seo content */
		$data['type'] = 'website/article';
		$data['seo_content'] = $data['seo_descript'];
		$data['title'] = $data['cat_id']['cat_name'];
		$data['webtv_map'] = base_url().'uploads/logo.png';
		$data['url'] = base_url().'category/'.$cat_id;

		/* load view */
		$data['slide'] = $this->mhome->get_slide(1);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');
		$data['template'] = 'v_category';
    	$this->load->view('index', isset($data) ? $data : NULL);

	}
	
}
