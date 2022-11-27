<?php
    include "connector_user.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi_user, "SELECT * from `user_naoval` where email = '$email' && password = '$password'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        $data = mysqli_fetch_assoc($query);
    
        if(isset($_POST['remember'])) {
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time()+3600, '/');
        } else {
            unset($_COOKIE['remember']);
            setcookie('remember', '', time() - 3600, '/');
        }

        setcookie('email', $email, time()+3600, '/');
        setcookie('password', $password, time()+3600, '/');
        setcookie('nama', $data['nama'], time()+3600, '/');
        header('Location: ../index.php');

    } else {
        echo "You entered a wrong email / password";
    }
?>