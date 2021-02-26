<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Blog_mdl extends CI_Model
{
	
	public function insert_blog($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function edit_blog()
	{
		return $this->db->get_where($table, $where);
	}

	public function update_blog()
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function detele_blog()
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}