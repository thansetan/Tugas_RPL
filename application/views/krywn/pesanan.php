<div class="row">
    <div class="col md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pesanan Listing</h3>

            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Pesanan</th>
                        <th>Model</th>
                        <th>Jumlah</th>
                        <th>Tanggal Diambil</th>
                        <th>Nama</th>
                        =
                    </tr>
                    <?php foreach ($pesanan as $p) { ?>
                        <tr>
                            <td><?php echo $p['id_pesanan']; ?></td>
                            <td><?php echo $p['nama_model']; ?></td>
                            <td><?php echo $p['jumlah']; ?></td>
                            <td><?php echo $p['tanggal_diambil']; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>