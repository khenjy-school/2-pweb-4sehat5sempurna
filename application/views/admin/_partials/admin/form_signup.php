<!--Form Tambah Admin Pada Halaman Signup-->
<form action="<?= site_url('admin/signup'); ?>" method="POST">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" name="txteditor" id="nama" aria-describedby="helpId" placeholder="masukkan nama di sini">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="txtemail" id="email" placeholder="masukkan email di sini" aria-describedby="helpId" required="required">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password"
        class="form-control" name="txtpassword" id="password" aria-describedby="helpId" placeholder="masukkan password di sini" required="required">
    </div>

    <div class="form-group">
      <label for="confirmpassword">Confirm Password</label>
      <input type="password"
        class="form-control" name="txtconfirmpassword" id="confirmpassword" aria-describedby="helpId" placeholder="confirm password di sini" required="required">
    </div>

    <div class="form-group">
      <label for="telp">Telp</label>
      <input type="tel"
        class="form-control" name="txttelp" id="telp" aria-describedby="helpId" placeholder="masukkan telp di sini" pattern="[0-9]{2}[0-9]{3}[0-9]{4}[0-9]{4}" required="required">
    </div>

    <div class="form-group">
      <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_admin'); ?>" name="btnback">BACK</a>
      <button class="btn btn-danger" type="reset" name="btnreset">RESET</button>
      <button class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
    </div>
</form>