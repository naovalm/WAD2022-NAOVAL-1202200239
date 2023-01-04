<?php

        include "connector.php";

        if(isset($_POST['ubah'])) {
            $id = $_POST['id'];
            $nama_mobil = $_POST['nama_mobil'];
            $nama_pemilik = $_POST['nama_pemilik'];
            $merk = $_POST['merk'];
            $tglBeli = $_POST['tgl_beli'];
            $deskripsi = $_POST['deskripsi'];
            $gambar = $_FILES['gambar']['name'];
            $file_tmp = $_FILES['gambar']['tmp_name'];
            $status_bayar = $_POST['status_bayar'];
    
            if($file_tmp) {
                move_uploaded_file($file_tmp, '../images/'.$gambar);
                $query = mysqli_query($koneksi, "UPDATE showroom_naoval_table SET nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tglBeli', deskripsi='$deskripsi', foto_mobil='$gambar', status_pembayaran='$status_bayar' WHERE id_mobil=$id");
            } else {
                $query = mysqli_query($koneksi, "UPDATE showroom_naoval_table SET nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tglBeli', deskripsi='$deskripsi', status_pembayaran='$status_bayar' WHERE id_mobil=$id");
            }       

            header('Location: ../index.php?page=admin&message=update-item');
        }
