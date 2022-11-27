<?php
    include "connector_user.php";

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $noHP = $_POST['no_hp'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $query = mysqli_query($koneksi_user, "SELECT * from `user_naoval` where email = '$email'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        echo "Account already exist! Try another account.";
    } else {
        if($password == $confirm_password) {
            $query = mysqli_query($koneksi_user, "INSERT INTO user_naoval(nama, email, password, no_hp) VALUES('$nama','$email','$password','$noHP')");
    
            if($query) {
                setcookie('nama', $nama, time()+3600, '/');
                setcookie('email', $email, time()+3600, '/');
                setcookie('no_hp', $noHP, time()+3600, '/');
    
                header('Location: ../index.php?page=login');
            }
        } else {
            echo "Password doesn't match";
        }
    }

?>