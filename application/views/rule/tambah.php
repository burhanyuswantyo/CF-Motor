<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-7 align-self-center">
				<h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<form class="mt-4" action="<?= base_url('rule/insert') ?>" method="POST">
					<h5 class="card-title">Gejala</h5>
					<div class="form-group mb-4">
						<select class="form-control col-sm-4" name="gejala_id">
							<option value="">Pilih Gejala</option>
							<?php foreach ($gejala as $g) : ?>
								<option value="<?= $g['id'] ?>"><?= $g['kode'] . ' - ' . $g['gejala'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<h5 class="card-title">Kerusakan</h5>
					<div class="form-group mb-4">
						<select class="form-control col-sm-4" name="gejala_parent">
							<option value="">Pilih Kerusakan</option>
							<?php foreach ($kerusakan as $k) : ?>
								<option value="<?= $k['id'] ?>"><?= $k['kode'] . ' - ' . $k['kerusakan'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<h5 class="card-title">MB</h5>
					<div class="form-group">
						<input type="text" class="form-control col-sm-4" name="mb" id="mb" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
					</div>
					<h5 class="card-title">MD</h5>
					<div class="form-group">
						<input type="text" class="form-control col-sm-4" name="md" id="md" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')">
					</div>
					<div class="float-right">
						<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
