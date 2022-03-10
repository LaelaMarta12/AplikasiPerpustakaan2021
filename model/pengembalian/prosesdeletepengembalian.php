<?php
    include "../../config/connect.php";

    $id =$_GET['id'];

    $sql ="DELETE from tabel_pengembalian where id_pengembalian =$id";
    $db->query($sql);

   header ('Location: ../../beranda.php?page=pengembalian');


?>