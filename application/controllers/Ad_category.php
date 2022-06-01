<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_category extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('admin1985')){
	      	redirect('wtvlog2018', 'refresh');
	    }
		$this->load->model('adm_category');
	}
	public function index()
	{	
		/* pagination */
		$this->load->library('pagination');
		$config['base_url'] = base_url()."admin/category/page/";
		$config['per_page'] = 12;
		$config['num_links'] = 2;
		$totalRows = $this->adm_category->row();
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
        $start = $this->uri->segment(4);
        $data['category'] = $this->adm_category->get_category($config["per_page"], $start);
    	$data['template'] = 'admin/category/view';
    	$this->load->view('admin/index', $data);
	
	}
	public function them()
	{
		$data['category'] = $this->adm_category->get_category2();
		$data['template'] = 'admin/category/add';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			$data_category = array(
				'cat_name' => $this->input->post("cat_name"),
				'parent_id' => '0'
			);
			$result = $this->adm_category->add_category($data_category);
			if($result){
				$this->session->set_flashdata('mess', 'Thêm danh mục thành công');
				redirect('ad_category', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Lỗi, thêm không thành công');
				redirect('ad_category/index', 'refresh');
			}
		}
	}
	public function sua()
	{
		$id = $this->uri->segment('3');
		$data['id'] = $id;

		$category = $data['category'] = $this->adm_category->get_id($id);
		$data['template'] = 'admin/category/edit';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");
		if (isset($is_submit)){           	
           	$data_category = array(
				'cat_name' => $this->input->post("cat_name")
			);
			
           	$result = $this->adm_category->update_category($id, $data_category);
			if($result){
				$this->session->set_flashdata('mess', 'Sửa danh mục thành công');
				redirect('ad_category', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Lỗi, sửa không thành công');
				redirect('ad_category/sua', 'refresh');
			}
		}

	}
	public function xoa()
	{
		$id = $this->uri->segment(3);
		$result = $this->adm_category->xoa($id);
		if($result){
				$this->session->set_flashdata('mess', 'Xóa danh mục thành công');
				redirect('ad_category/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Lỗi, xóa không thành công');
				redirect('ad_category/index', 'refresh');
			}
	}
}
