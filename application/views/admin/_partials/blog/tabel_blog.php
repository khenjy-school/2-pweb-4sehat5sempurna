<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id Blog</th>
            <th>Judul Blog</th>
            <th>Nama Editor</th>
            <th>Isi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($blog as $blog): ?>
        <tr>
            <td width="150">
                <?php echo $id_blog->id_blog ?>
            </td>
            <td>
                <?php echo $judul->judul_blog ?>
            </td>
            <td width="250">
                <a href="<?php echo site_url('admin/blog/edit/'.$id_blog->id_blog) ?>"
                    class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo site_url('admin/blog/delete/'.$product->product_id) ?>')"
                                                href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
	    </tr>
	    <?php endforeach; ?>

	</tbody>
</table>