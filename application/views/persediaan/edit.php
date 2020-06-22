<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Persediaan Edit</h3>
            </div>
			<?php echo form_open('persediaan/edit/'.$persediaan['id_persediaan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_perusahaan" class="control-label"><span class="text-danger">*</span>Perusahaan</label>
						<div class="form-group">
							<select name="id_perusahaan" class="form-control">
								<option value="">select perusahaan</option>
								<?php 
								foreach($all_perusahaan as $perusahaan)
								{
									$selected = ($perusahaan['id_perusahaan'] == $persediaan['id_perusahaan']) ? ' selected="selected"' : "";

									echo '<option value="'.$perusahaan['id_perusahaan'].'" '.$selected.'>'.$perusahaan['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_perusahaan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_bahanbaku" class="control-label"><span class="text-danger">*</span>Bahan Baku</label>
						<div class="form-group">
							<select name="id_bahanbaku" class="form-control">
								<option value="">select bahan_baku</option>
								<?php 
								foreach($all_bahan_baku as $bahan_baku)
								{
									$selected = ($bahan_baku['id_bahanbaku'] == $persediaan['id_bahanbaku']) ? ' selected="selected"' : "";

									echo '<option value="'.$bahan_baku['id_bahanbaku'].'" '.$selected.'>'.$bahan_baku['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_bahanbaku');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label"><span class="text-danger">*</span>Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $persediaan['jumlah']); ?>" class="form-control" id="jumlah" />
							<span class="text-danger"><?php echo form_error('jumlah');?></span>
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