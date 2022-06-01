<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_product extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('admin1985')){
	      	redirect('wtvlog2018', 'refresh');
	    }
		$this->load->model('adm_product');
		$this->load->model('adm_category');
	}

	public function index()
	{	
		/* pagination */
		$this->load->library('pagination');
		$config['base_url'] = base_url()."admin/product/page/";
		$config['per_page'] = 10;
		$config['num_links'] = 2;
		$totalRows = $this->adm_product->row();
		$config['total_rows'] = $totalRows;
		/* css pagination */
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = 'Trang tiếp';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Trang trước';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_link'] = 'Trang đầu';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Trang cuối';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';


    	$this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();

        /* load view */
        $start = $data['start'] = $this->uri->segment(4);
        $data['product'] = $this->adm_product->get_product($config["per_page"], $start);
    	$data['template'] = 'admin/product/view';
    	$this->load->view('admin/index', $data);
	}

	public function them()
	{
		$data['danhmuc'] = $this->adm_category->get_category2();
		$data['template'] = 'admin/product/add';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			/* upload file */
			$config['upload_path']          = './uploads/product/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2024;
            $config['max_width']            = 1000;
            $config['max_height']           = 700;

            $this->load->library("upload", $config);
            $this->upload->do_upload('img');
            $data_image = $this->upload->data();
            $img = $data_image['file_name'];
            /* end upload */

			$data_product = array(
				'cat_id' => $this->input->post('cat_id'),
				'img' => $img,
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'description' => $this->input->post('description'),
				'tinhtrang' => $this->input->post('tinhtrang')
			);

			$result = $this->adm_product->them($data_product);
			if($result){
				$this->session->set_flashdata('mess', 'Thêm sản phẩm thành công');
				redirect('ad_product/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Thêm không thành công');
				redirect('ad_product/them', 'refresh');
			}
		}
	}

	public function sua()
	{
		$id = $this->uri->segment('3');
		$data['id'] = $id;
		$product = $data['product'] = $this->adm_product->get_product2($id);
		$data['danhmuc'] = $this->adm_category->get_category2();
		$data['template'] = 'admin/product/sua';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			/* upload file */
			$config['upload_path']          = './uploads/product/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
           	$config['max_size']             = 2024;
            $config['max_width']            = 1000;
            $config['max_height']           = 700;

            $this->load->library("upload", $config);

            foreach ($product as $key => $value) {
            	if($this->upload->do_upload('img')){
            		$data_image = $this->upload->data();
            		$img = $data_image['file_name'];
            	} else {
            		$img = $value['img'];
            	}
            }

           	$data_product = array(
				'cat_id' => $this->input->post('cat_id'),
				'img' => $img,
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'description' => $this->input->post('description'),
				'tinhtrang' => $this->input->post('tinhtrang')
			);

           	$result = $this->adm_product->update_product($id, $data_product);
			if($result){
				$this->session->set_flashdata('mess', 'Sửa sản phẩm thành công');
				redirect('ad_product/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Sửa không thành công');
				redirect('ad_product/sua', 'refresh');
			}
		}
	}

	public function xoa()
	{
		$id = $this->uri->segment(3);
		$result = $this->adm_product->xoa($id);
		if($result){
				$this->session->set_flashdata('mess', 'Xóa sản phẩm thành công');
				redirect('ad_product/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Xóa không thành công');
				redirect('ad_product/index', 'refresh');
			}
	}

}

