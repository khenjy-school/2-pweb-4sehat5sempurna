<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Editor_mdl extends CI_Model{

	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->table)>result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id_editor" => $id])->row();
	}

	public function save()	//untuk menambahkan editor halaman buat akun
	{
        return $this->db->insert('editor', $data);
	}

	public function update()	//untuk halaman admin (edit)
	{
		$data = array(
			'nama' => $nama,
			'password' => $password,
			'tglgabung' => $tglgabung
		);
		$this->db->where('id', $id);
		$this->db->update('editor', $data);
	}

	public function delete($id)	//untuk halaman admin
	{
		$this->db->where('id' $id);
		$this->db->delete('editor');
	}

	public function jmlh_editor($value='')	//untuk menghitung jumlah editor di halaman admin
	{
		$this->db->count('id_editor', $data)
	}
}
?>