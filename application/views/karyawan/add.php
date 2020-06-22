<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Karyawan</h3>
			</div>
			<?php echo form_open('karyawan/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_shift" class="control-label"><span class="text-danger">*</span>Shift</label>
						<div class="form-group">
							<select name="id_shift" class="form-control">
								<option value="">select shift</option>
								<?php
								foreach ($all_shift as $shift) {
									$selected = ($shift['id_shift'] == $this->input->post('id_shift')) ? ' selected="selected"' : "";

									echo '<option value="' . $shift['id_shift'] . '" ' . $selected . '>' . $shift['keterangan'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_shift'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_perusahaan" class="control-label">Perusahaan</label>
						<div class="form-group">
							<select name="id_perusahaan" class="form-control">
								<option value="">select perusahaan</option>
								<?php
								foreach ($all_perusahaan as $perusahaan) {
									$selected = ($perusahaan['id_perusahaan'] == $this->input->post('id_perusahaan')) ? ' selected="selected"' : "";

									echo '<option value="' . $perusahaan['id_perusahaan'] . '" ' . $selected . '>' . $perusahaan['nama'] . '</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_mesin" class="control-label"><span class="text-danger">*</span>Mesin</label>
						<div class="form-group">
							<select name="id_mesin" class="form-control">
								<option value="">select mesin</option>
								<?php
								foreach ($all_mesin as $mesin) {
									$selected = ($mesin['id_mesin'] == $this->input->post('id_mesin')) ? ' selected="selected"' : "";

									echo '<option value="' . $mesin['id_mesin'] . '" ' . $selected . '>' . $mesin['nama'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_mesin'); ?></span>
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