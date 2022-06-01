<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduct extends CI_Model {
	function __construct(){
		parent::__construct();	
	}

	public function get_pro($id)
	{
		$this->db->select("*");
		$this->db->from("wtv_products");
		$this->db->where("id",$id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}
	}


	public function get_category($cat_id, $limit, $start)
	{
		$this->db->select("*");
		$this->db->from("wtv_products");
		$this->db->where("cat_id",$cat_id);
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_catid($cat_id)
	{
		$this->db->select("*");
		$this->db->from("wtv_category");
		$this->db->where("cat_id",$cat_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row_array();
		}else{
			return false;
		}
	}

	public function row_pro($cat_id)
	{
		$this->db->select("*");
		$this->db->from("wtv_products");
		$this->db->where("cat_id",$cat_id);
		return $this->db->get()->num_rows();
	}

}

?>