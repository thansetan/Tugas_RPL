<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Perusahaan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('perusahaan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Perusahaan</th>
						<th>Nama</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($perusahaan as $p){ ?>
                    <tr>
						<td><?php echo $p['id_perusahaan']; ?></td>
						<td><?php echo $p['nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('perusahaan/edit/'.$p['id_perusahaan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('perusahaan/remove/'.$p['id_perusahaan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
