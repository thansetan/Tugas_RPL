<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bahan Baku Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bahan_baku/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Bahanbaku</th>
						<th>Jumlah</th>
						<th>Nama</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bahan_baku as $b){ ?>
                    <tr>
						<td><?php echo $b['id_bahanbaku']; ?></td>
						<td><?php echo $b['jumlah']; ?></td>
						<td><?php echo $b['nama']; ?></td>
						<td>
                            <a href="<?php echo site_url('bahan_baku/edit/'.$b['id_bahanbaku']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bahan_baku/remove/'.$b['id_bahanbaku']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
