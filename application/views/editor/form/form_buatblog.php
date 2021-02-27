<?php defined('BASEPATH') OR exit('No direct script access allowed'):?>
<div class="hlm_single" id="latar">
	<h2>Tambahkan Artikel</h2>h2><hr/>
	<div style="color:red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open_multipart('artikel/tbh');?>
	<input type="text" name="title" placeholder="Judul Artikel" required/><br/>
	<textarea id="ckeditor" name="tek" required></textarea><br/>
	<select name="category">
		<option value="">Pilih Kategori</option>
		<option value="">Makanan Pokok</option>
		<option value="">Lauk Pauk</option>
		<option value="">Sayur</option>
		<option value="">Buah-Buahan</option>
		<option value="">Susu</option>
	</select><br><br>
	<input type="file" name="fileupload" required><br>
	<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>">
	<button class="button_utm">Publish</button>
	<<?php echo form_close(); ?>
</div>
<script src="<?php echo base_url()." file/jquery/j></script>