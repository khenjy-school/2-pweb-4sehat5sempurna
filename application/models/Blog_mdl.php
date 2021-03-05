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

		return $this->db->update(_table, $data);
	}

	//Berfungsi untuk menghapus data pada tabel blog
	public function delete()
	{
		$this->db->where($id);
		return $this->db->delete($this->_table, array("id_blog" => $id));
	}

	public function _uploadImage()
	{
		$config['upload_path']		= './upload//';
		$config['allowed types']	= 'gif|jpg|png';
		$config['file_name']            = $this->id_blog;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
	}
}