<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">User Edit</h3>
			</div>
			<?php echo form_open('user/edit/' . $user['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pemilik" class="control-label"><span class="text-danger">*</span>Pemilik</label>
						<div class="form-group">
							<select name="pemilik" class="form-control">
								<option value="">pilih pemilik</option>
								<?php
								foreach ($all_karyawan as $karyawan) {
									$selected = ($karyawan['id_karyawan'] == $user['pemilik']) ? ' selected="selected"' : "";
									echo '<option value="' . $karyawan['id_karyawan'] . '" ' . $selected . '>' . $karyawan['nama'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('pemilik'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<textarea name="nama" class="form-control" id="nama"><?php echo ($this->input->post('nama') ? $this->input->post('nama') : $user['nama']); ?></textarea>
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