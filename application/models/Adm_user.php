<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_user extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	public function get_user()
	{
		$this->db->select("*");
		$this->db->from("wtv_admin");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function get_user_id($id)
	{
		$this->db->select("*");
		$this->db->from("wtv_admin");
		$this->db->where('id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}
	}
	public function them($data_user)
	{
		$result = $this->db->insert('wtv_admin', $data_user);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function update_user($id, $data_user)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('wtv_admin', $data_user);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function xoa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wtv_admin');
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}

}
