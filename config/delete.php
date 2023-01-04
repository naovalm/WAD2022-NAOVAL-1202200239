<?php 
    include "connector.php";

    $id = $_GET['id'];
    
    $gambar = mysqli_query($koneksi, "SELECT foto_mobil FROM showroom_naoval_table WHERE id_mobil=$id");
    $dataGambar = mysqli_fetch_assoc($gambar);

    //Menghapus file gambar dari direktori folder
    unlink('../images/'.$dataGambar['foto_mobil']);
    
    $result = mysqli_query($koneksi, "DELETE FROM showroom_naoval_table WHERE id_mobil=$id");

    if($result) {
        header('Location: ../index.php?page=admin&message=delete-item');
    }
