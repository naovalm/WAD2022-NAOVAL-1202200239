<section class="add form-section">
    <div class="container-fluid">
        <div class="add__header">
            <h1 class="add__title form-title">Upload Your NFT</h1>
            <p class="add__desc form-desc mb-4">TwoExchange the most largest NFT market place.</p>
        </div>
        <div class="form">
            <form action="config/insert.php" method="POST" enctype="multipart/form-data" class="add__form form-rent">
                <!-- dari sini     -->
                <div class="card text-center">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Upload Your Atwork Here</h4>
                        <p class="card-text">Upload your own work, avoid copyminting, we will act decisively for that!</p>
                        <img src="images/loading.png" width="300px" class="img-thumbnail mt-5" alt="...">
                        <div>
                            <label for="gambar" href="#" class="btn btn-primary mt-5">Upload</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*" style="display: none;visibility: none;">
                        </div>
                    </div>
                    <!-- sampe sini -->
                </div>
                <div class="card">
                    <div class="mb-4">
                        <label for="nama_mobil" class="form-label">Title</label>
                        <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="" placeholder="Artwork Title">
                    </div>
                    <label for="deskripsi" class="form-label">Description</label>
                    <div class="mb-4">
                        <textarea id="deskripsi" name="deskripsi" rows="10" cols="180" value="" placeholder="ArtWork Description"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="nama_pemilik" class="form-label">Wallet Address</label>
                        <input type="text" name="nama_pemilik" class="form-control bg-light fw-semibold" id="nama_pemilik" value=<?= $_COOKIE['wallet'] ?> readonly>
                    </div>
                    <div class="mb-4">
                        <label for="tgl_beli" class="form-label">Auction Date</label>
                        <input type="date" name="tgl_beli" class="form-control" id="date" value="">
                    </div>
                    <div class="mb-4">
                        <label for="merk" class="form-label">Price</label>
                        <input type="text" name="merk" class="form-control bg-light fw-semibold" id="merk" value="" placeholder="Input NFT Price">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Status</label>
                        <div class="form-radio-container">
                            <div class="form-radio">
                                <input class="form-radio-input" type="radio" name="status_bayar" id="status1" value="Paid">
                                <label class="form-radio-label" for="status1">Paid</label>
                            </div>
                            <div class="form-radio">
                                <input class="form-radio-input" type="radio" name="status_bayar" id="status2" value="Not Paid" checked>
                                <label class="form-radio-label" for="status2">Not Paid</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="form-rent-btn btn-primary" name="submit" value="Done">
                    <!-- <button type="submit" class="form-rent-btn btn-primary">Selesai</button> -->
            </form>
        </div>
    </div>
</section>