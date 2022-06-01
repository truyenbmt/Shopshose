<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_news extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('admin1985')){
	      	redirect('wtvlog2018', 'refresh');
	    }
	    $this->load->model('adm_category');
		$this->load->model('adm_news');
	}
	public function index()
	{	
		/* pagination */
		$this->load->library('pagination');
		$config['base_url'] = base_url()."admin/news/page/";
		$config['per_page'] = 10;
		$config['num_links'] = 2;
		$totalRows = $this->adm_news->row();
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
        $data['news'] = $this->adm_news->get_news($config["per_page"], $start);        

        $data['template'] = 'admin/news/view';
    	$this->load->view('admin/index', $data);
	
	}
	
	public function them()
	{
		$data['template'] = 'admin/news/add';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			/* upload file */
			$config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['max_width']            = 2180;
            $config['max_height']           = 1080;
            $this->load->library("upload", $config);
            $this->upload->do_upload('n_avatar');
            $data_image = $this->upload->data();
            $n_avatar = $data_image['file_name'];
            /* end upload */
			$data_tintuc = array(
				'n_avatar' => $n_avatar,
				'n_title' => $this->input->post('n_title'),
				'n_content' => $this->input->post('n_content'),
				'n_date' => $this->input->post('n_date')
			);
			
			$result = $this->adm_news->them($data_tintuc);
			if($result){
				$this->session->set_flashdata('mess', 'Thêm bài mới thành công');
				redirect('ad_news', 'refresh');
			}
		}

	}

	public function sua()
	{
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		$tintuc = $data['tintuc'] = $this->adm_news->get_tintuc2($id);

		$data['template'] = 'admin/news/sua';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");

		if (isset($is_submit)){
			/* upload file */
			$config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['max_width']            = 2180;
            $config['max_height']           = 1080;
            $this->load->library("upload", $config);
            foreach ($tintuc as $key => $value) {
            	if ($this->upload->do_upload('n_avatar')){
            		$data_image = $this->upload->data();
            		$n_avatar = $data_image['file_name'];
            	} else {
            		$n_avatar = $value['n_avatar'];
            	}
            }

			$data_tintuc = array(
				'n_avatar' => $n_avatar,
				'n_title' => $this->input->post('n_title'),
				'n_content' => $this->input->post('n_content'),
				'n_date' => $this->input->post('n_date')
			);
			
			$result = $this->adm_news->update_tintuc($id, $data_tintuc);
			if($result){
				$this->session->set_flashdata('mess', 'Sửa bài viết thành công');
				redirect('ad_news', 'refresh');
			}
		}

	}

	public function xoa()
	{
		$id = $this->uri->segment(3);
		$result = $this->adm_news->xoa($id);
		if($result){
				$this->session->set_flashdata('mess', 'Xóa tin thành công');
				redirect('ad_news/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Xóa không thành công');
				redirect('ad_news/index', 'refresh');
			}
	}
}
