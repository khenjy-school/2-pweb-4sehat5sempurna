<!--Form Edit Blog Pada Halaman Admin-->
<form action="" method="POST">
    <div class="col-md-3 form-group">
      <label for="id">Id Blog</label>
      <input type="text" id="id" 
      class="form-control" disabled name="txtidblog" aria-describedby="helpId" placeholder="masukkan id di sini" value="<?php echo $blog->id_blog ?>">
  </div>

  <div class="col-md-4 form-group">
      <label for="judul">Judul</label>
      <input type="text" id="judul" 
      class="form-control" name="txtjudul" aria-describedby="helpId" placeholder="masukkan judul blog di sini" value="<?php echo $blog->judul_blog ?>">
  </div>

  <div class="col-md-4 form-group">
      <label for="nama">Nama</label>
      <select class="form-control" id="nama" name="txtnama">
        <option selected><?php echo $blog->nama_editor ?></option>
        <?php foreach ($editor as $s) { ?>
        <option><?php echo $s->nama ?></option>
        <?php } ?>
    </select>
</div>

<div class="col-md-4 form-group">
  <label for="isi">Isi</label>
  <input type="text" id="isi"
  class="form-control" name="txtisi" aria-describedby="helpId" placeholder="masukkan isi di sini" value="<?php echo $blog->isi_blog ?>">
</div>

<div class="col-md-4 form-group">
  <label for="gambar">Gambar Akun</label>
  <input type="file"  id="gambar"
  class="form-control" name="txtgambar" aria-describedby="helpId" placeholder="masukkan gambar di sini" value="<?php echo $blog->gambar ?>"  
  aria-describedby="helpId" required="required">
</div>

<div class="col-md-3 form-group">
  <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_admin_blog'); ?>" name="btnback">BACK</a>
  <button class="btn btn-success" type="submit" name="btnsimpan">SUBMIT</button>
  <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
</div>
</form>