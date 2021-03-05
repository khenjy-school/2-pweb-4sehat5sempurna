<?php
/**
 *	Controller main adalah controller yang bertugas untuk mengatur perpindahan antar halaman web.
 *	Gunakan fungsi redirect pada controller
 */
class Main extends CI_Controller
{
	
	function __construct(argument)
	{
		$this->load->helper('url');

	}

	//Berfungsi untuk menampilkan halaman utama admin (dashboard)
	public function tampil_admin()
	{
		$this->load->view('template/headeradm');
		$this->load->view('admin/admin.php', $data);
		$this->load->view('template/footeradm');
	}

	//Berfungsi untuk menampilkan halaman admin bagian blog (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_blog()
	{
		$this->load->view('template/headeradm');
		$this->load->view('table/tableblog', $data)
		$this->load->view('template/footeradm');
	}

	//Berfungsi untuk menampilkan halaman admin bagian editor (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_editor()
	{
		$this->load->view('template/headeradm');
		$this->load->view('table/tableeditor', $data)
		$this->load->view('template/footeradm');
	}

	//Berfungsi untuk menampilkan halaman admin bagian komentar (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_komentar()
	{
		$this->load->view('template/headeradm');
		$this->load->view('table/tablekomentar', $data)
		$this->load->view('template/footeradm');
	}

	//Berfungsi untuk menampilkan halaman index
	public function tampil_home()
	{
		$this->load->view('template/header');
		$this->load->view('public/home');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman about
	public function tampil_about()
	{
		$this->load->view('template/header');
		$this->load->view('public/about');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman error
	public function tampil_error()
	{
		$this->load->view('template/header');
		$this->load->view('public/error');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman kontak
	public function tampil_kontak()
	{
		$this->load->view('template/header');
		$this->load->view('public/kontak');
		$this->load->view('template/footer');
		
	}

	//Berfungsi untuk menampilkan halaman signup
	public function tampil_signup()
	{
		$this->load->view('template/header');
		$this->load->view('signup');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman login
	public function tampil_login()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman penghung
	public function tampil_penghubung()
	{
		$this->load->view('template/header');
		$this->load->view('public/penghubung');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman utama editor
	public function tampil_editor()
	{
		$this->load->view('template/header');
		$this->load->view('editor/editor');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman buat blog
	public function tampil_buatblog()
	{
		$this->load->view('template/header');
		$this->load->view('editor/buatblog');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman utama makanan pokok
	public function tampil_makananpokok()
	{
		$this->load->view('template/header');
		$this->load->view('public/makananpokok');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman utama lauk pauk
	public function tampil_laukpauk()
	{
		$this->load->view('template/header');
		$this->load->view('public/laukpauk');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman utama sayur
	public function tampil_sayur()
	{
		$this->load->view('template/header');
		$this->load->view('public/sayur');
		$this->load->footer('template/footer');
	}

	//Berfungsi untuk menampilkan halaman utama buah
	public function tampil_buah()
	{
		$this->load->view('template/header');
		$this->load->view('public/buah');
		$this->load->view('template/footer');
	}

	//Berfungsi untuk menampilkan halaman utama susu
	public function tampil_susu()
	{
		$this->load->view('template/header');
		$this->load->view('public/susu');
		$this->load->view('template/footer');
	}

	//Berfungsi sebagai contoh
	public function tampil_namahalaman()
	{
		$this->load->view('template/header');
		$this->load->view('namahalaman');
		$this->load->view('template/footer');
	}
}