<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id Komentar</th>
			<th>Judul Blog</th>
            <th>Nama (Email)</th>
            <th>Isi</th>
            <th>Tgl Komentar</th>
			<th>Fungsi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($komentar as $s) { ?>
        <tr>
            <td width="10%">
                <?php echo $s->id_komentar ?>
            </td>
            <td width="15%">
                <?php echo $s->judul_blog ?>
            </td>
            <td width="20%">
                <?php echo $s->nama ?> (<?php echo $s->email ?>)
            </td>
            <td width="25%">
                <?php echo $s->isi ?>
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