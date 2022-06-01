<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wtvlog2018 extends CI_Controller {

	function __construct(){
		parent::__construct();
       $this->load->model('my_model');
	}
	public function index()
	{	
        $data['meta_title'] = 'Login - Toanviet';
        $this->load->view('admin/login', isset($data) ? $data : NULL);

        $login = $this->input->post('login');
        if (isset($login)) {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $check_user = $this->my_model->check_user($user);
            if($check_user){
                $get_user = $this->my_model->get_user($user);
                foreach ($get_user as $key) {
                    $password = $key['pass'];
                }
                if($password == md5($pass)){
                    $data = array(
                            'u_name' => $user,
                            'u_pass' => $pass 
                        );
                $this->session->set_userdata('admin1985', $data);
                redirect('admin/index', 'refresh');
                }
            }
        }
	}
	
}
