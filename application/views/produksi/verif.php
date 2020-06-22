<div class="row">
    <div class="col-md-12">
        <div class="box text-center">
            <div class="box-header">
                <h3 class="box-title">Daftar Produksi Belum Terverifikasi</h3>
                <div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>No. </th>
                        <th>Pesanan</th>
                        <th>Nama Karyawan</th>
                        <th>Kode Produksi</th>
                        <th>Potong terselesaikan</th>
                        <th>Upah didapat</th>
                        <th>Tanggal produksi</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($produksi as $p) {  ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?php echo $p['id_pesanan']; ?></td>
                            <td><?php echo $p['id_karyawan']; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                            <td><?php echo $p['potong_terselesaikan']; ?></td>
                            <td>Rp. <?php echo $p['upah']; ?></td>
                            <td><?php echo $p['tanggal_produksi']; ?></td>
                            <td>
                                <a class="btn btn-danger btn-xs" style="color: black;"><?php echo $p['ket']; ?></a>
                            </td>
                            <td>
                                <a href="<?php echo site_url('produksi/verif_ok/' . $p['id_produksi']); ?>" class="btn btn-success btn-xs"><span class="fa fa-check"></span> Verif</a>
                                <a href="<?php echo site_url('produksi/tolak/' . $p['id_produksi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-times"></span> Tolak</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>