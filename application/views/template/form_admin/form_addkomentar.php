<!--Form Tambah Komentar Pada Halaman Admin-->
<form action="<?php base_url('komentar/simpan') ?>">
    <div class="form-group">
      <label for="">Nama : </label>
      <input type="text" name="" id="" class="form-control" placeholder="masukkan nama di sini" aria-describedby="helpId" required="required">
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="" id="" class="form-control" placeholder="masukkan email di sini" aria-describedby="helpId" required="required">
    </div>

    <div class="form-group">
      <label for="">Isi Komentar</label>
      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" required="required">
    </div>

    <div class="form-group">
      <button class="btn btn-secondary" name="btnback" href="<?php echo base_url('main/tampil_admin_komentar')?>">BACK</button>
      <input class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
      <input class="btn btn-danger" type="reset" name="btnreset">RESET</button>
    </div>
</form>