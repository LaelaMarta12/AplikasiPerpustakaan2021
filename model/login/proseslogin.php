<?php
    session_start();
    include "../../config/connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if( empty($username) == true OR empty($password) == true )  {
        $errors[] = '*Username/Password field is required';
    }
    else {
        // if username exist
        $sql = "SELECT * FROM tabel_user WHERE username = '$username'";
        $query = $db->query($sql);
        if( $query->num_rows > 0 ) {
                // check username and password
                $password = $password;

                $sql = "SELECT * FROM tabel_user WHERE username = '$username'
                AND password = '$password'";
                $query = $db->query($sql);
                $result = $query->fetch_array();
                
                $db->close();

                if($query->num_rows == 1) {
                        $_SEESION['logged_in']  = true;
                        $_SEESION['user_id']    = $result['id_user'];
                        $_SEESION['username']   = $result['username'];
                        $_SEESION['level']      = $result['level'];
                        //jika user & pass benar maka menapilkan
                        header('location: ../../beranda.php');
                        exit();
                }
                else {
                    header('location ../../login.php');
                }
        }
        else {
            header('location: ../../login.php');
        }
    }




