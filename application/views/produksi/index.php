<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Produksi Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('produksi/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Produksi</th>
                        <th>Pesanan</th>
                        <th>Nama Karyawan</th>
                        <th>Nama Produksi</th>
                        <th>Potong Terselesaikan</th>
                        <th>Tanggal Produksi</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($produksi as $p) { ?>
                        <tr>
                            <td><?php echo $p['id_produksi']; ?></td>
                            <td><?php echo $p['id_pesanan']; ?></td>
                            <td><?php echo $p['id_karyawan']; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                            <td><?php echo $p['potong_terselesaikan']; ?></td>
                            <td><?php echo $p['tanggal_produksi']; ?></td>
                            <td><?php echo $p['ket']; ?></td>
                            <td>
                                <a href="<?php echo site_url('produksi/edit/' . $p['id_produksi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('produksi/remove/' . $p['id_produksi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>