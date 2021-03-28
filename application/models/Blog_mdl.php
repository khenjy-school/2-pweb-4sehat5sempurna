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
	public $image = "default.png";

	//Berfungsi untuk mengambil data hasil query
	public function getAll($_table)
	{
		return $this->db->get($_table);
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id_blog)
	{
		return $this->db->get_where($this->_table, ["id_blog" => $id_blog])->row();
	}

	//Berfungsi untuk menyimpan data pada tabel blog
	public function save($_table, $data)
	{
		$this->gambar = $this->_uploadImage();
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

	private function _uploadImage()
	{
		$config['upload_path'] = './upload/blog';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $this->blog_id;
		$config['overwrite'] = true;
		$config['max_size'] = 1024;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}
	}

	//Berfungsi untuk menghapus data pada tabel blog
	public function delete($id_blog)
	{
		$this->db->where('id_blog', $id_blog);
		$this->db->delete('blog');
		redirect('main/tampil_admin_blog', 'refresh');
	}
}