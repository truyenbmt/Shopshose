<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhome extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	public function get_config()
	{
		$this->db->select("*");
		$this->db->from("wtv_config");
		//$this->db->where('id',1);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function get_slide($cat_id)
	{
		$this->db->select('*');
		$this->db->from('wtv_slide');
		$this->db->where('cat_id',$cat_id);
		$this->db->order_by('id ASC');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		} else {
			return false;
		}
	}
	public function get_table($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		} else {
			return false;
		}
	}
	public function get_id($table,$id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		} else {
			return false;
		}
	}
	public function get_table_limit($table,$limit)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->limit($limit,0);
		$this->db->order_by('id desc');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		} else {
			return false;
		}	
	}

}
