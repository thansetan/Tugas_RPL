<div class="container">
    <div class="row">
        <div class="col-md-4">
            <br>
            <div class="card card-warning" style="border-color: crimson;">
                <div class="card-heading" style="background-color:crimson">
                    <h3 class="text-center">Masukkan Data</h3>
                </div>
                <?php echo form_open('produksi');
                $uwu = uniqid(true);
                $nama = $uwu . "prod"; ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pesanan" class="control-label"><span class="text-danger">*</span>Pesanan</label>
                        <select name="id_pesanan" class="form-control">
                            <option value="">pilih pesanan</option>
                            <?php
                            foreach ($all_pesanan as $pesanan) {
                                $selected = ($pesanan['id_pesanan'] == $this->input->post('id_pesanan')) ? ' selected="selected"' : "";

                                echo '<option value="' . $pesanan['id_pesanan'] . '" ' . $selected . '>' . $pesanan['nama'] . '</option>';
                            }
                            ?>
                        </select>
                        <span class="text-danger"><?php echo form_error('id_pesanan'); ?></span>
                    </div>
                    <input type="hidden" name="id_karyawan" value="<?php echo $this->input->post('id_karyawan'); ?><?= ucfirst($_SESSION["pemilik"]) ?>" class="form-control" id="id_karyawan" />
                    <input type="hidden" name="nama" value="<?php echo $this->input->post('nama'); ?><?= $nama ?>" class="form-control" id="nama" />
                    <div class="form-group">
                        <label for="potong_terselesaikan" class="control-label"><span class="text-danger">*</span>Potong Terselesaikan</label>
                        <input type="text" name="potong_terselesaikan" value="<?php echo $this->input->post('potong_terselesaikan'); ?>" class="form-control" id="potong_terselesaikan" />
                        <span class="text-danger"><?php echo form_error('potong_terselesaikan'); ?></span>
                    </div>
                    <input type="hidden" name="tanggal_produksi" value="<?php echo $this->input->post('tanggal_produksi'); ?><?= date('Y-m-d') ?>" class="form-control" id="tanggal_produksi" />
                    <input type="hidden" name="ket" value="<?php echo $this->input->post('ket'); ?>BELUM TERVERIFIKASI" class="form-control" id="tanggal_produksi" />
                    <button type="submit" class="btn btn-info btn-block"> Simpan </button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class=" col-md-8">
            <br>
            <div class="card card-warning" style="border-color: crimson;">
                <div class="card-header " style="background-color: crimson;">
                    <h3 class="box-title text-center">Daftar Produksi Belum Terverifikasi</h3>
                </div>
                <center>
                    <div class="table-responsive-sm" style="align-content: center; width:80%;">
                        <table id="datatableid" class="table table-bordered table-striped display nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Pesanan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Kode Produksi</th>
                                    <th>Potong terselesaikan</th>
                                    <th>Upah didapat</th>
                                    <th>Tanggal produksi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" col-md-12">
            <br>
            <div class="card card-warning" style="border-color: crimson;">
                <div class="card-header " style="background-color: crimson;">
                    <h3 class="box-title text-center">Daftar Produksi Terverifikasi</h3>
                </div>
                <center>
                    <div class="table-responsive-sm" style="align-content: center; width:80%;">
                        <table id="datatableid1" class="table table-bordered table-striped display nowrap text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Pesanan</th>
                                    <th>Nama Karyawan</th>
                                    <th>Kode Produksi</th>
                                    <th>Potong terselesaikan</th>
                                    <th>Upah didapat</th>
                                    <th>Tanggal produksi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($produksi1 as $p) {  ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?php echo $p['id_pesanan']; ?></td>
                                        <td><?php echo $p['id_karyawan']; ?></td>
                                        <td><?php echo $p['nama']; ?></td>
                                        <td><?php echo $p['potong_terselesaikan']; ?></td>
                                        <td>Rp. <?php echo $p['upah']; ?></td>
                                        <td><?php echo $p['tanggal_produksi']; ?></td>
                                        <td>
                                            <a class="btn btn-success btn-xs" style="color: black;"><?php echo $p['ket']; ?></a>
                                        </td>
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