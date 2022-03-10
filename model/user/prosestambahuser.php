<?php
    include "../../config/connect.php";

    $id_pegawai            = $_POST['id_pegawai'];
    $username              = $_POST['username'];
    $password              = $_POST['password'];
    $level                 = $_POST['level'];
    


    $sql = "INSERT INTO tabel_user
    (
                   
          id_pegawai,
          username,              
          password,
          level
    )
    VALUES
    (
         '".$id_pegawai."', 
         '".$username."',    
         '".$password."',
         '".$level."'
    )";
      // echo "$sql";
   $db->query($sql);

    header ('Location: ../../beranda.php?page=user');
 ?>