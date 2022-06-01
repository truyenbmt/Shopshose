<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model {
	function __construct(){
		parent::__construct();	
	}

	public function get_table_all($table)
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

	public function get_table_limit($table,$limit,$start)
	{
		$this->db->select("*");
		$this->db->from($table);
		$this->db->limit($limit, $start);
		$this->db->order_by('id DESC');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_table_id($table,$id)
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

	public function get_linkseo($table,$linkseo)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('link_seo',$linkseo);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}		
	}

	public function add_data($table,$data)
	{
		$result = $this->db->insert($table,$data);
		if($result){
			return true;
		} else {
			return false;
		}
	}

	public function update_data($table,$id,$data)
	{
		$this->db->where('id', $id);
		$result = $this->db->update($table, $data);
		if($result){
			return true;
		} else {
			return false;
		}
	}

	public function row_table($table)
	{
		$this->db->select("*");
		$this->db->from($table);
		return $this->db->get()->num_rows();
	}

	public function del_row($table,$id)
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
}

