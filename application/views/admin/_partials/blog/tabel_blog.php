<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
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
            <td width="150">
                <?php echo $s->id_blog ?>
            </td>
            <td width="150">
                <?php echo $s->judul_blog ?>
            </td>
            <td width="150">
                <?php echo $s->nama_editor ?>
            </td>
            <td width="150">
                <?php echo $s->isi_blog ?>
            </td>
            <td width="250">
                <a href=".base_url('blog/tampil_editblog'.$s['id_blog'])."
                    class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('.base_url('blog/delete'.$s['id_blog']).')"
                                                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
	    </tr>
	    <?php } ?>

	</tbody>
</table>