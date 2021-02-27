<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Komentar_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		$this->db->where('id_komentar', $id);
		return $this->db->get('komentar')->row();
	}

	public function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function update()
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete()
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}