<section class="showroom">
    <div class="showroom__header">
        <h1 class="showroom__title">Buy your first NFT</h1>
        <p class="showroom__desc">Find your best NFT on TwoExchange </p>
    </div>

    <div class="showroom__container">
        <?php
        include 'config/connector.php';

        $result = mysqli_query($koneksi, "SELECT * FROM `showroom_naoval_table`");

        if ($result) {
            while ($data = mysqli_fetch_array($result)) {
        ?>
                <div class='card'>
                    <img src='images/<?= $data['foto_mobil'] ?>' alt='' class='card__img'>
                    <h1 class='card__title'><?= $data['nama_mobil'] ?></h1>
                    <p class='card__desc'><?= strlen($data['deskripsi']) > 120 ? substr($data['deskripsi'], 0, 100) . '...' : $data['deskripsi'] ?></p>
                    <div class='card__cta-container'>
                        <a href='index.php?page=detailnft&id=<?= $data['id_mobil'] ?>' class='card__detail-btn'>Detail</a>
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </div>

</section>