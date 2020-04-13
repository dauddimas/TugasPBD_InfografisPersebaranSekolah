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
            <h2><?php echo $this->session->userdata['nama']; ?></h2><br>
            <h3>Username:</h3>
            <h4><?php echo $this->session->userdata['username']; ?></h4><br>
            <h3>Status:</h3>
            <h4>Operator</h4><br><br><br><br>
            <a href="<?php echo site_url('Login/logout');?>" class="btn btn-logout" role="button" style="color: #bdd7ff;">Log Out</a>
        </div>

        <div class="container">
            <h1>Data Sekolah Kota Semarang</h1>
        		<a class="btn btn-lg btn-add" data-toggle="modal" data-target="#modal_add_new">Tambah Data Pendidikan</a>

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
                        <td rowspan="2">Ubah</td>
                        <td rowspan="2">Hapus</td>
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
        			<tr>
                        <td><?php echo $no++;?></td>
        				<td><?php echo $kecamatan;?></td>
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
                        <td>
                            <a class="btn btn-xs btn-info btn-block" data-toggle="modal" data-target="#modal_edit<?php echo $id_kecamatan;?>"> Ubah</a>
                        </td>
                        <td>
                            <a class="btn btn-xs btn-danger btn-block" data-toggle="modal" data-target="#modal_hapus<?php echo $id_kecamatan;?>"> Hapus</a>
                        </td>
        			</tr>
        			<?php endforeach;?>
        		</tbody>
        	</table>
        </div>


    <!-- ============ MODAL ADD BARANG =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data Pendidikan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Operator/tambah_datasekolah');?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kecamatan</label>
                        <div class="col-xs-8">
                            <input name="kecamatan" class="form-control" type="text" placeholder="Nama Kecamatan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SD Negeri</label>
                        <div class="col-xs-8">
                            <input name="sd_negeri" class="form-control" type="number" placeholder="Jumlah SD Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SD Swasta</label>
                        <div class="col-xs-8">
                            <input name="sd_swasta" class="form-control" type="number" placeholder="Jumlah SD Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMP Negeri</label>
                        <div class="col-xs-8">
                            <input name="smp_negeri" class="form-control" type="number" placeholder="Jumlah SMP Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMP Swasta</label>
                        <div class="col-xs-8">
                            <input name="smp_swasta" class="form-control" type="number" placeholder="Jumlah SMP Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMA Negeri</label>
                        <div class="col-xs-8">
                            <input name="sma_negeri" class="form-control" type="number" placeholder="Jumlah SMA Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMA Swasta</label>
                        <div class="col-xs-8">
                            <input name="sma_swasta" class="form-control" type="number" placeholder="Jumlah SMA Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMK Negeri</label>
                        <div class="col-xs-8">
                            <input name="smk_negeri" class="form-control" type="number" placeholder="Jumlah SMK Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMK Swasta</label>
                        <div class="col-xs-8">
                            <input name="smk_swasta" class="form-control" type="number" placeholder="Jumlah SMK Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SLB Negeri</label>
                        <div class="col-xs-8">
                            <input name="slb_negeri" class="form-control" type="number" placeholder="Jumlah SLB Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SLB Swasta</label>
                        <div class="col-xs-8">
                            <input name="slb_swasta" class="form-control" type="number" placeholder="Jumlah SLB Swasta" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <!--END MODAL ADD BARANG-->

    <!-- ============ MODAL EDIT BARANG =============== -->
        <?php 
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
        <div class="modal fade" id="modal_edit<?php echo $id_kecamatan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Operator/edit_datasekolah');?>">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input name="id_kecamatan" value="<?php echo $id_kecamatan;?>" class="form-control" type="hidden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kecamatan</label>
                        <div class="col-xs-8">
                            <input name="kecamatan" value="<?php echo $kecamatan;?>" class="form-control" type="text" placeholder="Nama Kecamatan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SD Negeri</label>
                        <div class="col-xs-8">
                            <input name="sd_negeri" value="<?php echo $sd_negeri;?>" class="form-control" type="number" placeholder="Jumlah SD Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SD Swasta</label>
                        <div class="col-xs-8">
                            <input name="sd_swasta" value="<?php echo $sd_swasta;?>" class="form-control" type="number" placeholder="Jumlah SD Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMP Negeri</label>
                        <div class="col-xs-8">
                            <input name="smp_negeri" value="<?php echo $smp_negeri;?>" class="form-control" type="number" placeholder="Jumlah SMP Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMP Swasta</label>
                        <div class="col-xs-8">
                            <input name="smp_swasta" value="<?php echo $smp_swasta;?>" class="form-control" type="number" placeholder="Jumlah SMP Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMA Negeri</label>
                        <div class="col-xs-8">
                            <input name="sma_negeri" value="<?php echo $sma_negeri;?>" class="form-control" type="number" placeholder="Jumlah SMA Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMA Swasta</label>
                        <div class="col-xs-8">
                            <input name="sma_swasta" value="<?php echo $sma_swasta;?>" class="form-control" type="number" placeholder="Jumlah SMA Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMK Negeri</label>
                        <div class="col-xs-8">
                            <input name="smk_negeri" value="<?php echo $smk_negeri;?>" class="form-control" type="number" placeholder="Jumlah SMK Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SMK Swasta</label>
                        <div class="col-xs-8">
                            <input name="smk_swasta" value="<?php echo $smk_swasta;?>" class="form-control" type="number" placeholder="Jumlah SMK Swasta" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SLB Negeri</label>
                        <div class="col-xs-8">
                            <input name="slb_negeri" value="<?php echo $slb_negeri;?>" class="form-control" type="number" placeholder="Jumlah SLB Negeri" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah SLB Swasta</label>
                        <div class="col-xs-8">
                            <input name="slb_swasta" value="<?php echo $slb_swasta;?>" class="form-control" type="number" placeholder="Jumlah SLB Swasta" required>
                        </div>
                    </div>                    

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Perbarui</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <?php endforeach;?>
    <!--END MODAL EDIT BARANG-->

    <?php 
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
     <!-- ============ MODAL HAPUS BARANG =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $id_kecamatan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/hapus_operator');?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus data pendidikan kecamatan <b><?php echo $kecamatan;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_kecamatan" value="<?php echo $id_kecamatan;?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!--END MODAL HAPUS BARANG-->

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