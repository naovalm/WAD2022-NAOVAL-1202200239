<?php
    include "connector_user.php";

    $wallet = $_POST['wallet'];
    $nama  = $_POST['nama'];
    $noHP = $_POST['no_hp'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $query = mysqli_query($koneksi_user, "SELECT * from `login_user` where wallet = '$wallet'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        echo "Wallet already exist! Try another Wallet.";
    } else {
        if($password == $confirm_password) {
            $query = mysqli_query($koneksi_user, "INSERT INTO login_user(nama, wallet, password, no_hp) VALUES('$nama','$wallet','$password','$noHP')");
    
            if($query) {
                setcookie('nama', $nama, time()+3600, '/');
                setcookie('wallet', $wallet, time()+3600, '/'); //ini yang diganti
                setcookie('no_hp', $noHP, time()+3600, '/');
    
                header('Location: ../index.php?page=login');
            }
        } else {
            echo "Password doesn't match";
        }
    }

?>