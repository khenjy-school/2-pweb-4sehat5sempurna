<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor_mdl extends CI_Model{

	public function getEditor()
	{
		$result = $this->db->get('editor');
		return $result;
	}

	

	public function save_editor()	//untuk menambahkan editor halaman buat akun
	{
		post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        return $this->db->insert($this->_table, $this);
	}

	public function cek_editor($tabel, $where)
	{
		return $this->db->get_where($tabel, $where);
	}

	public function tampil_editor()	//untuk menampilkan tabel editor di halaman admin
	{
		$this->db->get('editor');
	}
	public function update_editor()	//untuk halaman admin (edit)
	{
		$data = array(
			'nama' => $nama,
			'password' => $password,
			'tglgabung' => $tglgabung
		);
		$this->db->where('id', $id);
		$this->db->update('editor', $data);
	}

	public function del_editor($id)	//untuk halaman admin
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