<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_user extends CI_Controller {

	function __construct(){
		parent::__construct();
      	if (!$this->session->has_userdata('admin1985')){
      		redirect('wtvlog2018', 'refresh');
      	}
      	$this->load->model('adm_user');
		$this->load->model('my_model');
	}
	
	public function index()
	{	
		$data['user'] = $this->adm_user->get_user();
    	$data['template'] = 'admin/user/view';
    	$this->load->view('admin/index', $data);
	}

	public function them()
	{
		$data['template'] = 'admin/user/add';
    	$this->load->view('admin/index', $data);
    	
    	$name = $this->input->post("name");
    	$pass = $this->input->post("pass");
		$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			$check_user = $this->my_model->check_user($name);
			if(!$check_user){
				$data_user = array(
					'name' => $name,
					'pass' => md5($pass)
				);
				$result = $this->adm_user->them($data_user);
				if($result){
					$this->session->set_flashdata('mess', 'Thêm tài khoản thành công');
					redirect('ad_user', 'refresh');
				}
			} else {
				$this->session->set_flashdata('mess', 'Lỗi, tên tài khoản đã tồn tại');
				redirect('ad_user', 'refresh');
			}
		}
	}

	public function sua()
	{
		$data['id'] = $id = $this->uri->segment('3');
    	$data['user_admin'] = $user_admin = $this->adm_user->get_user_id($id);
		$data['template'] = 'admin/user/edit';
    	$this->load->view('admin/index', $data);
    	
    	if($this->input->post("name") != ""){
    		$name = $this->input->post("name");
    	} else {
    		$name = $user_admin['name'];
    	}
    	if($this->input->post("pass") != ""){
    		$pass = md5($this->input->post("pass"));
    	} else {
    		$pass = $user_admin['pass'];
    	}
		$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
			$data_user = array (
				'name' => $name,
				'pass' => $pass
			);
			$result = $this->adm_user->update_user($id, $data_user);
			if($result){
				$this->session->set_flashdata('mess', 'Sửa tài khoản thành công');
				redirect('ad_user/index', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Lỗi, sửa không thành công');
				redirect('ad_user/index', 'refresh');
			}
		}
	}

	public function xoa()
	{
		$id = $this->uri->segment(3);
		$this->load->model('adm_user');
		$result = $this->adm_user->xoa($id);
		if($result){
				$this->session->set_flashdata('mess', 'Xóa tài khoản thành công');
				redirect('ad_user', 'refresh');
			} else {
				$this->session->set_flashdata('mess', 'Lỗi, xóa không thành công');
				redirect('ad_user', 'refresh');
			}
	}

	
}
