<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Blog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambah blog melalui tabel pada halaman admin bagian blog
	public function tambah()
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_blog' => '',
				'judul_blog' => $this->input->post('txtjudul'),
				'nama_editor' => $this->input->post('txteditor'),
				'isi_blog' => $this->input->post('txtisi')
			);
			$this->Blog_mdl->save('blog', $data);
		}
		else{
			$data['title'] = "Tambah Blog";
			$data['header1'] = 'Tambah Blog';
			$this->load->view('admin/_partials/head.php', $data);
			$this->load->view('admin/_partials/navbar.php', $data);
			$this->load->view('admin/admin_addblog', $data);
		}

	}

	//Berfungsi untuk mengedit blog melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin
	public function edit($id_blog = null)
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_blog' => $this->input->post('txtidblog'),
				'judul_blog' => $this->input->post('txtjudul'),
				'nama_editor' => $this->input->post('txtnama'),
				'isi_blog' => $this->input->post('txtisi')
			);
			//Berfungsi untuk mengupdate blog setelah proses edit melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin selesai
			$this->Blog_mdl->update($id_blog, $data);
			// Executes: REPLACE INTO blog (judul_blog, nama_editor, isi_blog) VALUES ('txtjudul', 'txteditor', 'txtisi')
		}
		else {
			$data['blog'] = $this->Blog_mdl->getById($id_blog);
			$data['title'] = "Edit Blog";
			$data['header1'] = 'Edit Blog';
			$this->load->view('admin/_partials/head.php', $data);
			$this->load->view('admin/_partials/navbar.php', $data);
			$this->load->view('admin/admin_editblog', $data);
		}
	}

	//Berfungsi untuk menghapus tabel blog melalui halaman setting pada editor ataupun pada halaman admin bagian editor
	public function delete($id_blog)
	{
		$this->Blog_mdl->delete($id_blog);
	}
}

