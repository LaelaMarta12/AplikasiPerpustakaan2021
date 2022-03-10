<?php
    include "../../config/connect.php";

    $jumlah                = $_POST['jumlah'];
    $nama_buku           = $_POST['nama_buku'];
    $penulis             = $_POST['penulis'];
    $penerbit            = $_POST['penerbit'];
    $tahun_terbit        = $_POST['tahun_terbit'];

    $sql = "INSERT INTO tabel_buku
    (
        jumlah,     
        nama_buku,
        penulis,
        penerbit,
        tahun_terbit
    )
    VALUES
    (
         '".$jumlah."' ,
         '".$nama_buku."' ,   
         '".$penulis."'  ,        
         '".$penerbit."' ,
         '".$tahun_terbit."' 
    )";
    
    $db->query($sql);

    header ('Location: ../../beranda.php?page=buku');
 ?>