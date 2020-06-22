<?php
if ($_SESSION["status"] == "pengembangan") {
?>
	<style>
		.link-login {
			font-size: 1.2em !important;
		}

		.bg-login-image {
			background: url("https://i.pinimg.com/originals/65/99/ad/6599add1e53afc39c73ab029b7a99e27.png") no-repeat center center;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.loginpanel {
			border: 1px solid #ccc;
		}

		.loginform {
			padding: 50px 40px;
		}

		label {
			font-weight: bold;
			font-size: 1.3em;
		}

		.container {
			margin-top: 0px;
			padding: 30px;
		}
	</style>
	<div class="container">
		<div class="row loginpanel">
			<div class="col-12 col-sm-5 loginform text-center">
				<div class="alert alert-danger">
					<b>MASUKKAN DATA PESANAN</b>
				</div>
				<?php echo form_open('pesanan/add'); ?>
				<div class="card-body">
					<div class="form-group">
						<label for="id_model" class="control-label"><span class="text-danger">*</span>Model</label>
						<select name="id_model" class="form-control">
							<option value="">select model</option>
							<?php
							foreach ($all_model as $model) {
								$selected = ($model['id_model'] == $this->input->post('id_model')) ? ' selected="selected"' : "";

								echo '<option value="' . $model['id_model'] . '" ' . $selected . '>' . $model['nama'] . '</option>';
							}
							?>
						</select>
						<span class="text-danger"><?php echo form_error('id_model'); ?></span>
					</div>
					<div class="form-group">
						<label for="jumlah" class="control-label"><span class="text-danger">*</span>Jumlah Pesanan</label>
						<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
						<span class="text-danger"><?php echo form_error('jumlah'); ?></span>
					</div>
					<div class="form-group">
						<label for="upah_perpotong" class="control-label"><span class="text-danger">*</span>Upah Perpotong</label>
						<input type="text" name="upah_perpotong" value="<?php echo $this->input->post('upah_perpotong'); ?>" class="form-control" id="upah_perpotong" />
						<span class="text-danger"><?php echo form_error('upah_perpotong'); ?></span>
					</div>
					<div class="form-group">
						<label for="tanggal_diambil" class="control-label"><span class="text-danger">*</span>Tanggal Diambil</label>
						<input type="date" name="tanggal_diambil" value="<?php echo $this->input->post('tanggal_diambil'); ?>" class="form-control" id="tanggal_diambil" />
						<span class="text-danger"><?php echo form_error('tanggal_diambil'); ?></span>
					</div>
					<div class="form-group">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<textarea name="nama" class="form-control" id="nama"><?php echo $this->input->post('nama'); ?></textarea>
						<span class="text-danger"><?php echo form_error('nama'); ?></span>
					</div>
					<!-- <input type="hidden" name="ket" value="<?php echo $this->input->post('ket'); ?>BELUM TERVERIFIKASI" class="form-control" id="tanggal_produksi" /> -->
					<button type="submit" class="btn btn-info btn-block"> Simpan </button>
				</div>
				<?php echo form_close(); ?>
			</div>
			<div class="col-12 col-sm-7 bg-login-image">

			</div>
			<!--/col-->
		</div>
		<!--/row-->
	</div>
<?php } ?>

<?php
if ($_SESSION["status"] == "manager") {
?>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Pesanan Add</h3>
				</div>
				<?php echo form_open('pesanan/add'); ?>
				<div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="id_model" class="control-label"><span class="text-danger">*</span>Model</label>
							<div class="form-group">
								<select name="id_model" class="form-control">
									<option value="">select model</option>
									<?php
									foreach ($all_model as $model) {
										$selected = ($model['id_model'] == $this->input->post('id_model')) ? ' selected="selected"' : "";

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
								<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" class="form-control" id="jumlah" />
								<span class="text-danger"><?php echo form_error('jumlah'); ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="upah_perpotong" class="control-label"><span class="text-danger">*</span>Upah Perpotong</label>
							<div class="form-group">
								<input type="text" name="upah_perpotong" value="<?php echo $this->input->post('upah_perpotong'); ?>" class="form-control" id="upah_perpotong" />
								<span class="text-danger"><?php echo form_error('upah_perpotong'); ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="tanggal_diambil" class="control-label"><span class="text-danger">*</span>Tanggal Diambil</label>
							<div class="form-group">
								<input type="date" name="tanggal_diambil" value="<?php echo $this->input->post('tanggal_diambil'); ?>" class="form-control" id="tanggal_diambil" />
								<span class="text-danger"><?php echo form_error('tanggal_diambil'); ?></span>
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
<?php } ?>