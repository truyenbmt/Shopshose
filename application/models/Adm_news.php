<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_news extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	public function get_news($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("wtv_news");
		$this->db->order_by('id desc');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function them($data_tintuc)
	{
		$result = $this->db->insert('wtv_news', $data_tintuc);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function update_tintuc($id, $data_tintuc)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('wtv_news', $data_tintuc);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function xoa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wtv_news');
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}
	public function row(){
		$this->db->select("*");
		$this->db->from("wtv_news");
		return $this->db->get()->num_rows();
	}
	public function get_tintuc2($id)
	{
		$this->db->select("*");
		$this->db->from("wtv_news");
		$this->db->where('id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

}
