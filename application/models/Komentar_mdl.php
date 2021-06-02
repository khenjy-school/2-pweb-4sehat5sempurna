<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Komentar_mdl extends CI_Model
{
	private $_table = 'komentar';

	public $id_komentar;
    public $judul_blog;
    public $nama;
	public $email;
    public $isi;
	public $tglkomen;
	
	//Berfungsi untuk mengambil data hasil query
	public function getAll($_table)
	{
		return $this->db->get($_table);
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id_komentar)
	{
		return $this->db->get_where($this->_table, ["id_komentar" => $id_komentar])->row();
	}
	
	public function countAll($_table)
	{
		return $this->db->count_all_results($_table);
	}

	//Berfungsi untuk menyimpan data pada tabel komentar
	public function save($_table, $data)
	{
		$this->db->insert($_table, $data);
		redirect('main/tampil_admin_komentar', 'refresh');
	}

	//Berfungsi untuk melakukan update data pada tabel komentar
	public function update($id_komentar, $data)
	{
		$this->db->where('id_komentar', $id_komentar);
		$this->db->update('komentar', $data);
		redirect('main/tampil_admin_komentar', 'refresh');
	}

	//Berfungsi untuk menghapus data pada tabel komentar
	public function delete($id_komentar)
	{
		$this->db->where('id_komentar', $id_komentar);
		$this->db->delete('komentar');
		redirect('main/tampil_admin_komentar', 'refresh');
	}
}