<!--Form Tambah Komentar Pada Halaman Admin-->
<form action="" method="POST">
    <div class="col-md-3 form-group">
      <label for="judulblog">Id Komentar : </label>
      <input type="text" disabled="disabled"
      class="form-control" name="txtjudulblog" id="judulblog" placeholder="masukkan id komentar di sini" aria-describedby="helpId" required="required" value="<?php echo $komentar->id_komentar ?>">
    </div>
    <div class="col-md-3 form-group">
      <label for="judulblog">Judul Blog : </label>
      <select class="form-control" id="judulblog" name="txtjudulblog">
          <option selected><?php echo $komentar->judul_blog ?></option>
          <?php foreach ($blog as $s) { ?>
          <option><?php echo $s->judul_blog ?></option>
          <?php } ?>
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="nama">Nama</label>
      <input type="text" 
      class="form-control" name="txtnama" id="nama" placeholder="masukkan nama di sini" aria-describedby="helpId" required="required" value="<?php echo $komentar->nama ?>">
    </div>
	
	<div class="col-md-4 form-group">
      <label for="email">email</label>
      <input type="email" 
      class="form-control" name="txtemail" id="email" placeholder="masukkan email di sini" aria-describedby="helpId" required="required" value="<?php echo $komentar->email ?>">
    </div>

    <div class="col-md-4 form-group">
      <label for="komentar">Isi Komentar</label>
      <input type="text" 
      class="form-control" name="txtkomentar" id="komentar" placeholder="masukkan komentar di sini" aria-describedby="helpId" required="required" value="<?php echo $komentar->isi ?>">
    </div>
	
	<div class="col-md-4 form-group">
      <label for="tglkomentar">Tanggal Isi</label>
      <input type="date" disabled="disabled"
      class="form-control" name="txttglkomentar" id="tglkomentar" placeholder="masukkan tanggal komentar di sini" aria-describedby="helpId" required="required" value="<?php echo $komentar->tglkomen ?>">
    </div>

    <div class="col-md-3 form-group">
      <a class="btn btn-secondary" name="btnback" href="<?php echo site_url('main/tampil_admin_komentar'); ?>" name="btnback">BACK</a>
      <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
	  <button class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
      
    </div>
</form>