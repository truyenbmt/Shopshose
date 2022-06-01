<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_config extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	public function get_config()
	{
		$this->db->select("*");
		$this->db->from("wtv_config");
		$this->db->where('id',1);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function update($data)
	{
		$this->db->where('id', 1);
		$result = $this->db->update('wtv_config', $data);
		if($result){
			return true;
		} else {
			return false;
		}
	}

	public function get_support()
	{
		$this->db->select("*");
		$this->db->from("wtv_support");
		$this->db->where('id',1);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function update_support($data)
	{
		$this->db->where('id', 1);
		$result = $this->db->update('wtv_support', $data);
		if($result){
			return true;
		} else {
			return false;
		}
	}

}
