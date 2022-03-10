<?php
    include "../../config/connect.php";
    
    $id_pengembalian              = $_POST['id_pengembalian'];
    $tanggal_pengembalian         = $_POST['tanggal_pengembalian'];
    $id_buku                      = $_POST['id_buku'];
    $id_anggota                    = $_POST['id_anggota'];
    $jumlah_buku                  = $_POST['jumlah_buku'];

    $sql = "Update tabel_pengembalian set

             tanggal_pengembalian              = '".$tanggal_pengembalian."', 
             id_buku                           = '".$id_buku."',
             id_anggota                        = '".$id_anggota."',
             jumlah_buku                       = '".$jumlah_buku."'   

        where id_pengembalian =  '".$id_pengembalian."' 
        ";
    
    
    //echo "$sql";
         $db->query($sql);

     header('Location: ../../beranda.php?page=pengembalian');
 ?>