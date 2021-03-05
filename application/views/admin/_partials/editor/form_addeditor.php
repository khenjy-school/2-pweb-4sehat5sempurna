<!--Form Tambah Editor Pada Halaman Admin-->
<form action="<?php base_url('editor/simpan') ?>">
    <div class="form-group">
      <label for="">Nama : </label>
      <input type="text" name="" id="" class="form-control" placeholder="masukkan nama di sini" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="" id="" class="form-control" placeholder="masukkan email di sini" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="">Password</label>
      <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <<div class="form-group">
      <input class="btn btn-success" type="submit" name="btnsimpan" value="Simpan">
    </div>
</form>