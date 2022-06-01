<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ad_banner extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('admin1985')){
	      	redirect('wtvlog2018', 'refresh');
	    }
	    $this->load->model('adm_slide');
	}

	public function index()
	{	
        $data['slide'] = $this->adm_slide->get_banner(12,0);
    	$data['template'] = 'admin/banner/view';
    	$this->load->view('admin/index', $data);
	}

	public function them()
	{
		$data['template'] = 'admin/banner/add';
    	$this->load->view('admin/index', $data);

		$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			/* upload image */
			$config['upload_path']          = './uploads/slide/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2024;
            $config['max_width']            = 1920;
            $config['max_height']           = 1920;

            $this->load->library("upload", $config);
            $this->upload->do_upload("image");
            $data_image = $this->upload->data();
            /* end upload image */
            $img_name = $data_image['file_name'];  
 
			$data_slide = array(
				'image' => $img_name,
				'cat_id' => 2
			);
			
			$result = $this->adm_slide->them($data_slide);
			if($result){
				$this->session->set_flashdata('mess','Thêm banner thành công');
				redirect('ad_banner', 'refresh');
			}
		}
	}

	public function xoa()
	{
		$id = $this->uri->segment(3);
		$this->load->model('adm_slide');
		$result = $this->adm_slide->xoa($id);
		if($result){
				$this->session->set_flashdata('mess','Xóa banner thành công');
				redirect('ad_banner/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess','Xóa không thành công');
				redirect('ad_banner/index', 'refresh');
			}
	}

}

