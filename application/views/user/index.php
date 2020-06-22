<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar User</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID User</th>
                        <th>Pemilik</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Actions</th>

                    </tr>
                    <?php foreach ($user as $u) { ?>
                        <tr>
                            <td><?php echo $u['id_user']; ?></td>
                            <td><?php echo $u['nama']; ?></td>
                            <td><?php echo $u['username']; ?></td>
                            <td><?php echo $u['password']; ?></td>
                            <td><?php echo $u['level']; ?></td>
                            <td>
                                <a href="<?php echo site_url('user/edit/' . $u['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('user/remove/' . $u['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>