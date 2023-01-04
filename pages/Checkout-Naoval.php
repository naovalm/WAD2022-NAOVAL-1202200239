<section class="checkout form-section">
   <?php
   include 'config/connector.php';

   $id = $_GET['id'];

   $result = mysqli_query($koneksi, "SELECT * FROM showroom_naoval_table WHERE id_mobil=$id");
   $data = mysqli_fetch_assoc($result);
   ?>

   <div class="detail__header">
      <h1 class="detail__title form-title"><?= $data['nama_mobil'] ?></h1>
      <p class="detail__desc form-desc">Checkout <?= $data['nama_mobil'] ?></p>
   </div>
   <div class="detail__container">
      <img src="images/<?= $data['foto_mobil'] ?>" alt="" class="detail__img">
      <form action="" method="POST" class="detail__form form-rent">
         <div class="mb-4">
            <label for="nama_mobil" class="form-label">NFT Title</label>
            <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="<?= $data['nama_mobil'] ?>" readOnly>
         </div>
         <div class="mb-4">
            <label for="nama_pemilik" class="form-label">NFT Owner</label>
            <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="Naoval-1202204043" readOnly>
         </div>
         <div class="mb-4">
            <label for="merk" class="form-label">Price</label>
            <input type="text" name="merk" class="form-control bg-light" id="merk" value="<?= $data['merk_mobil'] ?>" readOnly>
         </div>
         <div class="mb-4">
            <label for="deskripsi" class="form-label">Description</label>
            <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" placeholder="Masukkan deskripsi mobil.." readOnly><?= $data['deskripsi'] ?></textarea>
         </div>
         <a href="index.php?page=checkout&id=<?= $data['id_mobil'] ?>" class="form-rent-btn btn-primary">Pay</a>
      </form>
   </div>
</section>