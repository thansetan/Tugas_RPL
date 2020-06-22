<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Persediaan Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('persediaan/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Persediaan</th>
                        <th>Perusahaan</th>
                        <th>Bahanbaku</th>
                        <th>Jumlah</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($persediaan as $p) { ?>
                        <tr>
                            <td><?php echo $p['id_persediaan']; ?></td>
                            <td><?php echo $p['nama_perusahaan']; ?></td>
                            <td><?php echo $p['nama_bahanbaku']; ?></td>
                            <td><?php echo $p['jumlah']; ?></td>
                            <td>
                                <a href="<?php echo site_url('persediaan/edit/' . $p['id_persediaan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('persediaan/remove/' . $p['id_persediaan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>