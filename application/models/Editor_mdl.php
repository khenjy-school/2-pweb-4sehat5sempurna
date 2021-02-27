<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Editor_mdl extends CI_Model
{
	//Berfungsi untuk mengambil data hasil query
	public function getALl()
	{
		return $this->db->get($this->table)->result();
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id_editor" => $id])->row();
	}

	//Berfungsi untuk
	public function save()
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
		$this->db->where('id' $id);
		$this->db->delete('editor');
	}

	//Berfungsi untuk menghitung jumlah editor
	public function jmlh_editor($value='')
	{
		$this->db->count('id_editor', $data)
	}
}
?>