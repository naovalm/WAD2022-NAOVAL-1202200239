<?php
    
        include "connector.php";

        $nama_mobil = $_POST['nama_mobil'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $merk = $_POST['merk'];
        $tglBeli = $_POST['tgl_beli'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $status_bayar = $_POST['status_bayar'];
        
        move_uploaded_file($file_tmp, '../asset/'.$gambar);
        $query = mysqli_query($koneksi, "INSERT INTO showroom_naoval_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES('$nama_mobil','$nama_pemilik','$merk','$tglBeli','$deskripsi','$gambar','$status_bayar')");

        if($query) {
            header('Location: ../index.php?page=myitem&message=add-item');
        }
?>