<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Blog_mdl extends CI_Model
{
	private $_table = 'blog';

	public $id_blog;
    public $judul_blog;
    public $nama_editor;
    public $isi_blog;

	//Berfungsi untuk mengambil data hasil query
	public function getAll($_table)
	{
		return $this->db->get($_table);
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id_blog)
	{
		return $this->db->get_where($this->_table, ["id_blog" => $id_blog])->row();
		redirect('blog/update', 'refresh');
	}

	//Berfungsi untuk menyimpan data pada tabel blog
	public function save($_table, $data)
	{
		$this->db->insert($_table, $data);
		redirect('main/tampil_admin_blog', 'refresh');
	}

	//Berfungsi untuk melakukan update data pada tabel blog
	public function update($id_blog, $data)
	{
		$this->db->where('id_blog', $id_blog);
		$this->db->update('blog', $data);
		redirect('main/tampil_admin_blog', 'refresh');
	}

	//Berfungsi untuk menghapus data pada tabel blog
	public function delete($id_blog)
	{
		$this->db->where('id_blog', $id_blog);
		$this->db->delete('blog');
		redirect('main/tampil_admin_blog', 'refresh');
	}
}