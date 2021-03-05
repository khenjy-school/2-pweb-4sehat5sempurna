<?php
/**
 *	Controller main adalah controller yang bertugas untuk mengatur perpindahan antar halaman web.
 *	Gunakan fungsi redirect pada controller
 */
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_mdl');
		$this->load->model('Editor_mdl');
		$this->load->model('Komentar_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menampilkan halaman utama admin (dashboard)
	public function tampil_admin()
	{
		$this->load->view('admin/admin.php');
	}

	//Berfungsi untuk menampilkan halaman admin bagian blog (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_blog()
	{
		$data["blog"] = $this->blog_mdl->getAll();
		$this->load->view('admin/blog/tabelblog.php');
		$this->load->view('admin/_partials/tableblog.php', $data);
	}

	//Berfungsi untuk menampilkan halaman admin bagian editor (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_editor()
	{
		$data["editor"] = $this->editor_mdl->getAll();
		$this->load->view('table/tableeditor.php', $data);
	}

	//Berfungsi untuk menampilkan halaman admin bagian komentar (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_komentar()
	{
		$data["komentar"] = $this->komentar_mdl->getAll();
		$this->load->view('table/tablekomentar.php', $data);
	}

	//Berfungsi untuk menampilkan halaman index
	public function tampil_home()
	{
		$this->load->view('public/home.php');
	}

	//Berfungsi untuk menampilkan halaman about
	public function tampil_about()
	{
		$this->load->view('public/about.php');
	}

	//Berfungsi untuk menampilkan halaman error
	public function tampil_error()
	{
		$this->load->view('public/error.php');
	}

	//Berfungsi untuk menampilkan halaman kontak
	public function tampil_kontak()
	{
		$this->load->view('public/kontak.php');
	}

	//Berfungsi untuk menampilkan halaman signup
	public function tampil_signup()
	{
		$this->load->view('public/signup.php');
	}

	//Berfungsi untuk menampilkan halaman login
	public function tampil_login()
	{
		$this->load->view('public/login.php');
	}

	//Berfungsi untuk menampilkan halaman penghung
	public function tampil_penghubung()
	{
		$this->load->view('public/penghubung.php');
	}

	//Berfungsi untuk menampilkan halaman utama editor
	public function tampil_editor()
	{
		$this->load->view('editor/editor.php');
	}

	//Berfungsi untuk menampilkan halaman buat blog
	public function tampil_buatblog()
	{
		$this->load->view('editor/buatblog.php');
	}

	//Berfungsi untuk menampilkan halaman utama makanan pokok
	public function tampil_makananpokok()
	{
		$this->load->view('public/makananpokok.php');
	}

	//Berfungsi untuk menampilkan halaman utama lauk pauk
	public function tampil_laukpauk()
	{
		$this->load->view('public/laukpauk.php');
	}

	//Berfungsi untuk menampilkan halaman utama sayur
	public function tampil_sayur()
	{
		$this->load->view('public/sayur.php');
	}

	//Berfungsi untuk menampilkan halaman utama buah
	public function tampil_buah()
	{
		$this->load->view('public/buah.php');
	}

	//Berfungsi untuk menampilkan halaman utama susu
	public function tampil_susu()
	{
		$this->load->view('public/susu.php');
	}

	//Berfungsi sebagai contoh
	public function tampil_namahalaman()
	{
		$this->load->view('namahalaman.php');
	}
}