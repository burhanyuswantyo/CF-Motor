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
	<title>Diagnosa</title>
	<!-- Custom CSS -->
	<link href="<?= base_url() ?>files/dist/css/style.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div class="main-wrapper">
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center; background-size: 1800px 1400px; ">
			<div class="col-lg-5 col-md-7 bg-white">
				<div class="p-3">
					<h2 class="mt-3 text-center">Jawab Pertanyaan Ini</h2>
					<p class="text-center">Sistem Pakar Diagnosa Kerusakan Motor Injeksi Matic</p>
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 col-md-offset-2">
							<form action="<?= base_url('diagnosa/temp') ?>" method="POST">
								<input type="hidden" name="id" value="<?= $id ?>">
								<table class="table table-bordered">
									<tr>
										<td>
											<?php echo $gejala['gejala'] ?> <br>
										</td>
										<td class="text-center">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gejala" id="gejala" value="<?= $gejala['id'] ?>" <?= $ya ?> required>
												<label class="form-check-label" for="gejala">Ya</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gejala" id="gejala" value="0" <?= $tidak ?> required>
												<label class="form-check-label" for="gejala">Tidak</label>
											</div>
										</td>
									</tr>
								</table>
								<?php if ($finish) { ?>
									<button type="submit" name="submit" class="btn btn-block btn-primary">Selesai</button>
								<?php } else { ?>
									<button type="submit" name="submit" class="btn btn-block btn-primary">Lanjut</button>
								<?php } ?>
								<a href="<?= base_url('diagnosa/' . ($id - 1)) ?>" class="btn btn-block btn-success">Kembali</a>

						</div>
					</div>

				</div>
			</div>
			</form>

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
</body>

</html>
