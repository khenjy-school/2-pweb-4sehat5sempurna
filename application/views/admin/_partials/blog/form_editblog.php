<!--Form Edit Blog Pada Halaman Admin-->
<form action="" method="POST">
    <div class="col-md-3 form-group">
      <label for="id">Id Blog</label>
      <input type="text"
        class="form-control" disabled name="txtidblog" id="id" aria-describedby="helpId" placeholder="masukkan id di sini" value="<?php echo 
        $blog->id_blog ?>">
    </div>

    <div class="col-md-4 form-group">
      <label for="judul">Judul</label>
      <input type="text"
        class="form-control" name="txtjudul" id="judul" aria-describedby="helpId" placeholder="masukkan judul blog di sini" value="<?php echo $blog->judul_blog ?>">
    </div>

    <div class="col-md-4 form-group">
      <label for="nama">Nama</label>
      <input type="text"
        class="form-control" name="txtnama" id="nama" aria-describedby="helpId" placeholder="masukkan nama editor di sini" value="<?php echo $blog->nama_editor ?>">
    </div>

    <div class="col-md-4 form-group">
      <label for="isi">Isi</label>
      <input type="text"
        class="form-control" name="txtisi" id="isi" aria-describedby="helpId" placeholder="masukkan isi di sini" value="<?php echo $blog->isi_blog ?>">
    </div>

    <div class="col-md-3 form-group">
      <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_admin_blog'); ?>" name="btnback">BACK</a>
      <button class="btn btn-success" type="submit" name="btnsimpan">SUBMIT</button>
      <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
    </div>
</form>