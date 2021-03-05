<?php
/**
 * 
 */
class Blog extends CI_Controller
{
	
	function __construct(argument)
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
			'isi_blog' => $this->input->post('txtblog')

		);
		$this->Blog_mdl->insert_blog('blog', $data);
		redirect('main/tampil_blog', 'refresh');
	}

	//Berfungsi untuk menambah blog melalui tabel pada halaman admin bagian blog
	public function admin_tambah()
	{
		$data = array(
			'id_blog' => '',
			'judul_blog' => $this->input->post('txtjudul'),
			'nama_editor' => $this->input->post('txteditor'),
			'isi_blog' => $this->input->post('txtblog')

		);
		$this->Blog_mdl->insert_blog('blog', $data);
		redirect('main/tampil_blog', 'refresh');
	}

	//Berfungsi untuk mengedit blog melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin
	public function edit($id)
	{
		$where = array('id_blog' => $id);
		$data['user'] = $this->Blog_mdl->edit_blog($where, 'user')->result();
		$this->load->view('form_edit', $data);
	}

	//Berfungsi untuk mengupdate blog setelah proses edit melalui form edit pada halaman utama editor ataupun form edit blog pada halaman admin selesai
	public function update()
	{
		$data = array(
			'judul_blog' => 'txtjudul',
			'nama_editor'  => 'txteditor',
			'isi_blog'  => 'txtisi'
		);
		
		$this->db->update('blog', $data);
		
		// Executes: REPLACE INTO blog (judul_blog, nama_editor, isi_blog) VALUES ('txtjudul', 'txteditor', 'txtisi')
	}

	//Berfungsi untuk menghapus tabel editor melalui halaman setting pada editor ataupun pada halaman admin bagian editor
	public function delete($id=null)
	{
		$where = array('id_blog' => $id);
		$this->Blog_mdl->delete($where, '');
	}
}

