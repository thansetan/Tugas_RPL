<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bahan Baku Add</h3>
            </div>
            <?php echo form_open('bahan_baku/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="jumlah" class="control-label"><span class="text-danger">*</span>Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
							<span class="text-danger"><?php echo form_error('jumlah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<textarea name="nama" class="form-control" id="nama"><?php echo $this->input->post('nama'); ?></textarea>
							<span class="text-danger"><?php echo form_error('nama');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>