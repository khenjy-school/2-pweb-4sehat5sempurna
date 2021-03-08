<!--Form Edit Blog Pada Halaman Admin-->
<?php foreach ($blog as $s) { ?>
<form action="<?php base_url('blog/edit') ?>" method="POST">
    <div class="form-group">
      <label for="judul">Id Blog</label>
      <input type="text"
        class="form-control disabled" name="txtidblog" id="id" aria-describedby="helpId" placeholder="masukkan isi di sini" value="<?php echo $s->judul_blog ?>">
    </div>

    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text"
        class="form-control" name="txtjudul" id="judul" aria-describedby="helpId" placeholder="masukkan judul blog di sini" value="<?php echo $s->judul_blog ?>">
    </div>

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text"
        class="form-control" name="txtnama" id="nama" aria-describedby="helpId" placeholder="masukkan nama editor di sini" value="<?php echo $s->nama_editor ?>">
    </div>

    <div class="form-group">
      <label for="isi">Isi</label>
      <input type="text"
        class="form-control" name="txtisi" id="isi" aria-describedby="helpId" placeholder="masukkan isi di sini" value="<?php echo $s->isi_blog ?>">
    </div>

    <div class="form-group">
      <button class="btn btn-secondary" name="btnback" href="<?php echo base_url('main/tampil_admin_blog')?>">BACK</button>
      <input class="btn btn-success" type="submit" name="btnsimpan">SIMPAN</button>
      <input class="btn btn-danger" type="reset" name="btnreset">RESET</button>
    </div>
</form>
<?php } ?>