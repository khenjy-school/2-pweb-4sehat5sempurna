<!--Form Tambah Admin Pada Halaman Signup-->
<form action="" method="POST">
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
      <a class="btn btn-secondary" href="<?php echo site_url('main/tampil_home'); ?>" name="btnback">BACK</a>
      <button class="btn btn-primary" type="submit" name="btnlogin">LOGIN</button>
    </div>

    <div class="form-group">
      <span>Belum punya akun?</span>
      <a  href="<?php echo site_url('main/signup'); ?>" name="btntampilsignup">Sign Up Sekarang</a>
    </div>
</form>