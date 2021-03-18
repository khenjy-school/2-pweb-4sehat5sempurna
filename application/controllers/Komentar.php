<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Komentar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Komentar_mdl');
		$this->load->helper('url');
	}
	
	//Berfungsi untuk menambah komentar pada halaman blog
	public function tambah()
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_komentar' => '',
				'judul_blog' => $this->input->post('txtjudulblog'),
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
				'isi' => $this->input->post('txtisi'),
				'tglkomen' => $this->input->post('txttglkomentar')
			);
			$this->Komentar_mdl->save('komentar', $data);
		}
		else{
			$this->load->view('admin/admin_addkomentar.php');
		}
	}


	//Berfungsi untuk mengedit komentar melalui form pada halaman blog ataupun melalui form pada halaman admin bagian komentar
	public function edit($id_komentar = null)
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_komentar' => $this->input->post('txtidkomentar'),
				'judul_blog' => $this->input->post('txtjudulblog'),
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
				'isi_blog' => $this->input->post('txtisi'),
				'tglkomen' => $this->input->post('txttglkomentar')
			);
			//Berfungsi untuk mengupdate komentar setelah proses edit melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin selesai
			$this->Komentar_mdl->update($id_komentar, $data);
			// Executes: REPLACE INTO komentar (judul_blog, nama, email, isi, tglkomen) VALUES ('txtjudulblog', 'txtnama', 'txtemail', 'txtisi', 'txttglkomentar')
		}
		else {
			$data['blog'] = $this->Blog_mdl->getById($id_blog);
			$this->load->view('admin/admin_editkomentar.php', $data);
		}
	}

	//Berfungsi untuk menghapus data komentar melalui tabel komentar pada halaman admin bagian komentar
	public function delete($id_komentar)
	{
		$this->Komentar_mdl->delete($id_komentar);
	}
}