<?php
    include "../../config/connect.php";

    $tanggal_pengembalian            = $_POST['tanggal_pengembalian'];
    $id_buku                         = $_POST['id_buku'];
    $id_anggota                      = $_POST['id_anggota'];
    $jumlah_buku                     = $_POST['jumlah_buku'];


    $sql = "INSERT INTO tabel_pengembalian
    (
          tanggal_pengembalian,         
          id_buku,
          id_anggota,              
          jumlah_buku
    )
    VALUES
    (
         '".$tanggal_pengembalian."', 
         '".$id_buku."',    
         '".$id_anggota."',         
         '".$jumlah_buku."'
    )";
      // echo "$sql";
   $db->query($sql);

    header ('Location: ../../beranda.php?page=pengembalian');
 ?>