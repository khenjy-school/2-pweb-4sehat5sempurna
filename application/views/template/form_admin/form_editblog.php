<!--Form Edit Blog Pada Halaman Admin-->
<form action="<?php base_url('blog/edit') ?>" method="POST">
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text"
        class="form-control" name="txtjudul" id="judul" aria-describedby="helpId" placeholder="masukkan judul di sini">
    </div>

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text"
        class="form-control" name="txtnama" id="nama" aria-describedby="helpId" placeholder="masukkan nama di sini">
    </div>

    <div class="form-group">
      <label for="isi">Isi</label>
      <input type="text"
        class="form-control" name="txtisi" id="isi" aria-describedby="helpId" placeholder="masukkan isi di sini">
    </div>

    <div class="form-group">
      <button class="btn btn-secondary" name="btnback" href="<?php echo base_url('main/tampil_admin_komentar')?>">BACK</button>
      <input class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
      <input class="btn btn-danger" type="reset" name="btnreset">RESET</button>
    </div>
</form>