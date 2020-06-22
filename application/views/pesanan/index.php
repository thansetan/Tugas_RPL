<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pesanan Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('pesanan/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Pesanan</th>
                        <th>Model</th>
                        <th>Jumlah</th>
                        <th>Upah Perpotong</th>
                        <th>Tanggal Diambil</th>
                        <th>Nama</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($pesanan as $p) { ?>
                        <tr>
                            <td><?php echo $p['id_pesanan']; ?></td>
                            <td><?php echo $p['nama_model']; ?></td>
                            <td><?php echo $p['jumlah']; ?></td>
                            <td>Rp. <?php echo $p['upah_perpotong']; ?></td>
                            <td><?php echo $p['tanggal_diambil']; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                            <td>
                                <a href="<?php echo site_url('pesanan/edit/' . $p['id_pesanan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('pesanan/remove/' . $p['id_pesanan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>