<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>Daftar Operator</title>
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
                width: 50%;
                padding: 5% 10%;
                position: relative;
                left: 25%;
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
            <h4>Admin</h4><br><br><br><br>
            <a href="<?php echo site_url('Login/logout');?>" class="btn btn-logout" role="button" style="color: #bdd7ff;">Log Out</a>
        </div>

        <div class="container">
            <h1>Data Operator</h1>
        		<a class="btn btn-lg btn-add" data-toggle="modal" data-target="#modal_add_new">Tambah Operator</a>

        	<table class="table table-bordered table-striped" id="mydata">
        		<thead class="text-center">
        			<tr>
                        <td>No</td>
        				<td>Nama</td>
        				<td>Username</td>
        				<td>Ubah</td>
                        <td>Hapus</td>
        			</tr>
        		</thead>
        		<tbody>
        			<?php 
                        $no = 1;
        				foreach($data->result_array() as $op):
        					$id_operator=$op['id'];
        					$nama_operator=$op['nama'];
        					$username_operator=$op['username'];
                            $level_operator=$op['level'];
        			?>
                    <?php if($level_operator==2){ ?>
        			<tr>
                        <td><?php echo $no++;?></td>
        				<td><?php echo $nama_operator;?></td>
        				<td><?php echo $username_operator?></td>
                        <td>
                            <a class="btn btn-xs btn-info btn-block" data-toggle="modal" data-target="#modal_edit<?php echo $id_operator;?>"> Ubah</a>
                        </td>
                        <td>
                            <a class="btn btn-xs btn-danger btn-block" data-toggle="modal" data-target="#modal_hapus<?php echo $id_operator;?>"> Hapus</a>
                        </td>
        			</tr><?php } ?>
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
                <h3 class="modal-title" id="myModalLabel">Tambah Operator</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/tambah_operator');?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Operator</label>
                        <div class="col-xs-8">
                            <input name="nama_operator" class="form-control" type="text" placeholder="Nama Operator" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username Operator</label>
                        <div class="col-xs-8">
                            <input name="username_operator" class="form-control" type="text" placeholder="Username Operator" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password Operator</label>
                        <div class="col-xs-8">
                            <input name="password_operator" class="form-control" type="text" placeholder="Password Operator" required>
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
        foreach($data->result_array() as $op):
            $id_operator=$op['id'];
            $nama_operator=$op['nama'];
            $username_operator=$op['username'];
            $level_operator=$op['level'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $id_operator;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Operator</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/edit_operator');?>">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input name="id_operator" value="<?php echo $id_operator;?>" class="form-control" type="hidden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Operator</label>
                        <div class="col-xs-8">
                            <input name="nama_operator" value="<?php echo $nama_operator;?>" class="form-control" type="text" placeholder="Nama Operator" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username Operator</label>
                        <div class="col-xs-8">
                            <input name="username_operator" value="<?php echo $username_operator;?>" class="form-control" type="text" placeholder="Username Operator" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password Operator</label>
                        <div class="col-xs-8">
                            <input name="password_operator" class="form-control" type="password" placeholder="Password Operator" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input name="level_operator" value="<?php echo $level_operator;?>" class="form-control" type="hidden">
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
        foreach($data->result_array() as $op):
            $id_operator=$op['id'];
            $nama_operator=$op['nama'];
            $username_operator=$op['username'];
            $level_operator=$op['level'];
        ?>
     <!-- ============ MODAL HAPUS BARANG =============== -->
        <div class="modal fade" id="modal_hapus<?php echo $id_operator;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('Admin/hapus_operator');?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b><?php echo $username_operator;?></b></p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_operator" value="<?php echo $id_operator;?>">
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