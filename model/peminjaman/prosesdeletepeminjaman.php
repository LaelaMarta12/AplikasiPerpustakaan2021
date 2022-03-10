<?php
    include "../../config/connect.php";

    $id =$_GET['id'];

    $sql ="DELETE from tabel_peminjaman where id_peminjaman =$id";
    $db->query($sql);

    header ('Location: ../../beranda.php?page=peminjaman');


?>