<?php
include_once('koneksi.php');
$database = new database();
session_start();
// ambil data file
$bookId = $_POST['id_buku'];
$namaFile = $_FILES['foto_buku']['name'];
$namaSementara = $_FILES['foto_buku']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "foto/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
$query = "UPDATE buku SET pic = '$namaFile' WHERE id_buku=$bookId;";
$result = mysqli_query($database->koneksi, $query);

if($terupload&&$result) {
    header('data_buku.php');
} else {
    echo "Upload Gagal!";
    echo "<a href=\"data_buku.php\">Kembali</a>";
}

?>