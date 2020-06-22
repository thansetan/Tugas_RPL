<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mesin Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('mesin/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Mesin</th>
                        <th>Perusahaan</th>
                        <th>Nama</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($mesin as $m) { ?>
                        <tr>
                            <td><?php echo $m['id_mesin']; ?></td>
                            <td><?php echo $m['id_perusahaan']; ?></td>
                            <td><?php echo $m['nama']; ?></td>
                            <td>
                                <a href="<?php echo site_url('mesin/edit/' . $m['id_mesin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('mesin/remove/' . $m['id_mesin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>