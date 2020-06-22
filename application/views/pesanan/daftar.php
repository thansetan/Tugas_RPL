<div class="row">
    <div class="col md-12">
        <div class="container">
            <div class="card card-danger" style="border-color: crimson;">
                <div class="card-header" style="background-color: crimson;">
                    <h3 class="card-title text-center">Daftar Pesanan Tersedia</h3>
                </div>
                <center>
                    <div class="table-responsive-sm" style="align-content: center; width:90%;">
                        <table id="datatableid" class="table table-bordered table-striped display nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Nama</th>
                                    <th>Model</th>
                                    <th>Upah Perpotong</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Pesanan Selesai</th>
                                    <th>Bahan Baku</th>
                                    <th>Bahan Baku /Pakaian</th>
                                    <th>Tanggal Diambil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pesanan as $p) {  ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['nama'] ?></td>
                                        <td><?= $p['nama_model'] ?></td>
                                        <td>Rp. <?= $p['upah_perpotong'] ?></td>
                                        <td><?= $p['jumlah'] ?></td>
                                        <td><?= $p['selesai'] ?></td>
                                        <td><?= $p['nama_bb'] ?></td>
                                        <td><?= $p['bb'] ?></td>
                                        <td><?= $p['tanggal_diambil'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>