<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id Staff</th>
			<th>Nama (Email)</th>
            <th>Password</th>
            <th>Telp</th>
			<th>Kategori</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($staff as $s) { ?>
        <tr>
            <td width="10%">
                <?php echo $s->id ?>
            </td>
            <td width="20%">
                <?php echo $s->nama ?> (<?php echo $s->email ?>)
            </td>
            <td width="25%">
                <?php echo $s->password ?>
            </td>
            <td width="10%">
                <?php echo $s->tglkomen ?>
            </td>
            <td width="20%">
                <a class="btn btn-warning text-white" href="<?php echo site_url('komentar/edit/'.$s->id_komentar) ?>">Edit</a>
                
                <a class="btn btn-danger text-white" href="<?php echo site_url('komentar/delete/'.$s->id_komentar) ?>">Hapus</a>
            </td>
	    </tr>
	    <?php } ?>

	</tbody>
</table>