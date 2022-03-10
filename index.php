<?php
       require_once "config/connect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERPUSTAKAAN SMK NU</title>

    <!-- Custom fonts for this template -->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template  -->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<hr>

<!-- Page Heading -->

    <a href="login.php?page=login">    
        <center><button class="btn btn-success">MASUK</button></center>
    </a>
    <hr>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-black" align="center">Data Buku Perpustakan </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        
        
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Jumlah</th>
                        <th>Nama Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        
                    </tr>
                </thead>
               
                <tbody>
                   <?php
                        $sql = "select * from tabel_buku";
                        $show = $db->query($sql);

                        foreach($show as $buku):
                   ?>
                        <tr>
                            <td><?php echo $buku['nama_buku']?></td>
                            <td><?php echo $buku['jumlah']?></td>
                            <td><?php echo $buku['penulis']?></td>
                            <td><?php echo $buku['penerbit']?></td>
                            <td><?php echo $buku['tahun_terbit']?></td>
                           
                    </tr>
                    <?php endforeach; ?>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
