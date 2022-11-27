<section class="home">
    <div class="home__left">
        <h1 class="home__title">Selamat Datang di Show Room Naoval</h1>
        <p class="home__desc">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        <a href="index.php?page=<?php echo mysqli_num_rows($result) ? "myitem&message=none" : "additem" ?>" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="home__btn">MyCar</a>
        <div class="home__footnote">
            <img src="asset/logo-ead.png" alt="" class="home__logo">
            <p>NAOVAL_1202200239</p>
        </div>
    </div>
    <div class="home__right">
        <img src="asset/mustang.png" alt="">
    </div>
</section>