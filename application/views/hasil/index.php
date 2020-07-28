<!DOCTYPE html>
<html dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>files/assets/images/favicon.png">
	<title>Hasil Diagnosa</title>
	<!-- Custom CSS -->
	<link href="<?= base_url() ?>files/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
	<div class="main-wrapper">
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
			<div class="col-sm-6 bg-white my-5">
				<div class="p-3">
					<h2 class="mt-3 text-center">Hasil</h2>
					<p class="text-center"><i>Hasil diagnosa kerusakan motor injeksi dengan metode certainty factor</i></p>
					<div class="row">
						<div class="box-body table-responsive">
							<table id="tbl-list" class="table table-bordered">
								<tr>
									<th width="50px" style="background: #67CDFF; color: white">No</th>
									<th style="background: #67CDFF; color: white">Gejala</th>
								</tr>
								<tr>
									<?php $i = 1;
									foreach ($listGejala->result() as $value) { ?>
								<tr>
									<td width="30px"><?php echo $i++ ?></td>
									<td><?php echo $value->kode . " - " . $value->gejala ?></td>
								</tr>
							<?php } ?>
							</tr>
							</table>

							<div class="box box-success">
								<div class="box-header with-border">
									<h6 class="box-title">Hasil Diagnosa</h6>
								</div><!-- /.box-header -->
								<div class="box-body">
									<table id="tbl-list" class="table table-bordered">
										<tr>
											<th width="50px" style="background: #67CDFF; color: white">No</th>
											<th style="background: #67CDFF; color: white">Kerusakan</th>
											<th style="background: #67CDFF; color: white">Tingkat Kepercayaan</th>
										</tr>
										<tr>
											<?php $i = 1;
											foreach ($listKerusakan as $value) { ?>
										<tr>
											<td width="30px"><?php echo $i++ ?></td>
											<td><?php echo $value['kode'] . " - " . $value['kerusakan'] ?></td>
											<td><?php echo $value['kepercayaan'] ?> %</td>
										</tr>
									<?php } ?>
									</tr>
									</table>
								</div>
								<!--box body-->
							</div>
							<!--box-->


							<div class="box box-success">
								<div class="box-header with-border">
									<h6 class="box-title">Kesimpulan</h6>
								</div><!-- /.box-header -->
								<div class="box-body">
									<?php if (sizeof($listKerusakan) > 0) { ?>
										<p>
											Berdasarkan gejalanya, Motor Anda Mengalami Kerusakan <b><?php echo $listKerusakan[0]['kerusakan']; ?></b> dengan tingkat kepercayaan <b><?php echo $listKerusakan[0]['kepercayaan']; ?> %</b><br />
										</p>
										<p>
											<div class="box-header with-border">
												<h6 class="box-title">Solusi</h6>
											</div><!-- /.box-header -->
											<?php echo $listKerusakan[0]['solusi']; ?>
										</p>
									<?php } else { ?>
										<p>
											Penyakit tidak dapat diprediksi karena tingkat kepercayaan gejala terlalu rendah
										</p>
									<?php } ?>
								</div>
								<!--box body-->
							</div>
							<!--box-->
						</div>
					</div>
				</div>
				<div class="text-center my-3">
					<a href="<?= base_url('diagnosa/reset') ?>" class="btn btn-primary">Halaman Utama</a>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Login box.scss -->
	<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="<?= base_url() ?>files/assets/libs/jquery/dist/jquery.min.js "></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= base_url() ?>files/assets/libs/popper.js/dist/umd/popper.min.js "></script>
	<script src="<?= base_url() ?>files/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script>
		$(".preloader ").fadeOut();
	</script>
</body>

</html>
