<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Shift Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('shift/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Shift</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($shift as $s){ ?>
                    <tr>
						<td><?php echo $s['id_shift']; ?></td>
						<td><?php echo $s['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('shift/edit/'.$s['id_shift']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('shift/remove/'.$s['id_shift']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
