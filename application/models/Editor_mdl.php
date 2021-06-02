<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Editor_mdl extends CI_Model
{
	private $_table = 'editor';
	private $_tableblog = 'blog';

	public $id_editor;
    public $nama;
    public $email;
    public $password;
	public $telp;
	public $tglgabung;

	//Berfungsi untuk mengambil data hasil query
	public function getAll($_table)
	{
		return $this->db->get($_table);
	}

	//Berfungsi untuk mengambil satu data dari hasil query
	public function getById($id_editor)
	{
		return $this->db->get_where($this->_table, ["id_editor" => $id_editor])->row();
	}

	public function countAll($_table)
	{
		return $this->db->count_all_results($_table);
	}

	//Berfungsi untuk
	public function save($_table, $data)
	{
        $this->db->insert('editor', $data);
		redirect('main/tampil_admin_editor', 'refresh');
	}

	//Berfungsi untuk
	public function update($id_editor, $data)
	{
		$this->db->where('id_editor', $id_editor);
		$this->db->update('editor', $data);
		redirect('main/tampil_admin_editor', 'refresh');
	}

	//Berfungsi untuk
	public function delete($id_editor)
	{
		$this->db->where('id_editor', $id_editor);
		$this->db->delete('editor');
		redirect('main/tampil_admin_editor', 'refresh');
	}
}
?>