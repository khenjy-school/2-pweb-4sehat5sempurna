<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id Editor</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Telp</th>
            <th>Tgl Gabung</th>
            <th>Fungsi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($editor as $s) { ?>
        <tr>
            <td class="text-break" width="10%">
                <?php echo $s->id_editor ?>
            </td>
            <td class="text-break" width="15%">
                <?php echo $s->nama ?>
            </td>
            <td class="text-break" width="20%">
                <?php echo $s->email ?>
            </td>
            <td class="text-break" width="15%">
                <input class="form-control" type="password" value="<?php echo $s->password ?>" disabled="disabled">
            </td>
            <td class="text-break" width="15%">
                <?php echo $s->telp ?>
            </td>
            <td class="text-break" width="10%">
                <?php echo $s->tglgabung ?>
            </td>
            <td class="text-break" width="15%">
                <a class="btn btn-warning text-white" href="<?php echo site_url('editor/edit/'.$s->id_editor) ?>">Edit</a>
                
                <a class="btn btn-danger text-white" href="<?php echo site_url('editor/delete/'.$s->id_editor) ?>">Hapus</a>
            </td>
	    </tr>
	    <?php } ?>

	</tbody>
</table>