<section class="detailnft form-section">
   <?php
   include 'config/connector.php';

   $id = $_GET['id'];

   $result = mysqli_query($koneksi, "SELECT * FROM showroom_naoval_table WHERE id_mobil=$id");
   $data = mysqli_fetch_assoc($result);
   ?>

   <div class="detail__header">
      <h1 class="detail__title form-title"><?= $data['nama_mobil'] ?></h1>
      <p class="detail__desc form-desc">Detail Mobil <?= $data['nama_mobil'] ?></p>
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
            <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="<?= $data['pemilik_mobil'] ?>" readOnly>
         </div>
         <div class="mb-4">
            <label for="merk" class="form-label">Price</label>
            <input type="text" name="merk" class="form-control bg-light" id="merk" value="<?= $data['merk_mobil'] ?>" readOnly>
         </div>
         <div class="mb-4">
            <label for="deskripsi" class="form-label">Description</label>
            <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" placeholder="Masukkan deskripsi mobil.." readOnly><?= $data['deskripsi'] ?></textarea>
         </div>
         <!-- Button trigger modal -->
         <div class="buy-status d-flex ">
            <div class="buy-button">
               <button type="button" class="form-rent-btn bg-dark" data-bs-toggle="modal" data-bs-target="#modal<?php echo $data['id_mobil'] ?>">
                  Buy this NFT
               </button>
            </div>
            <div class="pay-status ms-5">
               <div class="mb-4">
                  <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="<?= $data['status_pembayaran'] ?>" readOnly>
               </div>
            </div>
         </div>
      </form>

      <!-- Modal -->
      <div class="modal fade" id="modal<?php echo $data['id_mobil'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-1 fw-semibold mt-2 mb-2" id="exampleModalLabel">&ensp; &ensp; Buy this NFT for <?php echo $data['nama_mobil'] ?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="container-payment">
                     <div class="nft-image-modal">
                        <img src="images/<?= $data['foto_mobil'] ?>" alt="" width="700px">
                     </div>
                     <div class="nft-detail-payment">
                        <form action="">
                           <div class="mb-4">
                              <label for="exampleInputEmail1" class="form-label fs-2 fw-bold">NFT Price</label>
                              <div id="emailHelp" class="form-text fs-5 mb-2">All transaction will apprear on Blockchain</div>
                              <input type="email" class="form-control fs-3 mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data['merk_mobil'] ?>" readonly>
                              <div id="emailHelp" class="form-text fs-5 mb-3">This fixed price not Auction.</div>
                           </div>
                        </form>
                        <div class="wallet-container mt-5">
                           <p class="fs-5 fw-bold mb-2 ms-3 mt-3">YOUR WALLET BALANCE</p>
                           <p class="fs-2 fw-normal ms-3 mb-3">10.76 SOL (~$102.25)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary fs-3" data-bs-dismiss="modal">Cancel</button>
                  <a href="index.php?page=approved">
                     <button type="button" class="btn bg-dark text-light fs-3" data-bs-dismiss="modal">Buy NFT</button>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>