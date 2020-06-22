<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Pesanan Edit</h3>
			</div>
			<?php echo form_open('pesanan/edit/' . $pesanan['id_pesanan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_model" class="control-label"><span class="text-danger">*</span>Model</label>
						<div class="form-group">
							<select name="id_model" class="form-control">
								<option value="">select model</option>
								<?php
								foreach ($all_model as $model) {
									$selected = ($model['id_model'] == $pesanan['id_model']) ? ' selected="selected"' : "";

									echo '<option value="' . $model['id_model'] . '" ' . $selected . '>' . $model['nama'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_model'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label"><span class="text-danger">*</span>Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $pesanan['jumlah']); ?>" class="form-control" id="jumlah" />
							<span class="text-danger"><?php echo form_error('jumlah'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="upah_perpotong" class="control-label"><span class="text-danger">*</span>Upah Perpotong</label>
						<div class="form-group">
							<input type="text" name="upah_perpotong" value="<?php echo ($this->input->post('upah_perpotong') ? $this->input->post('upah_perpotong') : $pesanan['upah_perpotong']); ?>" class="form-control" id="upah_perpotong" />
							<span class="text-danger"><?php echo form_error('upah_perpotong'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_diambil" class="control-label"><span class="text-danger">*</span>Tanggal Diambil</label>
						<div class="form-group">
							<input type="date" name="tanggal_diambil" value="<?php echo ($this->input->post('tanggal_diambil') ? $this->input->post('tanggal_diambil') : $pesanan['tanggal_diambil']); ?>" class="form-control" id="tanggal_diambil" />
							<span class="text-danger"><?php echo form_error('tanggal_diambil'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<textarea name="nama" class="form-control" id="nama"><?php echo ($this->input->post('nama') ? $this->input->post('nama') : $pesanan['nama']); ?></textarea>
							<span class="text-danger"><?php echo form_error('nama'); ?></span>
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