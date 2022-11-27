<?php 
    include 'config/connector_user.php';

    $email = $_COOKIE['email'];
    $query = mysqli_query($koneksi_user, "SELECT * FROM `user_naoval` WHERE email = '$email'");
    $data = mysqli_fetch_assoc($query);
?>

<section class="profile">
    <h1 class="profile__title">Profile</h1>
    <form action="config/editProfile.php" method="post" class="profile__form">
        <div class="top">
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control bg-light profile__input-email" id="email" value="<?= $email ?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control bg-light" id="nama" value="<?= $data['nama'] ?>" placeholder="Masukkan nama">
            </div>
            <div class="mb-4">
                <label for="no_hp" class="form-label">Nomor Handphone</label>
                <input type="text" name="no_hp" class="form-control bg-light" id="no_hp" value="<?= $data['no_hp'] ?>" placeholder="Masukkan no handphone">
            </div>
        </div>
        <div class="mb-4 profile__separator"></div>
        <div class="bottom">
            <div class="mb-4">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control bg-light" id="password" value="" placeholder="Kata sandi">
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" name="confirm_password" class="form-control bg-light" id="confirm_password" value="" placeholder="Konfirmasi kata sandi">
            </div>
            <div class="mb-4">
                <label for="warna" class="form-label">Warna Navbar</label>
                <select class="form-select form-select-lg" name="warna_nav" id="warna" aria-label="Warna navbar">
                    <option value="" disabled>Pilih warna navbar</option>
                    <option <?= !isset($_COOKIE['navbar']) ? 'selected' : '' ?> value="">Default</option>
                    <option <?= isset($_COOKIE['navbar']) && $_COOKIE['navbar'] == 'brown' ? 'selected' : '' ?> value="brown">Brown</option>
                    <option <?= isset($_COOKIE['navbar']) && $_COOKIE['navbar'] == 'green' ? 'selected' : '' ?> value="green">Green</option>
                    <option <?= isset($_COOKIE['navbar']) && $_COOKIE['navbar'] == 'yellow' ? 'selected' : '' ?> value="yellow">Yellow</option>
                </select>
            </div>
        </div>
        <input type="submit" name="update-profile" value="Update" class="profile__btn">
        <div class="home__footnote">
            <img src="asset/logo-ead.png" alt="" class="home__logo">
            <p>NAOVAL_1202200239</p>
        </div>
    </form>
</section>
