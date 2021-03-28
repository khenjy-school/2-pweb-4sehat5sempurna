<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class admin_mdl extends CI_Model
{
	private $_table = 'admin';

	public $id_admin;
    public $nama;
    public $email;
    public $password;
    public $telp;

	//Berfungsi untuk mengambil data hasil query
	public function getAll($_table)
	{
		return $this->db->get($_table);
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id_admin)
	{
		return $this->db->get_where($this->_table, ["id_admin" => $id_admin])->row();
		redirect('admin/', 'refresh');
	}

    //Berfungsi untuk mengambil satu data dari hasil query
	public function cek_data($_tabel, $kondisi)
	{
		return $this->db->get_where($_tabel, $kondisi);
	}

	//Berfungsi untuk menyimpan akun admin
	public function save($_table, $data)
	{
		$this->db->insert($_table, $data);
		redirect('main/tampil_admin', 'refresh');
	}

	//Berfungsi untuk melakukan update akun admin
	public function update($id_admin, $data)
	{
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $data);
		redirect('main/tampil_admin', 'refresh');
	}

	//Berfungsi untuk menghapus akun admin
	public function delete($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		$this->db->delete('admin');
		redirect('main/tampil_admin', 'refresh');
	}
}