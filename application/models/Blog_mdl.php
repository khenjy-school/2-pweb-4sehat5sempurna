<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Blog_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->_table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_editor" => $id])->row();
	}

	//Berfungsi untuk menyimpan data pada tabel blog
	public function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

	//Berfungsi untuk melakukan update data pada tabel blog
	public function update()
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//Berfungsi untuk menghapus data pada tabel blog
	public function delete()
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}