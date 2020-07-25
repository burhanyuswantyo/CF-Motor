<div class="page-wrapper">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<div class="row my-3">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
					</div>
				</div>
				<?php echo $this->session->flashdata('message'); ?>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead class="bg-danger text-white">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Gejala</th>
								<th class="text-center">Kerusakan</th>
								<th class="text-center">MD</th>
								<th class="text-center">MB</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($rule as $r) : ?>
								<tr>
									<td class="text-center align-middle"><?= $i ?></td>
									<td class="align-middle"><?= $r['gejala'] ?></td>
									<td class="align-middle"><?= $r['kerusakan'] ?></td>
									<td class="text-center align-middle"><?= $r['md'] ?></td>
									<td class="text-center align-middle"><?= $r['mb'] ?></td>
									<td class="text-center align-middle">
										<a href="<?= base_url('rule/ubah/') . $r['id'] ?>" class="badge badge-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
									</td>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
