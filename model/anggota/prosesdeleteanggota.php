<?php
    include "../../config/connect.php";

    $id =$_GET['id'];

    $sql ="DELETE from tabel_anggota where id_anggota =$id";
    $db->query($sql);

    header ("Location: ../../beranda.php?page=anggota");


?>