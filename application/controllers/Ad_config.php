<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ad_config extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('admin1985')){
	      	redirect('wtvlog2018', 'refresh');
	    }
		$this->load->model('adm_config');
	}
	public function index()
	{
        /* load view */
        $data['config'] = $this->adm_config->get_config();
    	$data['template'] = 'admin/config/view';
    	$this->load->view('admin/index', $data);
	}
	public function sua()
	{
		$data['config'] = $this->adm_config->get_config();
    	$data['template'] = 'admin/config/sua';
    	$this->load->view('admin/index', $data);
	}
	public function update()
	{
		$config = $this->adm_config->get_config();
		foreach ($config as $key) {
			$logo = $key['logo'];
			$favicon = $key['favicon'];
		}
		$check = $this->input->post('submit');
		if (isset($check)){
			/* upload file */
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024;
            $config['max_width']            = 1400;
            $config['max_height']           = 768;
            $this->load->library("upload", $config);

			if($this->upload->do_upload('logo')){
				$data_image = $this->upload->data();
            	$logo = $data_image['file_name'];
			} 
			if($this->upload->do_upload('favicon')){
				$data_image = $this->upload->data();
            	$favicon = $data_image['file_name'];
			}

			$data = array(
				'logo' => $logo,
				'favicon' => $favicon,
				'seo_descript' => $this->input->post('seo_descript'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'website' => $this->input->post('website'),
				'copyright' => $this->input->post('copyright'),
				'fanpage' => $this->input->post('fanpage'),
				'gmaps' => $this->input->post('gmaps')
			);

			$result = $this->adm_config->update($data);
			if($result){
				$this->session->set_flashdata('mess', 'Sửa thông tin thành công');
				redirect('ad_config/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Sửa không thành công');
				redirect('ad_config/sua', 'refresh');
			}
		}
	}
}

