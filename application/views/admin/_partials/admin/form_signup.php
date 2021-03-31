<!--Form Tambah Admin Pada Halaman Signup-->
<form action="" method="POST">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" 
      class="form-control" name="txtnama" id="nama" aria-describedby="helpId" placeholder="masukkan nama di sini">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" 
      class="form-control" name="txtemail" id="email" placeholder="masukkan email di sini" aria-describedby="helpId" required="required">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password"
        class="form-control" name="txtpassword" id="password" aria-describedby="helpId" placeholder="masukkan password di sini" required="required">
    </div>

    <div class="form-group">
      <label for="telp">Telp</label>
      <input type="tel"
        class="form-control" name="txttelp" id="telp" aria-describedby="helpId" placeholder="masukkan telp di sini" pattern="[0-9]{2}[0-9]{3}[0-9]{4}[0-9]{4}" required="required">
    </div>

    <div class="form-group">
      <button class="btn btn-danger w-25" type="reset" name="btnreset">RESET</button>
      <button class="btn btn-success w-25" type="submit" name="btntambah">SIMPAN</button>
    </div>

    <div class="form-group">
      <span>Sudah punya akun?</span>
      <a  href="<?php echo site_url('main/login'); ?>" name="btntampillogin">Login Sekarang</a>
    </div>
</form>