<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id Blog</th>
            <th>Judul Blog</th>
            <th>Nama Editor</th>
            <th>Isi</th>
            <th>Fungsi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($blog as $s) { ?>
        <tr>
            <td width="15%">
                <?php echo $s->id_blog ?>
            </td>
            <td width="20%">
                <?php echo $s->judul_blog ?>
            </td>
            <td width="20%">
                <?php echo $s->nama_editor ?>
            </td>
            <td width="25%">
                <?php echo $s->isi_blog ?>
            </td>
            <td width="20%">
                <a class="btn btn-warning text-white" href="<?php echo site_url('blog/edit/'.$s->id_blog) ?>">Edit</a>
                
                <a class="btn btn-danger text-white" href="<?php echo site_url('blog/delete/'.$s->id_blog) ?>">Hapus</a>
            </td>
	    </tr>
	    <?php } ?>

	</tbody>
</table>