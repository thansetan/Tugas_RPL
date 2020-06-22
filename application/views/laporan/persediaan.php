<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Sisa Persediaan</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('laporan/print_persediaan'); ?>" class="btn btn-danger"> <i class="fa fa-print "></i> Print</a>
                    <a href="<?php echo site_url('laporan/pdf_persediaan'); ?>" class="btn btn-primary"> <i class="fas fa-file-pdf"></i> Export PDF</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Persediaan Awal</th>
                        <th>Digunakan</th>
                        <th>Sisa</th>

                    </tr>
                    <?php foreach ($persediaan as $g) { ?>
                        <tr>
                            <td><?php echo $g['nama']; ?></td>
                            <td><?php echo $g['tersedia']; ?></td>
                            <td><?php echo $g['digunakan']; ?></td>
                            <td><?php echo $g['sisa']; ?></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>