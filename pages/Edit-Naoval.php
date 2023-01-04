<section class="edit form-section">
    <?php
    include 'config/connector.php';

    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM showroom_naoval_table WHERE id_mobil=$id");
    $data = mysqli_fetch_assoc($result);
    ?>

    <div class="edit__header">
        <h1 class="edit__title form-title">Edit</h1>
        <p class="edit__desc form-desc">Edit NFt <?= $data['nama_mobil'] ?></p>
    </div>
    <div class="edit__container">
        <img src="images/<?= $data['foto_mobil'] ?>" alt="" class="edit__img">
        <form action="config/edit.php" method="POST" enctype="multipart/form-data" class="edit__form form-rent">
            <div class="mb-4">
                <label for="nama_mobil" class="form-label">Title</label>
                <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="<?= $data['nama_mobil'] ?>">
            </div>
            <div class="mb-4">
                <label for="nama_pemilik" class="form-label">NFT Owner</label>
                <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="<?= $data['pemilik_mobil']?>">
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label">Chain</label>
                <input type="text" name="merk" class="form-control bg-light" id="merk" value="<?= $data['merk_mobil'] ?>">
            </div>
            <div class="mb-4">
                <label for="tgl_beli" class="form-label">Auction Date</label>
                <input type="date" name="tgl_beli" class="form-control" id="date" value="<?= $data['tanggal_beli'] ?>">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Description</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" value="" placeholder="Masukkan deskripsi mobil.."><?= $data['deskripsi'] ?></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="form-label">NFT Image</label>
                <input type="file" name="gambar" id="gambar" accept="image/*">
                <p class='form-img-detail'>current image: <span><?= $data['foto_mobil'] ?></span></p>
            </div>
            <div class="mb-4">
                <label class="form-label">Payment Status</label>
                <div class="form-radio-container">
                    <div class="form-radio">
                        <input class="form-radio-input" type="radio" name="status_bayar" id="status1" value="Paid" <?php echo $data['status_pembayaran'] == 'lunas' ? 'checked' : '' ?>>
                        <label class="form-radio-label" for="status1">Paid</label>
                    </div>
                    <div class="form-radio">
                        <input class="form-radio-input" type="radio" name="status_bayar" id="status2" value="Not Paid" <?php echo $data['status_pembayaran'] == 'belum lunas' ? 'checked' : '' ?>>
                        <label class="form-radio-label" for="status2">Not yet paid</label>
                    </div>
                </div>
            </div>
            <input type="submit" class="form-rent-btn btn-primary" name="ubah" value="Save">
            <input type="hidden" name="id" value="<?= $data['id_mobil'] ?>">
            <!-- <button type="submit" class="form-rent-btn btn-primary">Simpan</button> -->
        </form>
    </div>
</section>