<?php 
        include "connector_user.php";

        $wallet = $_POST['wallet'];
        $new_nama = $_POST['nama'];
        $new_noHP = $_POST['no_hp'];
        $new_password = $_POST['password'];
        $new_confirmPassword = $_POST['confirm_password'];
        $navbar = $_POST['warna_nav'];
    
        if(!empty($new_password) && !empty($new_confirmPassword)) {
            if($new_password == $new_confirmPassword) {
                $query = mysqli_query($koneksi_user, "UPDATE login_user SET nama='$new_nama', no_hp='$new_noHP', password='$new_password' WHERE wallet = '$wallet'");
                header('Location: ../index.php');
            } else {
                echo "Password doesn't match!";
            }
        } else {
            $query = mysqli_query($koneksi_user, "UPDATE login_user SET nama='$new_nama', no_hp='$new_noHP' WHERE wallet = '$wallet'");
            header('Location: ../index.php');
        }

        setcookie('nama', $new_nama, time()+3600, '/');
        setcookie('no_hp', $new_noHP, time()+3600, '/');
        setcookie('navbar', $navbar, time()+3600, '/');

?>