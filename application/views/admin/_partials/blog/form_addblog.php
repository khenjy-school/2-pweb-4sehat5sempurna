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

    <div class="col-md-3 form-group">
      <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_admin_blog'); ?>" name="btnback">BACK</a>
      <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
      <button class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
    </div>
</form>