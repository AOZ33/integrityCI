<!doctype html>
<html lang="en">

<head>
	<title><?= $title; ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(<?= base_url('assets/img'); ?>/header.jpg"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Masuk Untuk Melanjutkan</h3>
								</div>
							</div>
							<?= $this->session->flashdata('message'); ?>
							<form class="user" method="post" action="<?= base_url('auth'); ?>">
								<div class="form-group mt-3">
									<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan E-Mail" value="<?= set_value('email'); ?>">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
								</div>
						</div>
						</form>
						<div class="text-center">
							<a class="small" href="<?= base_url('auth/forgot_password') ?>">Forgot Password?</a>
						</div>
						</br><br>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- <script src="js/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
	<!-- <script src="js/popper.js"></script> -->
	<script type="text/javascript" src="<?= base_url('assets/js/core/popper.min.js'); ?>"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- <script src="js/main.js"></script> -->
	<script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>