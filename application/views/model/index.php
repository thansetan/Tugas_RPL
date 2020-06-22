<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Model Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('model/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Model</th>
                        <th>Nama</th>
                        <th>Perusahaan</th>
                        <th>Bahan Baku</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($model as $m) { ?>
                        <tr>
                            <td><?php echo $m['id_model']; ?></td>
                            <td><?php echo $m['nama']; ?></td>
                            <td><?php echo $m['id_perusahaan']; ?></td>
                            <td><?php echo $m['id_bahanbaku']; ?></td>
                            <td>
                                <a href="<?php echo site_url('model/edit/' . $m['id_model']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('model/remove/' . $m['id_model']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>