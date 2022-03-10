<?php
    $host           = "localhost";
    $username       = "root";
    $password       = "";
    $con            = "perpustakaan_laila";

    $db = mysqli_connect($host,$username,$password,$con);

    if(!$db){
        die("database tidak terhubung");
    }
?>