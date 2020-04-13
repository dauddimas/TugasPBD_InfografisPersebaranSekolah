<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
			font-size: 64px;
		}

		.head2 {
			font-size: 48px;
		}

		.head3 {
			font-size: 32px;
		}

		.head4 {
			font-size: 24px;
		}

		.login-col {
			color: #FFF;
			padding: 5% auto;
			border-radius: 2em;
			margin-left: 2%;
			margin-top: 2.5%;
			font-size: 14px;
		}

		input[type=text] {
			border: 1px solid #4a6942;
		}

		input[type=password] {
			border: 1px solid #4a6942;
		}

		button[type=submit] {
			background-color: #8B4513;
			color: #FFF;
			margin-top: 15%;
			padding: 5% 15%;
			text-align: center;
			font-size: 18px;
		}

		.link {
			color: #73c5ff;
		}

	</style>
</head>

<body>
	<div class="container-fluid">
	<div class="row row-2">
		<div class="col-sm-5 info-col">
			<p class="head1">Infografis</p>
			<p class="head2">Persebaran Pendidikan</p><br>
			<p class="head3">Kota Semarang</p>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-2 login-col">
			<p class="head4">Masuk ke akun anda</p><br>
			<form action="/action_page.php">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn center-block">Login</button>
				<br><br><br><p class="text-center">Belum punya akun? <a href="#" class="link">Daftar disini</a></p>
			</form>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-3"></div>
	</div>
	</div>
</body>
</html>