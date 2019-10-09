<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportdata_Model extends CI_Model {

	public function getTableData()
	{
	$this->db->select('*');
	$this->db->from('tbltest');
	$this->db->order_by('recordid','asc');
	$this->db->limit(500); // Please change limit value accordingly
	$qresult = $this->db->get();
	$result = $qresult->result();
	return $result;

	}
}

?> 