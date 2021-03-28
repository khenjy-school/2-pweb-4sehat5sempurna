<base href="<?php echo base_url(); ?>">
<!--Form Tambah Blog Pada Halaman Admin-->
<form action="<?= site_url('blog/tambah'); ?>" method="POST">
    <div class="col-md-3 form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" name="txtjudul" id="judul" aria-describedby="helpId" placeholder="masukkan judul di sini">
  </div>

  <div class="col-md-4 form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="txteditor" id="nama" aria-describedby="helpId" placeholder="masukkan nama di sini">
  </div>

  <div class="col-md-4 form-group">
      <label for="isi">Isi</label>
      <input type="text" class="form-control" name="txtisi" id="isi" aria-describedby="helpId" placeholder="masukkan isi di sini">
  </div>

  <div class="col-md-4 form-group">
      <div class="form-row">
          <label id="formFile">Gambar Akun</label>
      </div>
      <div class="form-row">
          <div class="col-md-9">
              <input type="text" class="form-control" aria-labelledby="formFile" name="txtisi" aria-describedby="btngambar" placeholder="masukkan gambar di sini">
          </div>
          <div class="col-auto">
              <a class="btn btn-primary" href="" data-toggle="modal" data-target="#Modalblog">Upload</a>
          </div>
      </div>

  </div>

  <div class="modal" id="Modalblog" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <iframe src="assets/filemanager/dialog.php?type=1&relative_url=1" width="100%" height="500px" frameborder="0"></iframe>
        </div>
        <div class="modal-footer">
            
        </div>
    </div>
</div>
</div>

<div class="col-md-3 form-group">
  <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_admin_blog'); ?>" name="btnback">BACK</a>
  <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
  <button class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
</div>
</form>