<?php
    include "../../config/connect.php";

    $id_peminjaman            = $_POST['id_peminjaman'];
    $tanggal_peminjaman       = $_POST['tanggal_peminjaman'];
    $id_buku                  = $_POST['id_buku'];
    $id_anggota               = $_POST['id_anggota'];
    $jumlah_buku              = $_POST['jumlah_buku'];
   

    $sql = "Update tabel_peminjaman set

         tanggal_peminjaman                = '".$tanggal_peminjaman."', 
         id_buku                           = '".$id_buku."',
         id_anggota                        = '".$id_anggota."', 
         jumlah_buku                       = '".$jumlah_buku."'
        
        where id_peminjaman =  '".$id_peminjaman."' 
        ";
 //echo "$sql"
    $db->query($sql);
    header('Location: ../../beranda.php?page=peminjaman');
 ?>