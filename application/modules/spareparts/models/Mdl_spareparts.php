<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mdl_spareparts extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
    $table = "m_cold_chain_equip";
    return $table;
}

function getequip(){
		$this->db->select('id, name');
		$query = $this->db->get("m_equipment_options");
		return $query->result();
    }
    function getequiptype(){
		$this->db->select('id, name');
		$query = $this->db->get("m_equipment_type");
		return $query->result();
    }



function get($order_by){
$table = $this->get_table();
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$table = $this->get_table();
$this->db->limit($limit, $offset);
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}

function get_where($id){
$table = $this->get_table();
$this->db->where('id', $id);
$query=$this->db->get($table);
return $query;
}

function get_where_custom($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$query=$this->db->get($table);
return $query;
}

function _insert($data){
$table = $this->get_table();
$this->db->insert($table, $data);
}

function _update($id, $data){
// $table = $this->get_table();
// $this->db->where('id', $id);
// $this->db->update($table, $data);
	$nqnty=$data['quantity'];
// array('quantity'=>$id)
	// var_dump($nqnty);
	// die();
$this->db->query("call proc_update_inventory($id, $nqnty)");
}

function _delete($id){
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->delete($table);
}

function count_where($column, $value) {
$table = $this->get_table();
$this->db->where($column, $value);
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}

function count_all() {
$table = $this->get_table();
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}

function get_max() {
$table = $this->get_table();
$this->db->select_max('id');
$query = $this->db->get($table);
$row=$query->row();
$id=$row->id;
return $id;
}

function _custom_query($mysql_query) {
$query = $this->db->query($mysql_query);
return $query;
}

}