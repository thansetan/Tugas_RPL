<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Karyawan</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('karyawan/add'); ?>" class="btn btn-success btn-sm">Tambah</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID Karyawan</th>
                        <th>Shift</th>
                        <th>Perusahaan</th>
                        <th>Mesin</th>
                        <th>Nama</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($karyawan as $k) { ?>
                        <tr>
                            <td><?php echo $k['id_karyawan']; ?></td>
                            <td><?php echo $k['id_shift']; ?></td>
                            <td><?php echo $k['id_perusahaan']; ?></td>
                            <td><?php echo $k['id_mesin']; ?></td>
                            <td><?php echo $k['nama']; ?></td>
                            <td>
                                <a href="<?php echo site_url('karyawan/edit/' . $k['id_karyawan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('karyawan/remove/' . $k['id_karyawan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>