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
		$this->load->model('Staff_mdl');
		$this->load->helper('url');
	}

	//Berfungsi untuk menambah staff melalui form pada halaman signup
	public function signup()
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_staff' => '',
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
                'password' => $this->input->post('txtpassword'),
				'telp' => $this->input->post('txttelp')
			);
			$this->Staff_mdl->save('staff', $data);
		}
		else{
			$this->load->view('staff/signup.php');
		}
	}

	//Berfungsi untuk mengedit blog melalui form edit pada halaman utama editor ataupun form edit blog pada halaman staff
	public function edit($id_blog = null)
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_staff' => $this->input->post('txtidstaff'),
				'nama' => $this->input->post('txtnama'),
				'email' => $this->input->post('txtemail'),
                'password' => $this->input->post('txtpassword'),
				'telp' => $this->input->post('txttelp')
			);
			//Berfungsi untuk mengupdate akun staff setelah proses edit melalui form setting pada halaman setting staff selesai
			$this->Staff_mdl->update($id_staff, $data);
			// Executes: REPLACE INTO staff (nama, email, password, telp) VALUES ('txtnama', 'txtemail', 'txtpassword', 'txttelp')
		}
		else {
			$data['staff'] = $this->Staff_mdl->getById($id_staff);
			$this->load->view('staff/staff_editblog', $data);
		}
	}

	//Berfungsi untuk menghapus tabel akun staff melalui halaman setting pada staff
	public function delete($id_staff)
	{
		$this->Staff_mdl->delete($id_staff);
	}
}