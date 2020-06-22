<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Produksi Add</h3>
			</div>
			<?php echo form_open('produksi/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_pesanan" class="control-label"><span class="text-danger">*</span>Pesanan</label>
						<div class="form-group">
							<select name="id_pesanan" class="form-control">
								<option value="">select pesanan</option>
								<?php
								foreach ($all_pesanan as $pesanan) {
									$selected = ($pesanan['id_pesanan'] == $this->input->post('id_pesanan')) ? ' selected="selected"' : "";

									echo '<option value="' . $pesanan['id_pesanan'] . '" ' . $selected . '>' . $pesanan['nama'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_pesanan'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_karyawan" class="control-label"><span class="text-danger">*</span>Karyawan</label>
						<div class="form-group">
							<select name="id_karyawan" class="form-control">
								<option value="">select karyawan</option>
								<?php
								foreach ($all_karyawan as $karyawan) {
									$selected = ($karyawan['id_karyawan'] == $this->input->post('id_karyawan')) ? ' selected="selected"' : "";

									echo '<option value="' . $karyawan['id_karyawan'] . '" ' . $selected . '>' . $karyawan['nama'] . '</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_karyawan'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="potong_terselesaikan" class="control-label"><span class="text-danger">*</span>Potong Terselesaikan</label>
						<div class="form-group">
							<input type="text" name="potong_terselesaikan" value="<?php echo $this->input->post('potong_terselesaikan'); ?>" class="form-control" id="potong_terselesaikan" />
							<span class="text-danger"><?php echo form_error('potong_terselesaikan'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_produksi" class="control-label"><span class="text-danger">*</span>Tanggal Produksi</label>
						<div class="form-group">
							<input type="date" name="tanggal_produksi" value="<?php echo $this->input->post('tanggal_produksi'); ?>" class="form-control" id="tanggal_produksi" />
							<span class="text-danger"><?php echo form_error('tanggal_produksi'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ket" class="control-label"><span class="text-danger">*</span>Keterangan</label>
						<div class="form-group">
							<input type="text" name="ket" value="<?php echo $this->input->post('ket'); ?>" class="form-control" id="ket" />
							<span class="text-danger"><?php echo form_error('ket'); ?></span>
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