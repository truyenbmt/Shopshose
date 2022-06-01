<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	public function check_user($user)
	{
		$this->db->where('name', $user);
		$query=$this->db->get("wtv_admin");
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
	}
	public function get_user($user)
	{
		$this->db->where('name', $user);
		$query = $this->db->get("wtv_admin");
		$result = $query->result_array();
        return $result;
	}
	public function xoa_id($table,$id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}
	public function get_table($table)
	{
		$this->db->select("*");
		$this->db->from($table);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

}
