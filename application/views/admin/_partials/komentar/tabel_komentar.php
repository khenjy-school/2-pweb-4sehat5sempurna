<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
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
            <td class="" width="10%">
                <?php echo $s->id_komentar ?>
            </td>
            <td class="text-break" width="15%">
                <?php echo $s->judul_blog ?>
            </td>
            <td class="text-break" width="20%">
                <?php echo $s->nama ?> (<?php echo $s->email ?>)
            </td>
            <td class="text-break" width="25%">
                <?php echo $s->isi ?>
            </td>
            <td class="" width="10%">
                <?php echo $s->tglkomen ?>
            </td>
            <td class="" width="20%">
                <a class="btn btn-warning text-white my-2 col-lg-auto" href="<?php echo site_url('komentar/edit/'.$s->id_komentar) ?>">Edit</a>
                
                <a class="btn btn-danger text-white my-2 col-lg-auto" href="<?php echo site_url('komentar/delete/'.$s->id_komentar) ?>">Hapus</a>
            </td>
	    </tr>
	    <?php } ?>

	</tbody>
</table>