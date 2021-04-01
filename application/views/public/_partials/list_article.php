<div class="row">
  <?php foreach ($blog as $s) { ?>
    <div class="col-md-auto my-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h2><?php echo $s->judul_blog ?></h2>
              <span><?php echo $s->nama_editor ?></span>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

