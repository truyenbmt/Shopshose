<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
      if (!$this->session->has_userdata('admin1985')){
      	redirect('wtvlog2018', 'refresh');
      }
	}
	
	public function index()
	{	
		$this->load->model('adm_config');
		$data['config'] = $this->adm_config->get_config();
		$data['template'] = 'admin/adv_home';
    	$this->load->view('admin/index', $data);
	}

	function logout()
    {
        $this->session->unset_userdata('admin');
        session_destroy();
        redirect('wtvlog2018', 'refresh');   
    }
}
