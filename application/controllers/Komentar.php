<?php
/**
 * 
 */
class Komentar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Komentar_mdl');
		$this->load->helper('url');
	}


	//Berfungsi untuk menambah komentar pada halaman blog
	public function tambah()
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


	//Berfungsi untuk menambah komentar melalui tabel pada halaman admin bagian komentar
	public function admin_tambah()
	{

	}


	//Berfungsi untuk mendapatkan tabel
	public function getALl()
	{
		$data = array(
			"konten" => "admin/"
		)
		$data[''] = $this->EditorMdl->tampil_data()->result(); 
		$this->load->view('admin', $data);
	}

	//Berfungsi untuk mendapatkan tabel berdasarkan id
	public function getById()
	{

	}


	//Berfungsi untuk mengedit komentar melalui form pada halaman blog ataupun melalui form pada halaman admin bagian komentar
	public function edit()
	{

	}


	//Berfungsi untuk mengupdate komentar setelah proses edit melalui form edit pada halaman blog ataupun form edit pada halaman admin bagian komentar selesai
	public function update()
	{

	}


	//Berfungsi untuk menghapus data komentar melalui tabel komentar pada halaman admin bagian komentar
	public function delete($id=null)
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
}
	

?>