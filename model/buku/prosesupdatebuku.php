<?php
    include "../../config/connect.php";

    $id_buku             = $_POST['id_buku'];
    $jumlah                = $_POST['jumlah'];
    $nama_buku           = $_POST['nama_buku'];
    $penulis             = $_POST['penulis'];
    $penerbit            = $_POST['penerbit'];
    $tahun_terbit      = $_POST['tahun_terbit'];

    $sql = "Update tabel_buku set

        jumlah                  = '".$jumlah."' ,
        nama_buku             = '".$nama_buku."',
        penulis               = '".$penulis ."' ,
        penerbit              = '".$penerbit."' ,
        tahun_terbit          = '".$tahun_terbit."' 

        where id_buku =  '".$id_buku."' 
        ";
    
   // echo "$sql";    
    $db->query($sql);

      header('Location: ../../beranda.php?page=buku');
 ?>