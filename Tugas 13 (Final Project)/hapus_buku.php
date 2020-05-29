<?php
$id_buku = $_GET['id_buku'];
include_once('koneksi.php');
$database = new database();
$query = "DELETE FROM buku WHERE id_buku=$id_buku;";
$result = mysqli_query($database->koneksi,$query);
if($result){
    header('location:data_buku.php');
}
else{
    echo "Hapus Buku Gagal!<br><a href=\"data_buku.php\">Kembali</a>";
}
?>