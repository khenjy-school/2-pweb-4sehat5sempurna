<?php
/**
 *	Controller main adalah controller yang bertugas untuk mengatur perpindahan antar halaman web.
 *	Dengan begitu programmer tidak perlu menambahkan public function tampil pada controllernya.
 *	Controller ini bisa digunakan oleh controllerr lain melalui fungsi redirect.
 *	Nama public function diketik dengan nama tampil_namahalaman.
 *	Isi koding adalah $this->load->view('namahalaman');
 *	Fungsi Redirect ke controller ini adalah redirect('main/namapublicfunction', 'refresh');
 *	Susunan public function diatur berdasarkan urutan pada layer di figma
 */
class Main extends CI_Controller
{
	
	function __construct(argument)
	{
		$this->load->helper('url');

	}

	//Berfungsi untuk menampilkan halaman index
	public function tampil_home()
	{
		$this->load->view('home');
	}

	//Berfungsi untuk menampilkan halaman about
	public function tampil_about()
	{
		$this->load->view('public/about');
	}

	//Berfungsi untuk menampilkan halaman error
	public function tampil_error()
	{
		$this->load->view('public/error');
	}

	//Berfungsi untuk menampilkan halaman kontak
	public function tampil_kontak()
	{
		$this->load->view('public/kontak');
	}

	//Berfungsi untuk menampilkan halaman admin
	public function tampil_admin()
	{
		$this->load->view('admin/admin');
	}

	//Berfungsi untuk menampilkan halaman signup
	public function tampil_signup()
	{
		$this->load->view('signup');
	}

	//Berfungsi untuk menampilkan halaman login
	public function tampil_login()
	{
		$this->load->view('login');
	}

	//Berfungsi untuk menampilkan halaman penghung
	public function tampil_penghubung()
	{
		$this->load->view('public/penghubung');
	}

	//Berfungsi untuk menampilkan halaman utama editor
	public function tampil_editor()
	{
		$this->load->view('editor/editor');
	}

	//Berfungsi untuk menampilkan halaman buat blog
	public function tampil_buatblog()
	{
		$this->load->view('editor/buatblog');
	}

	//Berfungsi untuk menampilkan halaman utama makanan pokok
	public function tampil_makananpokok()
	{
		$this->load->view('public/makananpokok');
	}

	//Berfungsi untuk menampilkan halaman utama lauk pauk
	public function tampil_laukpauk()
	{
		$this->load->view('public/laukpauk');
	}

	//Berfungsi untuk menampilkan halaman utama sayur
	public function tampil_sayur()
	{
		$this->load->view('public/sayur');
	}

	//Berfungsi untuk menampilkan halaman utama buah
	public function tampil_buah()
	{
		$this->load->view('public/buah');
	}

	//Berfungsi untuk menampilkan halaman utama susu
	public function tampil_susu()
	{
		$this->load->view('public/susu');
	}

	//Berfungsi sebagai contoh
	public function namahalaman()
	{
		$this->load->view('namahalaman');
	}
}