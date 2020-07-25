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
				<form class="mt-4" action="<?= base_url('rule/update/') . $rule['id'] ?>" method="POST">
					<h5 class="card-title">MD</h5>
					<div class="form-group">
						<input type="text" class="form-control" name="md" id="md" value="<?= $rule['md']; ?>" required oninvalid="this.setCustomValidity('Gejala tidak boleh kosong')" oninput="setCustomValidity('')">
					</div>

					<h5 class="card-title">MB</h5>
					<div class="form-group">
						<input type="text" class="form-control" name="mb" id="mb" value="<?= $rule['mb']; ?>" required oninvalid="this.setCustomValidity('Gejala tidak boleh kosong')" oninput="setCustomValidity('')">
					</div>

					<div class="float-right">
						<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
