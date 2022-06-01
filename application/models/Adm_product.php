<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_product extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	public function get_product($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("wtv_products");
		$this->db->order_by('id desc');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function get_product2($id)
	{
		$this->db->select("*");
		$this->db->from("wtv_products");
		$this->db->where('id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	public function update_product($id, $data_product)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('wtv_products', $data_product);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function them($data_product)
	{
		$result = $this->db->insert('wtv_products', $data_product);
		if($result){
			return true;
		} else {
			return false;
		}
	}
	public function xoa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wtv_products');
		$flag = $this->db->affected_rows();
        if ($flag > 0) {
            return true;
        } else {
            return false;
        }
	}
	public function row(){
		$this->db->select("*");
		$this->db->from("wtv_products");
		return $this->db->get()->num_rows();
	}

}
