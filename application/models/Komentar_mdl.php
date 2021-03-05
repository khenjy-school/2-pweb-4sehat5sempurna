<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Komentar_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getAll()
	{
		return $this->db->get($this->table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id_komentar)
	{
		$this->db->where('id_komentar', $id_komentar);
		return $this->db->get('komentar')->row();
	}

	//Berfungsi untuk menyimpan data pada tabel komentar
	public function save($table, $data)
	{
		$this->db->insert($table, $data);
	}

	//Berfungsi untuk melakukan update data pada tabel komentar
	public function update()
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//Berfungsi untuk menghapus data pada tabel komentar
	public function delete()
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}