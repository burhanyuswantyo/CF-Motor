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
	<title><?= $title ?></title>
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
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?= base_url() ?>files/assets/images/background/home-bg.jpg) no-repeat center center; background-size: 1800px 1400px; ">
			<div class="col-lg-5 col-md-7 bg-white">
				<div class="p-3">
					<h2 class="mt-3 text-center">Selamat Datang</h2>
					<p class="text-center">Sistem Pakar Diagnosa Kerusakan Motor Injeksi</p>
					<form class="mt-4">
						<div class="row">
							<div class="col-lg-12 text-center">
								<!-- <a href="<?= base_url('welcome/daftar_kerusakan') ?>" class="btn btn-block btn-success">Daftar Kerusakan</a> -->

								<br>

								<a href="<?= base_url('diagnosa') ?>" class="btn btn-block btn-success">Mulai Diagnosa</a>
							</div>


							<div class="col-lg-12 text-center mt-5">
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
	<script>
		$(".preloader ").fadeOut();
	</script>
</body>

</html>
