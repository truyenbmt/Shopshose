<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adm_slide extends CI_Model {
	function __construct(){
		parent::__construct();	
	}

	public function get_slide($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("wtv_slide");
		$this->db->where('cat_id',1);
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_banner($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("wtv_slide");
		$this->db->where('cat_id',2);
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function them($data_slide)
	{
		$result = $this->db->insert('wtv_slide', $data_slide);
		if($result){
			return true;
		} else {
			return false;
		}
	}

	public function xoa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wtv_slide');
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}

}

