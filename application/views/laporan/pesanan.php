<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Status Pesanan</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('laporan/print_pesanan'); ?>" class="btn btn-danger"> <i class="fa fa-print "></i> Print</a>
                    <a href="<?php echo site_url('laporan/pdf_pesanan'); ?>" class="btn btn-primary"> <i class="fas fa-file-pdf"></i> Export PDF</a>

                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah Pesanan</th>
                        <th>Pesanan Seleai</th>
                        <th>Pesanan Kurang</th>

                    </tr>
                    <?php foreach ($pesanan as $g) { ?>
                        <tr>
                            <td><?php echo $g['nama']; ?></td>
                            <td><?php echo $g['jumlah']; ?></td>
                            <td><?php echo $g['selesai']; ?></td>
                            <td><?php echo $g['kurang']; ?></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>