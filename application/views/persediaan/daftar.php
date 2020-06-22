<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="container">
                <div class="card card-danger" style="border-color: crimson;">
                    <div class="card-header" style="background-color: crimson;">
                        <h3 class="card-title text-center">Daftar Persediaan</h3>
                    </div>
                    <center>
                        <div class="table-responsive-sm" style="align-content: center; width:90%;">
                            <table id="datatableid" class="table table-bordered table-striped display nowrap text-center" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Nama</th>
                                        <th>Tersedia</th>
                                        <!-- <th style="width: 30px;">Do Something</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($persediaan as $p) {  ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $p['nama'] ?></td>
                                            <td><?= $p['sisa'] ?></td>
                                            <!-- <td>
                                                <a href="<?php echo site_url('persediaan/edit/' . $p['id_persediaan']); ?>" class="btn btn-info btn-block"><span class="fa fa-pencil"></span> Edit</a>
                                            </td> -->
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
</div>