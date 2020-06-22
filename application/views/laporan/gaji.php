<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Gaji</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('laporan/print_gaji'); ?>" class="btn btn-danger"> <i class="fa fa-print "></i> Print</a>
                    <a href="<?php echo site_url('laporan/pdf_gaji'); ?>" class="btn btn-primary"> <i class="fas fa-file-pdf"></i> Export PDF</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Potongan Diselesaikan</th>
                        <th>Gaji</th>

                    </tr>
                    <?php foreach ($gaji as $g) { ?>
                        <tr>
                            <td><?php echo $g['nama']; ?></td>
                            <td><?php echo $g['selesai']; ?></td>
                            <td>Rp. <?php echo $g['gaji']; ?></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>