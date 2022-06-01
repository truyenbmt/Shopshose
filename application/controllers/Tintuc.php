<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tintuc extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mhome');
		$this->load->model('general_model');	
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
		/* seo content */
		$data['type'] = 'website/article';
		$data['url'] = base_url().'tin-tuc/'.$id;
		/* get data */
		$data['tinchitiet'] = $this->general_model->get_table_id('wtv_news',$id);
			/* seo content */
			$data['seo_content'] = '';
			$data['title'] = $data['tinchitiet']['n_title'];
			$data['webtv_map'] = 'uploads/news/'.$data['tinchitiet']['n_avatar'];

		/* load view */
		$data['slide'] = $this->mhome->get_slide(1);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');
		$data['template'] = 'v_tinchitiet';
    	$this->load->view('index', isset($data) ? $data : NULL);

	}

	public function category()
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

		/* pagination */
		$this->load->library('pagination');
		$config['base_url'] = base_url()."danh-sach-tin/";
		$config['per_page'] = 12;
		$config['num_links'] = 2;
		$totalRows = $this->general_model->row_table('wtv_news');
		$config['total_rows'] = $totalRows;
		/* css pagination */
		$config['next_link'] = 'Trang sau';
		$config['prev_link'] = 'Trang trước';
		$config['num_tag_open'] = '<span style="padding:10px;">';
        $config['num_tag_close'] = '</span>';

    	$this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();

        $start = $this->uri->segment(2);
		$data['dstin'] = $this->general_model->get_table_limit('wtv_news',$config["per_page"], $start);

		/* seo content */
		$data['title'] = 'Tin tức';
		$data['type'] = 'website/article';
		$data['url'] = base_url().'danh-sach-tin';
		$data['seo_content'] = $data['seo_descript'];
		$data['webtv_map'] = base_url().'uploads/logo.png';
		/* load view */
		$data['slide'] = $this->mhome->get_slide(1);
		$data['cat_menu'] = $this->mhome->get_table('wtv_category');

		$data['template'] = 'v_tintuc';
    	$this->load->view('index', isset($data) ? $data : NULL);

	}
	
}
