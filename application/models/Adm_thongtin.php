<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_thongtin extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	public function get_thongtin($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("wtv_thongtin");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function them($data_thongtin)
	{
		$result = $this->db->insert('wtv_thongtin', $data_thongtin);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function update_thongtin($id, $data_thongtin)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('wtv_thongtin', $data_thongtin);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function xoa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wtv_thongtin');
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}
	public function row(){
		$this->db->select("*");
		$this->db->from("wtv_thongtin");
		return $this->db->get()->num_rows();
	}
	public function get_thongtin2($id)
	{
		$this->db->select("*");
		$this->db->from("wtv_thongtin");
		$this->db->where('id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	/* for view */
	public function get_thongtin3($linkseo)
	{
		$this->db->select("*");
		$this->db->from("wtv_thongtin");
		$this->db->where('linkseo', $linkseo);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}
	}

}
