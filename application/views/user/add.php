<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah User</h3>
			</div>
			<?php echo form_open('user/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_produksi" class="control-label"><span class="text-danger">*</span>Pemilik</label>
						<div class="form-group">
							<select name="pemilik" class="form-control">
								<option value="">pilih pemilik</option>
								<?php
								foreach ($all_karyawan as $karyawan) {
									$selected = ($karyawan['id_karyawan'] == $this->input->post('id_karyawan')) ? ' selected="selected"' : "";
									echo '<option value="' . $karyawan['id_karyawan'] . '" ' . $selected . '>' . $karyawan['nama'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('pemilik'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="hidden" name="level" value="<?php echo $this->input->post('level'); ?>karyawan" class="form-control" id="level" />
							<span class="text-danger"><?php echo form_error('level'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<textarea name="nama" class="form-control" id="nama"><?php echo $this->input->post('nama'); ?></textarea>
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