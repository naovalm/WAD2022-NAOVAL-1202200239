<?php
include "connector_user.php";

if (isset($_POST['login'])) {
    $wallet = $_POST['wallet'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi_user, "SELECT * from `login_user` where wallet = '$wallet' &&  password= '$password'"); //ini yang diganti
    $rows = mysqli_num_rows($query);

    if ($rows) {
        $data = mysqli_fetch_assoc($query);

        if (isset($_POST['remember'])) {
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time() + 3600, '/');
        } else {
            unset($_COOKIE['remember']);
            setcookie('remember', '', time() - 3600, '/');
        }

        setcookie('wallet', $wallet, time() + 3600, '/');
        setcookie('password', $password, time() + 3600, '/'); //ini yang diganti
        setcookie('nama', $data['nama'], time() + 3600, '/');
        header('Location: ../index.php');
    } else {
        echo "You entered a wrong wallet / password";
    }
} else if (isset($_POST['admin'])) {
    $wallet = $_POST['wallet'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi_user, "SELECT * from `login_user` where wallet = '$wallet' &&  password= '$password'"); //ini yang diganti
    $rows = mysqli_num_rows($query);

    if ($rows) {
        $data = mysqli_fetch_assoc($query);

        if (isset($_POST['remember'])) {
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time() + 3600, '/');
        } else {
            unset($_COOKIE['remember']);
            setcookie('remember', '', time() - 3600, '/');
        }

        setcookie('wallet', $wallet, time() + 3600, '/');
        setcookie('password', $password, time() + 3600, '/'); //ini yang diganti
        setcookie('nama', $data['nama'], time() + 3600, '/');
        header('Location: ../index.php?page=admin&message=none');
    } else {
        echo "You entered a wrong wallet / password";
    }
}
