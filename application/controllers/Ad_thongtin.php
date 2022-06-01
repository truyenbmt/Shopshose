<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_thongtin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('admin1985')){
	      	redirect('wtvlog2018', 'refresh');
	    }
	    $this->load->model('adm_thongtin');
	}
	public function index()
	{	
		/* pagination */
		$this->load->library('pagination');
		$config['base_url'] = base_url()."ad_thongtin/page/";
		$config['per_page'] = 8;
		$config['num_links'] = 2;
		$totalRows = $this->adm_thongtin->row();
		$config['total_rows'] = $totalRows;
		/* css pagination */
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['num_tag_open'] = '<span style="padding:10px;">';
        $config['num_tag_close'] = '</span>';

    	$this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();

        /* load view */
        $start = $this->uri->segment(3);
        $data['thongtin'] = $this->adm_thongtin->get_thongtin($config["per_page"], $start);
    	$data['template'] = 'admin/thongtin/view';
    	$this->load->view('admin/index', $data);
	
	}

	public function sua()
	{
		$id = $this->uri->segment(3);
		$data['id'] = $id;
		$thongtin = $data['thongtin'] = $this->adm_thongtin->get_thongtin2($id);

		$data['template'] = 'admin/thongtin/sua';
    	$this->load->view('admin/index', $data);

    	$is_submit = $this->input->post("submit");
		if (isset($is_submit)){
            foreach ($thongtin as $key => $value) {
            	if ($this->input->post('tieude') != ''){
            		$tieude = $this->input->post('tieude');
            	} else {
            		$tieude = $value['tieude'];
            	}
            	if ($this->input->post('noidung') != ''){
            		$noidung = $this->input->post('noidung');
            	} else {
            		$noidung = $value['noidung'];
            	}
            	if ($this->input->post('linkseo') != ''){
            		$linkseo = $this->input->post('linkseo');
            	} else {
            		$linkseo = $value['linkseo'];
            	}
            	if ($this->input->post('seo_descript') != ''){
            		$seo_descript = $this->input->post('seo_descript');
            	} else {
            		$seo_descript = $value['seo_descript'];
            	}
            	if ($this->input->post('t_date') != ''){
            		$t_date = $this->input->post('t_date');
            	} else {
            		$t_date = $value['t_date'];
            	}
            }

			$data_thongtin = array(
				'tieude' => $tieude,
				'noidung' => $noidung,
				'seo_descript' => $seo_descript,
				'linkseo' => $linkseo,
				't_date' => $t_date
			);
			
			$result = $this->adm_thongtin->update_thongtin($id, $data_thongtin);
			if($result){
				$this->session->set_flashdata('mess', 'Sửa thông tin thành công');
				redirect('ad_thongtin/index', 'refresh');
			}
		}

	}

}
