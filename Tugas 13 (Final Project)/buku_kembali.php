<?php
    session_start();
    $id_pinjam = $_GET['id_pinjam'];
    $id_buku = $_GET['id_buku'];
    include_once('koneksi.php');
    $database = new database();
    $query = "UPDATE pinjaman SET status='dikembalikan' WHERE id_pinjam=$id_pinjam;";
    $query2 = "UPDATE buku SET stok=(stok+1) WHERE id_buku=$id_buku;";
    $result = mysqli_query($database->koneksi,$query);
    $result2 = mysqli_query($database->koneksi,$query2);
    if($result && $result2){
        header('location:peminjaman_admin.php');
    }
    else{
        echo "Gagal!<br><a href=\"peminjaman_admin.php\">Kembali</a>";
    }
?>