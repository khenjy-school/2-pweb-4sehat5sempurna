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
		$this->load->model('Admin_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambah admin melalui form pada halaman signup
	public function signup()
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_admin' => '',
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
                'password' => $this->input->post('txtpassword'),
				'telp' => $this->input->post('txttelp')
			);
			$this->Admin_mdl->save('admin', $data);
		}
		else{
			$this->load->view('admin/signup.php');
		}
	}

    public function login($id_admin = null)
    {
        if(isset($_POST['btnlogin'])) {
			$email = $this->input->post('txtemail');
            $password = $this->input->post('txtpassword');

            $cek_user = $this->Admin_mdl->cek_data('admin', array('email' => $email));

            if($login > 0){
                $cek_pass = $this->Admin_mdl->cek_data('admin', array('password' => $password)) -> num_rows();

                if($cek_pass > 0){
                    echo "<script>alert('berhasil login')</script>";
                    $this->load->view('admin/admin.php');
                }
                else{
                    echo "<script>alert('password salah')</script>";
                    $this->load->view('admin/login.php');
                }
            }
            else{
                echo "email tidak ditemukan";
                $this->load->view('admin/login.php');
            }
		}
		else{
			$this->load->view('admin/login', 'refresh');
		}
    }

	//Berfungsi untuk mengedit blog melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin
	public function edit($id_blog = null)
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_admin' => $this->input->post('txtidadmin'),
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
                'password' => $this->input->post('txtpassword'),
				'telp' => $this->input->post('txttelp')
			);
			//Berfungsi untuk mengupdate akun admin setelah proses edit melalui form setting pada halaman setting admin selesai
			$this->Admin_mdl->update($id_admin, $data);
			// Executes: REPLACE INTO admin (nama, email, password, telp) VALUES ('txtnama', 'txtemail', 'txtpassword', 'txttelp')
		}
		else {
			$data['admin'] = $this->Admin_mdl->getById($id_admin);
			$this->load->view('admin/admin_editblog', $data);
		}
	}

	//Berfungsi untuk menghapus tabel akun admin melalui halaman setting pada admin
	public function delete($id_admin)
	{
		$this->Admin_mdl->delete($id_admin);
	}
}