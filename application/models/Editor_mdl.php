<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Editor_mdl extends CI_Model
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

	//Berfungsi untuk
	public function save($_table, $data)
	{
        return $this->db->insert('editor', $data);
	}

	//Berfungsi untuk
	public function update()
	{
		$data = array(
			'nama' => $nama,
			'password' => $password,
			'tglgabung' => $tglgabung
		);
		$this->db->where('id', $id);
		$this->db->update('editor', $data);
	}

	//Berfungsi untuk
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('editor');
	}

	//Berfungsi untuk menghitung jumlah editor
	public function jmlh_editor($value='')
	{
		$this->db->count('id_editor', $data);
	}
}
?>