<?php

/**
 *  
 */
class Main extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model('EditorMdl');
		$this->load->model('BlogMdl');
		$this->load->model('KomentarMdl');
		$this->load->model('ViewMdl');
		$this->load->helper('url');
	}



	//Editor Controller
	public function tambah_akun()
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

	public function masuk_editor() //cek editor
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
	
	public function tampil_editor()
	{
		$data = array(
			"konten" => "admin/"
		)
		$data[''] = $this->EditorMdl->tampil_data()->result(); 
		$this->load->view('admin', $data);
	}

	public function update_editor()
	{

	}

	public function delete_editor($id=null)
	{
		if (condition) {
			# code...
		}

		if ($this->main->delete_editor($id_editor)) {
			redirect(site_url,'admin/editor');
		}else{
			echo "<script>alert('Tidak ada data yang dihapus')</sccript>"
			redirect(site_url, 'admin/editor');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}




	//Blog Controller
	public function posting_blog()
	{
		//tampung data di array
		$data = array(
			'id_blog' = '',	//tambah id otomatis di database
			'judul' => $this->input->post(''),
			'nama' => $this->input->post('')
		);

		$this->BlogMdl->add_blog($data);
		$this->BlogMdl->jmlh_blog($data);
	}

	public function tampil_blog()
	{

	}

	public function update_blog()
	{

	}

	public function delete_blog()
	{

	}





	//Komentar Controller
	public function posting_komentar()
	{
		$data = array(
			'id_komentar' = '',	//tambah id otomatis di database
			'nama' => $this->input->post(''),
			'email' => $this->input->post(''),
			'isi' => $this->input->post(''),
			'tglkomen' => $this->input->post('')
		);

		$this->KomentarMdl->add_komentar($data);
		$this->EditorMdl->jmlh_komentar($data);
	}

	public function tampil_komentar()
	{

	}

	public function update_komentar()
	{

	}
	public function delete_komentar()
	{

	}




	//Viewer Controller
	public function viewer()
	{
		$data = array(
			'id_viewer' = ''	//tambah id otomatis di database
		);

		$this->EditorMdl->jmlh_viewer($data);
		$this->
	}

		public function tampil_viewer()
	{

	}
}