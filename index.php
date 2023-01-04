<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css?v=<?php echo time(); ?>">
    <title>Naoval NFT</title>
</head>

<body>
    <div class="app">
        <?php
        include "config/connector.php";

        $result = mysqli_query($koneksi, "SELECT * FROM `showroom_naoval_table`");

        function handleNavbar($warna_navbar)
        {
            echo $warna_navbar;
        };
        ?>

        <nav class="navbar navbar-expand-lg bg-light <?= isset($_COOKIE['navbar']) ? handleNavbar($_COOKIE['navbar']) : '' ?>" id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide' : '' ?>">
            <div class="container-fluid">
                <a class="navbar-brand me-5" href="index.php"><img src="images/logo.png" alt="Bootstrap" width="120" height="30"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-container-auth ms-5" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php
                        if (isset($_GET['page']) && isset($_GET['message']) == 'admin') {
                            NULL;
                        } else if (isset($_GET['page']) && isset($_GET['id']) == 'detail') {
                            NULL;
                        } else {
                        ?>
                            <a class="nav-link active" aria-current="page" href="index.php">Explore</a>
                            <a class="nav-link active" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="index.php?page=creator-studio">Creator Studio</a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="nav-user">
                        <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link text-dark nav-login" href="index.php?page=login">Connect Wallet</a>
                        <?php
                        if (isset($_GET['page']) && isset($_GET['message']) == 'admin') {
                        ?>
                            <a href="index.php?page=additem" class="nav-additem bg-dark text-white" id="<?= isset($_COOKIE['nama']) ? '' : 'hide' ?>">Insert</a>
                        <?php
                        } else if (isset($_GET['page']) && isset($_GET['id']) == 'detailnft') {
                            NULL;
                        } else {
                            NULL;
                        }
                        ?>
                        <div class="dropdown" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_COOKIE['wallet'] ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./index.php?page=profile&user=<?= $_COOKIE['nama'] ?>">Profile</a></li>
                                <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'detail':
                    include "pages/Detail-Naoval.php";
                    break;
                case 'detailnft':
                    include "pages/Detailnft-Naoval.php";
                    break;
                case 'edit':
                    include "pages/Edit-Naoval.php";
                    break;
                case 'checkout':
                    include "pages/Checkout-Naoval.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        } else if (isset($_GET['page']) && isset($_GET['message'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'admin':
                    include "pages/Admin-Naoval.php";
                    break;
            }
        } else if (isset($_GET['page']) && isset($_GET['user'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'profile':
                    include "pages/Profile-Naoval.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'additem':
                    include "pages/Add-Naoval.php";
                    break;
                case 'register':
                    include "pages/Register-Naoval.php";
                    break;
                case 'login':
                    include "pages/Login-Naoval.php";
                    break;
                case 'creator-studio':
                    include "pages/ListCar-Naoval.php";
                    break;
                case 'approved':
                    include "pages/Approved-Naoval.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        } else {
            include "pages/Home-Naoval.php";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>