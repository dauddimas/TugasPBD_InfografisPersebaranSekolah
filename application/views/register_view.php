<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link href="<?php echo base_url().'assets/css/styling.css'?>" rel="stylesheet">
	<style type="text/css">
		body {
			background-color: #4a6942;
		}
		.row {
			width: 100%;
			height: auto;
		}

		.row-1 {
			margin-top: 2.5%;
		}

		.row-2 {
			margin-top: 5%;
		}

		.btn-back {
			background-color: #255194;
			border: none;
			color: #FFF;
		}

		.btn-back:hover {
			background-color: #193d73;
			color: #FFF;
		}

		.btn-back:active {
			transform: translateY(4px);
			background-color: #193d73;
		}

		.info-col {
			padding: 10% 0% 10% 2.5%;
			text-align: left;
			border-left: 10px solid #FFF;
			color: #FFF;
			margin-left: 5%;
		}

		.head1 {
			font-size: 72px;
		}

		.head2 {
			font-size: 28px;
		}

		.head3 {
			font-size: 28px;
		}

		.head4 {
			font-size: 20px;
		}

		.login-col {
			color: #FFF;
			padding: 0 0 0 0;
			border-radius: 2em;
			margin-right: 9%;
			margin-top: 2%;
			font-size: 14px;
		}

		input[type="text"], input[type="username"], input[type="password"] {
			border-top: none;
			border-left: none;
			border-right: none;
			border-bottom: 3px solid #FFF;
			background-color: #4a6942;
			box-shadow: none;
			border-radius: 0;
			color: #FFF;
			transition: border-bottom 0.5s;
			transition-delay: 0.1s;
		}

		input[type="text"]:focus, input[type="username"]:focus, input[type="password"]:focus {
			border-top: none;
			border-left: none;
			border-right: none;
			border-bottom: none;
			border-bottom: 3px solid #753d14;
			box-shadow: none;
			border-radius: 0;
			color: #FFF;
		}

		label {
			font-size: 16px;
			font-weight: 300;
		}

		button[type=submit] {
			background-color: #8B4513;
			color: #FFF;
			margin-top: 15%;
			padding: 5% 15%;
			text-align: center;
			font-size: 18px;
		}

		button[type=submit]:hover {
			color: #FFF;
			background-color: #753d14;
		}

		button[type=submit]:active {
			color: #FFF;
			background-color: #753d14;
			transform: translateY(4px);
		}

		.link {
			color: #73c5ff;
		}

		.link:hover {
			color: #73c5ff;
		}

	</style>
</head>

<body>
	<div class="container-fluid">
	<div class="row row-1">
		<div class="col-sm-1"></div>
		<div class="col-sm-2">
			<a href="<?php echo site_url('Register/login');?>" class="btn btn-lg btn-back head-4"><span class="glyphicon glyphicon-menu-left"></span>  Kembali ke halaman utama</a>
		</div>
	</div>
	<div class="row row-2">
		<div class="col-sm-3"></div>
		<div class="col-sm-2 login-col">
			<p class="head3">Daftar untuk masuk</p><br>
			<form action="<?php echo site_url('Register/signup'); ?>" method="POST">
				<div class="form-group">
					<label for="nama">Nama Lengkap:</label>
					<input type="text" class="form-control input-lg" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" required oninvalid="this.setCustomValidity('Isi nama lengkap anda')"
    oninput="this.setCustomValidity('')">
				</div>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control input-lg" id="username" name="username" value="<?php echo set_value('username'); ?>" required oninvalid="this.setCustomValidity('Isi username anda')"
    oninput="this.setCustomValidity('')">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control input-lg" id="password" name="password" value="<?php echo set_value('password'); ?>" required oninvalid="this.setCustomValidity('Isi password anda')"
    oninput="this.setCustomValidity('')">
				</div>
				<div class="form-group">
					<label for="konfirmasipassword">Konfirmasi Password:</label>
					<input type="password" class="form-control input-lg" id="konfirmasipassword" name="konfirmasipassword" value="<?php echo set_value('password'); ?>" required oninvalid="this.setCustomValidity('Isi ulang password anda')"
    oninput="this.setCustomValidity('')">
				</div>
				<button type="submit" class="btn center-block" name="register" value="Register">Daftar</button>
				</form>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-4 info-col">
			<p class="head1">Buat akun</p><br>
			<p class="head2">Untuk melanjutkan sebagai pengguna</p><br>
		</div>
	</div>
	</div>
</body>
</html>