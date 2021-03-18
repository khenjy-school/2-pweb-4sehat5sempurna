<!--Form Edit Editor Pada Halaman Admin-->
<form action="" method="POST">
    <div class="form-group">
      <label for="id">Id Editor</label>
      <input type="text"
        class="form-control" disabled name="txtidblog" id="id" aria-describedby="helpId" placeholder="masukkan id di sini" value="<?php echo 
        $editor->id_editor ?>">
    </div>

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text"
        class="form-control" name="txtnama" id="nama" aria-describedby="helpId" placeholder="masukkan nama di sini" value="<?php echo 
        $editor->nama ?>" required="required">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email"
        class="form-control" name="txtemail" id="email" aria-describedby="helpId" placeholder="masukkan email di sini" value="<?php echo 
        $editor->email ?>" required="required">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password"
        class="form-control" name="txtpassword" id="password" aria-describedby="helpId" placeholder="masukkan password di sini" value="<?php echo 
        $editor->password ?>" required="required">
    </div>

    <div class="form-group">
      <label for="telp">Telp</label>
      <input type="tel"
        class="form-control" name="txttelp" id="telp" aria-describedby="helpId" placeholder="masukkan telp di sini" pattern="[0-9]{2}[0-9]{3}[0-9]{4}[0-9]{4}" value="<?php echo 
        $editor->telp ?>" required="required">
    </div>

    <div class="form-group">
      <label for="tglgabung">Tgl Gabung</label>
      <input type="date"
        class="form-control" name="txttglgabung" id="tglgabung" aria-describedby="helpId" placeholder="masukkan tanggal gabung di sini" value="<?php echo 
        $editor->tglgabung ?>" required="required">
    </div>

    <div class="form-group">
      <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_admin_editor'); ?>" name="btnback">BACK</a>
      <button class="btn btn-success" type="submit" name="btnsimpan">SUBMIT</button>
      <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
    </div>
</form>