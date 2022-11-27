<?php 
    if(isset($_COOKIE['remember'])) {
        unset($_COOKIE['nama']);
        unset($_COOKIE['no_hp']);
        unset($_COOKIE['navbar']);
        setcookie('nama', '', time() - 3600, '/');
        setcookie('no_hp', '', time() - 3600, '/');
        setcookie('navbar', '', time() - 3600, '/');
    } else {
        unset($_COOKIE['email']);
        unset($_COOKIE['password']);
        unset($_COOKIE['no_hp']);
        unset($_COOKIE['navbar']);
        unset($_COOKIE['nama']);
        setcookie('email', '', time() - 3600, '/');
        setcookie('password', '', time() - 3600, '/');
        setcookie('no_hp', '', time() - 3600, '/');
        setcookie('navbar', '', time() - 3600, '/');
        setcookie('nama', '', time() - 3600, '/');
    }
    
    header('Location: ../index.php');
?>