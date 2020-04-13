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
                font-size: 24px;
                transition: transform 0.1s;
            }

            .btn-logout:hover {
                color: #73c5ff;
                transform: translateX(10px);
            }

            .btn-logout:active {
                transform: translate(10px, 12px);
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
            <div class="menu">
	            <a href="<?php echo site_url('User');?>" class="btn btn-logout" role="button" style="color: #bdd7ff;">Tabel</a><br><br>
	            <a href="<?php echo site_url('User/showmap');?>" class="btn btn-logout" role="button" style="color: #bdd7ff;">Peta</a><br><br>
	            <a href="<?php echo site_url('Login/logout');?>" class="btn btn-logout" role="button" style="color: #bdd7ff;">Log Out</a>
	        </div>
        </div>

        <div class="container">
            <h1>Data Sekolah Kota Semarang</h1><br>
            <a href="<?php echo site_url('User/export'); ?>">Unduh</a><br><br><br>

        	<table class="table table-bordered table-striped" id="mydata">
        		<thead class="text-center">
        			<tr>
                        <td rowspan="2">No</td>
        				<td rowspan="2">Kecamatan</td>
                        <td rowspan="2">Jumlah</td>
        				<td colspan="3">SD</td>
        				<td colspan="3">SMP</td>
                        <td colspan="3">SMA</td>
                        <td colspan="3">SMK</td>
                        <td colspan="3">SLB</td>
                    </tr>
                    <tr>
                        <td>J</td>
                        <td>N</td>
                        <td>S</td>
                        <td>J</td>
                        <td>N</td>
                        <td>S</td>
                        <td>J</td>
                        <td>N</td>
                        <td>S</td>
                        <td>J</td>
                        <td>N</td>
                        <td>S</td>
                        <td>J</td>
                        <td>N</td>
                        <td>S</td>
                    </tr>
                </thead>
        		<tbody>
        			<?php 
                        $no = 1;
        				foreach($data->result_array() as $ds):
        					$id_kecamatan=$ds['id_kecamatan'];
        					$kecamatan=$ds['kecamatan'];
                            $sd_negeri=$ds['sd_negeri'];
                            $sd_swasta=$ds['sd_swasta'];
                            $smp_negeri=$ds['smp_negeri'];
                            $smp_swasta=$ds['smp_swasta'];
                            $sma_negeri=$ds['sma_negeri'];
                            $sma_swasta=$ds['sma_swasta'];
                            $smk_negeri=$ds['smk_negeri'];
                            $smk_swasta=$ds['smk_swasta'];
                            $slb_negeri=$ds['slb_negeri'];
                            $slb_swasta=$ds['slb_swasta'];
        			?>
        			<tr class="text-center">
                        <td><?php echo $no++;?></td>
        				<td class="text-left"><?php echo $kecamatan;?></td>
                        <td><?php echo $sd_negeri + $sd_swasta + $smp_negeri + $smp_swasta + $sma_negeri + $sma_swasta + $smk_negeri + $smk_swasta + $slb_negeri + $slb_swasta; ?></td>
        				<td><?php echo $sd_negeri + $sd_swasta;?></td>
                        <td><?php echo $sd_negeri;?></td>
                        <td><?php echo $sd_swasta;?></td>
                        <td><?php echo $smp_negeri + $smp_swasta;?></td>
                        <td><?php echo $smp_negeri;?></td>
                        <td><?php echo $smp_swasta;?></td>
                        <td><?php echo $sma_negeri + $sma_swasta;?></td>
                        <td><?php echo $sma_negeri;?></td>
                        <td><?php echo $sma_swasta;?></td>
                        <td><?php echo $smk_negeri + $smk_swasta;?></td>
                        <td><?php echo $smk_negeri;?></td>
                        <td><?php echo $smk_swasta;?></td>
                        <td><?php echo $slb_negeri + $slb_swasta;?></td>
                        <td><?php echo $slb_negeri;?></td>
                        <td><?php echo $slb_swasta;?></td>
        			</tr>
        			<?php endforeach;?>
        		</tbody>
        	</table>
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