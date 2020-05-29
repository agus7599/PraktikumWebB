<?php
    session_start();
    $id_pinjam = $_GET['id'];
    include_once('koneksi.php');
    $database = new database();
    $query = "UPDATE pinjaman SET status='batal' WHERE id_pinjam=$id_pinjam;";
    $result = mysqli_query($database->koneksi,$query);
    if($result){
        header('location:peminjaman_admin');
    }
    else{
        echo "Gagal!<br><a href=\"peminjaman_admin.php\">Kembali</a>";
    }
?>