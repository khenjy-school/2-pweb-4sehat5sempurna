<?php

/**
 * 
 */
class editor extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('editorMdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk membuat editor melalui halaman signup
	public function signup()
	{
		//tampung data di array
		$data = array(
			'id_editor' => '',	//tambah id otomatis di database
			'nama' => $this->input->post(''),
			'email' => $this->input->post(''),
			'password' => $this->input->post(''),
			'telp' => $this->input->post(''),
			'tglgabung' => $this->input->post('')
		);

		$this->editorMdl->add_editor($data);
		$this->editorMdl->jmlh_editor($data);
	}

	public function tampil_addeditor()
	{
		$this->load->view('admin/admin_addeditor');
	}


	//Berfungsi untuk menambah editor melalui tabel pada halaman admin bagian editor
	public function admin_tambah()
	{
		$data = array(
			'id_editor' => '',
			'judul_editor' => $this->input->post('txtjudul'),
			'nama_editor' => $this->input->post('txteditor'),
			'isi_editor' => $this->input->post('txtisi')
		);
		$this->editor_mdl->save('editor', $data);
	}

	//Berfungsi untuk masuk ke akun editor melalui halaman login
	
	public function login() 
	{
		$username = $this->input->post('txtnama');
		$password = $this->ipput->post('txtpassword');

		$cek_editor = $this->editorMdl->cek_editor('editor', array("nama" => $username))->num_rows();
		//fungsi num_rows mengembalikan jumlah record
		if ($cek_editor > 0) {
			$cek_pass =  $this->editorMdl->cek_editor('editor', array("password" => $password))->num_rows();
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

	//Berfungsi untuk mengedit data editor melalui halaman setting pada halaman editor maupun melalui form pada halaman admin bagian editor
	public function edit()
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_editor' =>$this->input->post('txtideditor'),
				'judul_editor' => $this->input->post('txtjudul'),
				'nama_editor' => $this->input->post('txtnama'),
				'isi_editor' => $this->input->post('txtisi')

			);
			//Berfungsi untuk mengupdate editor setelah proses edit melalui form edit pada halaman utama editor ataupun form edit editor pada halaman admin selesai
			$this->editor_mdl->update($id_editor, $data);
			// Executes: REPLACE INTO editor (judul_editor, nama_editor, isi_editor) VALUES ('txtjudul', 'txteditor', 'txtisi')
		}

		else{
			$data['editor'] = $this->editor_mdl->getById($id_editor);
			$this->load->view('admin/admin_editeditor.php', $data);
		}
	}

	//Berfungsi untuk menghapus data editor melalui tabel editor pada halaman admin bagian editor
	public function delete($id_editor)
	{
		$this->editor_mdl->delete($id_editor);
	}
}
	

?>