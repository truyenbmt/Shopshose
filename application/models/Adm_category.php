<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_category extends CI_Model {
	function __construct(){
		parent::__construct();	
	}

	public function get_category($limit, $start)
	{
		$this->db->select("*");
		$this->db->from('wtv_category');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_category2()
	{
		$this->db->select("*");
		$this->db->from('wtv_category');
		$this->db->order_by('cat_name asc');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_id($cat_id)
	{
		$this->db->select('*');
		$this->db->from('wtv_category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}		
	}

	public function get_id2($table,$id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}		
	}

	public function add_category($data_category)
	{
		$result = $this->db->insert('wtv_category', $data_category);
		if($result){
			return true;
		} else {
			return false;
		}
	}

	public function update_category($id,$data_category)
	{
		$this->db->where('cat_id', $id);
		$result = $this->db->update('wtv_category', $data_category);
		if($result){
			return true;
		} else {
			return false;
		}
	}

	public function xoa($id)
	{
		$this->db->where('cat_id', $id);
		$this->db->delete('wtv_category');
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function row()
	{
		$this->db->select("*");
		$this->db->from('wtv_category');
		return $this->db->get()->num_rows();
	}

}