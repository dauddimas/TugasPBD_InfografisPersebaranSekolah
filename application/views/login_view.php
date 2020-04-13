<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
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

		.row-2 {
			margin-top: 10%;
		}

		.info-col {
			padding: 5% 2.5% 5% 0;
			text-align: right;
			border-right: 10px solid #FFF;
			color: #FFF;
		}

		.head1 {
			font-size: 72px;
		}

		.head2 {
			font-size: 48px;
		}

		.head3 {
			font-size: 32px;
		}

		.head4 {
			font-size: 20px;
		}

		.login-col {
			color: #FFF;
			padding: 0 0 0 0;
			border-radius: 2em;
			margin-left: 2%;
			margin-top: 2.5%;
			font-size: 14px;
		}

		input[type="username"], input[type="password"] {
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

		input[type="username"]:focus, input[type="password"]:focus {
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
	<div class="row row-2">
		<div class="col-sm-6 info-col">
			<p class="head1">Infografis</p><br>
			<p class="head2">Persebaran Sekolah</p><br>
			<p class="head2">Kota Semarang</p>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-2 login-col">
			<p class="head3">Masuk ke akun anda</p><br>
			<form action="<?php echo site_url('Login/auth'); ?>" method="POST">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control input-lg" id="username" name="username" required oninvalid="this.setCustomValidity('Masukkan username anda')"
    oninput="this.setCustomValidity('')">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control input-lg" id="password" name="password" required oninvalid="this.setCustomValidity('Masukkan password anda')"
    oninput="this.setCustomValidity('')">
				</div>
	
				<button type="submit" class="btn center-block">Login</button>
				<br><br><br><p class="text-center head4">Belum punya akun? <a href="<?php echo site_url('Login/register');?>" class="link">Daftar disini</a></p>
			</form>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-2"></div>
	</div>
	</div>
</body>
</html>