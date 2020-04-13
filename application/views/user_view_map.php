<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>Menu Operator</title>
    	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/css/styling.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
        
        


        <style type="text/css">
            
            .sidenav {
                position: absolute;
                left: 0;
                top: 0;
                background-color: #4a6942;
                width: 20%;
                height: 100%;
                padding-top: 2%;
                padding-left: 1.5%;
                padding-right: 1.5%;
                color: #FFF;
            }

            .container {
                top: 0;
                padding-top: 2%; 
                position: absolute;
                left: 20%;
                width: 70%;
                padding-left: 5%;
            }

            .sidenav > .btn {
                color: #FFF;
                padding: 0;
            }

            .btn-add {
                background-color: #4a6942;
                color: #FFF;
                margin: 1% 0 5% 0;
            }

            .btn-add:hover {
                background-color: #3e5936;
                color: #FFF;
            }

            .btn-add:active {
                transform: translateY(4px);
            }

            .btn-block {
                width: 90%;
                padding: 5% 10%;
                position: relative;
                left: 0%;
            }

            .btn-logout {
                margin-top: 7.5%;
                font-size: 20px;
                transition: transform 0.1s;
                color: #FFF;
                display: block;
                text-align: left;
                margin-left: 7.5%;
                padding-left: 7.5%;
                border-left: 6px solid #FFF;
                border-radius: 3px;
            }

            .btn-logout:hover {
                transform: translateX(10px);
                color: #FFF;
            }

            .btn-logout:active {
                transform: translate(10px, 12px);
            }

            .usermenu {
                border-top: 3px solid #FFF;
                padding-top: 10%;
            }

            .aktif {
                border-left: 6px solid #73c5ff;;
                color: #73c5ff;
            }

            .aktif:hover {
                border-left: 6px solid #73c5ff;;
                color: #73c5ff;
            }

        </style>

    </head>

    <body>

        <div class="sidenav">
            <div class="userinfo">
                <h2><?php echo $this->session->userdata['nama']; ?></h2><br>
                <h3>Username:</h3>
                <h4><?php echo $this->session->userdata['username']; ?></h4><br>
                <h3>Status:</h3>
                <h4>Pengguna</h4><br><br><br><br>
            </div>
            <div class="usermenu">
                <h2>Menu</h2><br>
                <a href="<?php echo site_url('User');?>" class="btn btn-logout" role="button">Tabel</a>
                <a href="<?php echo site_url('User/showmap');?>" class="btn btn-logout aktif" role="button">Peta</a>
                <a href="<?php echo site_url('Login/logout');?>" class="btn btn-logout" role="button">Log Out</a>
            </div>
        </div>

        <div class="container">
            <h1>Data Sekolah Kota Semarang</h1><br><br><br>

        	<iframe width="100%" height="520" frameborder="0" src="https://adammaulidani.carto.com/builder/3e7bdbd4-98be-499c-b121-d54eadd8ee1e/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function() {
		$('#mydata').DataTable();
	});
</script>
</body>
</html>