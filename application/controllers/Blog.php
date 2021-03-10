<?php
/**
 * 
 */
class Blog extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_mdl');
		$this->load->helper('url');
	}

	//Bergungsi untuk menambah blog pada halaman editor
	public function tambah()
	{
		$data = array(
			'id_blog' => '',
			'judul_blog' => $this->input->post('txtjudul'),
			'nama_editor' => $this->input->post('txteditor'),
			'isi_blog' => $this->input->post('txtisi')
		);
		$this->Blog_mdl->save('blog', $data);
		redirect('main/tampil_admin_blog', 'refresh');
	}

	public function tampil_addblog()
	{
		$this->load->view('admin/admin_addblog');
	}

	//Berfungsi untuk menambah blog melalui tabel pada halaman admin bagian blog
	public function admin_tambah()
	{
		$data = array(
			'id_blog' => '',
			'judul_blog' => $this->input->post('txtjudul'),
			'nama_editor' => $this->input->post('txteditor'),
			'isi_blog' => $this->input->post('txtisi')

		);
		$this->Blog_mdl->save('blog', $data);
	}

	//Berfungsi untuk mengedit blog melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin
	public function edit($id_blog = null)
	{
		if(isset($_POST['btnsimpan'])) {
			$data = array(
				'id_blog' =>$this->input->post('txtidblog'),
				'judul_blog' => $this->input->post('txtjudul'),
				'nama_editor' => $this->input->post('txtnama'),
				'isi_blog' => $this->input->post('txtisi')

			);
			//Berfungsi untuk mengupdate blog setelah proses edit melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin selesai
			$this->Blog_mdl->update($id_blog, $data);
			// Executes: REPLACE INTO blog (judul_blog, nama_editor, isi_blog) VALUES ('txtjudul', 'txteditor', 'txtisi')
		}

		else{
			$data['blog'] = $this->Blog_mdl->getById($id_blog);
			$this->load->view('admin/admin_editblog.php', $data);
		}
	}

	//Berfungsi untuk menghapus tabel editor melalui halaman setting pada editor ataupun pada halaman admin bagian editor
	public function delete($id_blog){
		$this->Blog_mdl->delete($id_blog);
	}
}

