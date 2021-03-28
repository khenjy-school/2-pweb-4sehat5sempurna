<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *	Controller main adalah controller yang bertugas untuk mengatur perpindahan antar halaman web.
 *	Gunakan fungsi redirect pada controller
 */
class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_mdl');
		$this->load->model('Main_mdl');
		$this->load->model('Blog_mdl');
		$this->load->model('Editor_mdl');
		$this->load->model('Komentar_mdl');
		$this->load->helper('url');
	}

	public function signup()
    {
        if(isset($_POST['btntambah'])) {
			$kondisi = array(
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
				'password' => $this->input->post('txtpassword'),
				'telp' => $this->input->post('txttelp')
			);
            $this->Admin_mdl->save('admin', $kondisi);
		}
		else{
			$data['title'] = 'Sign Up';
			$data['header1'] = 'Sign Up';
			$this->load->view('admin/_partials/head.php', $data);
			$this->load->view('admin/_partials/navbar.php', $data);
			$this->load->view('admin/signup.php', $data);
			$this->load->view('admin/_partials/footer.php');
		}
    }

	public function login()
    {
        if(isset($_POST['btnlogin'])) {
			$kondisi = array(
				'email' => $this->input->post('txtemail'),
				'password' => $this->input->post('txtpassword')
			);
            $cek_user = $this->Admin_mdl->cek_data('admin', $kondisi);

            if($cek_user->num_rows() > 0){
                $data = $cek_user->result();
				$login = array(
					'email' => $email,
					'status' => 'active'
				);

				$this->session->set_userdata('admin', $login);

				redirect('main/tampil_admin');
            }
            else{
                echo "<scipt>alert('email tidak ditemukan')</script>";
				$data['title'] = 'Login';
				$data['header1'] = 'Login';
				$this->load->view('admin/_partials/head.php', $data);
				$this->load->view('admin/_partials/navbar.php', $data);
				$this->load->view('admin/login.php', $data);
				$this->load->view('admin/_partials/footer.php');
            }
		}
		else{
			$data['title'] = 'Login';
			$data['header1'] = 'Login';
			$this->load->view('admin/_partials/head.php', $data);
			$this->load->view('admin/_partials/navbar.php', $data);
			$this->load->view('admin/login.php', $data);
			$this->load->view('admin/_partials/footer.php');
		}
    }

	//Berfungsi untuk menampilkan halaman utama admin (dashboard)
	public function tampil_admin()
	{
		$data = array(
			'title' =>  "Admin",
			'header1' =>  "Dashboard",
			'jumlah_blog' => $this->Blog_mdl->countAll('blog'),
			'jumlah_editor' => $this->Blog_mdl->countAll('editor'),
			'jumlah_komentar' => $this->Blog_mdl->countAll('komentar')
		);
		$this->load->view('admin/_partials/head.php', $data);
		$this->load->view('admin/_partials/navbar.php', $data);
		$this->load->view('admin/index.php');
	}

	public function tampil_admin_settings()
	{
		$data = array(
			'title' =>  "Admin - Settings",
			'header1' =>  "Settings",
		);
		$this->load->view('admin/_partials/head.php', $data);
		$this->load->view('admin/_partials/navbar.php', $data);
		$this->load->view('admin/admin_settings.php', $data);
	}

	//Berfungsi untuk menampilkan halaman admin bagian blog (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_blog()
	{
		$data = array(
			'title' => "Admin - Blog",
			'header1' => 'List Blog',
			'blog' => $this->Blog_mdl->getAll('blog')->result(),
			'jumlah_blog' => $this->Blog_mdl->countAll('blog')
		);
		$this->load->view('admin/_partials/head.php', $data);
		$this->load->view('admin/_partials/navbar.php', $data);
		$this->load->view('admin/admin_blog.php', $data);
	}

	//Berfungsi untuk menampilkan halaman admin bagian editor (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_editor()
	{
		$data = array(
			'title' => "Admin - Editor",
			'header1' => "List Editor",
			'editor' => $this->Editor_mdl->getAll('editor')->result(),
			'jumlah_editor' => $this->Editor_mdl->countAll('editor')
		);
		$this->load->view('admin/_partials/head.php', $data);
		$this->load->view('admin/_partials/navbar.php', $data);
		$this->load->view('admin/admin_editor.php', $data);
	}

	//Berfungsi untuk menampilkan halaman admin bagian komentar (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_komentar()
	{
		$data = array(
			'title' => "Admin - Komentar",
			'header1' => "List Komentar",
			'komentar' => $this->Komentar_mdl->getAll('komentar')->result(),
			'jumlah_komentar' => $this->Komentar_mdl->countAll('komentar')
		);
		$this->load->view('admin/_partials/head.php', $data);
		$this->load->view('admin/_partials/navbar.php', $data);
		$this->load->view('admin/admin_komentar.php', $data);
	}

	//Berfungsi untuk menampilkan halaman admin bagian komentar (sementara sebelum dipindahkan ke controller masing-masing)
	public function tampil_admin_data()
	{
		$data = array(
			'title' => "Admin - Data",
			'header1' => "List Admin",
			'admin' => $this->Admin_mdl->getAll('komentar')->result()
		);
		$this->load->view('admin/_partials/head.php', $data);
		$this->load->view('admin/_partials/navbar.php', $data);
		$this->load->view('admin/admin_komentar.php', $data);
	}

	//Berfungsi untuk menampilkan halaman index
	public function tampil_home()
	{
		$data = array(
			'title' => "Selamat Datang di 4s5s",
			'header1' => "Selamat Datang di 4 Sehat 5 Sempurna",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/index.php', $data);
	}

	//Berfungsi untuk menampilkan halaman about
	public function tampil_about()
	{
		$data = array(
			'title' => "About Us",
			'header1' => "About Us",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/about.php', $data);
	}

	//Berfungsi untuk menampilkan halaman error
	public function tampil_error()
	{
		$data = array(
			'title' => "Error 404",
			'header1' => "Error 404",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/error.php', $data);
	}

	//Berfungsi untuk menampilkan halaman kontak
	public function tampil_kontak()
	{
		$data = array(
			'title' => "Kontak Kami",
			'header1' => "Kontak Kami",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/kontak.php', $data);
	}

	//Berfungsi untuk menampilkan halaman signup
	public function tampil_signup()
	{
		$data = array(
			'title' => "Sign Up",
			'header1' => "Sign Up",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/signup.php', $data);
	}

	//Berfungsi untuk menampilkan halaman login
	public function tampil_login()
	{
		$data = array(
			'title' => "Login",
			'header1' => "Login",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/login.php', $data);
	}

	//Berfungsi untuk menampilkan halaman penghung
	public function tampil_penghubung()
	{
		$data = array(
			'title' => "Penghubung",
			'header1' => "Penghubung",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/penghubung.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama editor
	public function tampil_editor()
	{
		$data = array(
			'title' => "Editor",
			'header1' => "Editor",
		);
		$this->load->view('editor/_partials/head.php', $data);
		$this->load->view('editor/_partials/navbar.php', $data);
		$this->load->view('editor/editor.php', $data);
	}

	//Berfungsi untuk menampilkan halaman buat blog
	public function tampil_buatblog()
	{
		$data = array(
			'title' => "Buat Blog",
			'header1' => "Buat Blog",
		);
		$this->load->view('editor/_partials/head.php', $data);
		$this->load->view('editor/_partials/navbar.php', $data);
		$this->load->view('editor/buatblog.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama makanan pokok
	public function tampil_makananpokok()
	{
		$data = array(
			'title' => "Makanan Pokok",
			'header1' => "Makanan Pokok",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/makananpokok.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama lauk pauk
	public function tampil_laukpauk()
	{
		$data = array(
			'title' => "Lauk Pauk",
			'header1' => "Lauk Pauk",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/laukpauk.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama sayur
	public function tampil_sayur()
	{
		$data = array(
			'title' => "Sayur",
			'header1' => "Sayur",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/sayur.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama buah
	public function tampil_buah()
	{
		$data = array(
			'title' => "Buah-Buahan",
			'header1' => "Buah-Buahan",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/buahbuahan.php', $data);
	}

	//Berfungsi untuk menampilkan halaman utama susu
	public function tampil_susu()
	{
		$data = array(
			'title' => "Susu",
			'header1' => "Susu",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('public/susu.php', $data);
	}

	//Berfungsi sebagai contoh
	public function tampil_namahalaman()
	{
		$data = array(
			'title' => "Header",
			'header1' => "Header 1",
		);
		$this->load->view('public/_partials/head.php', $data);
		$this->load->view('public/_partials/navbar.php', $data);
		$this->load->view('namahalaman.php', $data);
	}
}