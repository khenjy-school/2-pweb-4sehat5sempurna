<?php

/**
 * 
 */
class Editor extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model('EditorMdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk membuat editor melalui halaman signup
	public function signup()
	{
		//tampung data di array
		$data = array(
			'id_editor' => '';	//tambah id otomatis di database
			'nama' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post(''),
			'tglgabung' => $this->input->post('')
		);

		$this->EditorMdl->add_editor($data);
		$this->EditorMdl->jmlh_editor($data);
	}


	//Berfungsi untuk menambah editor melalui tabel pada halaman admin bagian editor
	public function admin_tambah()
	{

	}

	//Berfungsi untuk masuk ke akun editor melalui halaman login
	public function login() //cek editor
	{
		$username = $this->input->post('txtnama');
		$password = $this->ipput->post('txtpassword');

		$cek_editor = $this->EditorMdl->cek_editor('editor', array("nama" => $username))->num_rows();
		//fungsi num_rows mengembalikan jumlah record
		if ($cek_editor > 0) {
			$cek_pass =  $this->EditorMdl->cek_editor('editor', array("password" => $password))->num_rows();
			if ($cek_pass > 0) {
				echo "<script>alert('Berhasil Login!')</sccript>";
				redirect(site_url,'editor');
			}
			else{
				echo "<script>alert('Password Salah!')</sccript>";
				redirect(site_url,'login');
			}
		}else{
			echo "<script>alert('Username Tidak ditemukan!')</sccript>";
			redirect(site_url, 'login');
		}
	}


	//Berfungsi untuk melakukan proses logout melalui halaman editor
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}


	//Berfungsi untuk menampilkan tabel editor melalui halaman admin bagian editor
	public function getAll()
	{
		$data = array(
			"konten" => "admin/"
		)
		$data[''] = $this->EditorMdl->tampil_data()->result(); 
		redirect('main/tampil_admin', 'refresh')
	}

	//Berfungsi untuk menampilkan tabel
	public function getById()
	{
		$query = $this->db->get_where('', array('id' => $id), $limit, $offset);
	}


	//Berfungsi untuk mengedit data editor melalui halaman setting pada halaman editor maupun melalui form pada halaman admin bagian editor
	public function edit()
	{
		
	}


	//Berfungsi untuk mengupdate editor setelah proses edit melalui form edit pada halaman setting editor ataupun form edit pada halaman admin bagian editor selesai
	public function update()
	{

	}


	//Berfungsi untuk menghapus data editor melalui tabel editor pada halaman admin bagian editor
	public function delete($id=null)
	{
		if ($this->main->delete_editor($id_editor)) {
			redirect(site_url,'admin/editor');
		}else{
			echo "<script>alert('Tidak ada data yang dihapus')</sccript>"
			redirect(site_url, 'admin/editor');
		}
	}
}
	

?>