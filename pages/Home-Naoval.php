<section class="home">
    <div class="home__left">
        <h1 class="home__title">Welcome to Largest NFT Market Place on Solana</h1>
        <p class="home__desc">Create and collect amazing digital art, without the negative environmental impact.</p>
        <a href="index.php?page=<?php echo mysqli_num_rows($result) ? "myitem&message=none" : "additem" ?>" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="home__btn bg-dark">My NFT</a>
        <div class="home__footnote">
            <img src="images/sponsor.png" alt="" class="home__logo">
        </div>
    </div>
    <div class="home__right">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/nfts4.png" class="d-block w-70" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/nfts2.png" class="d-block w-70" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/nfts3.png" class="d-block w-70" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>