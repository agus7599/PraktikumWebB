<?php
    include('koneksi.php');
    if(isset($_POST['tambah'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $no_telp =$_POST['no_telp'];
        $hobi = $_POST['hobi'];
        
        $query = mysqli_query($koneksi, "INSERT INTO `tb_mhs`(`nim`, `nama`, `jenis_kelamin`, `alamat`, `no_telp`, `hobi`) VALUES ('$nim','$nama','$jk','$alamat','$no_telp','$hobi')");
        header("Location: crud_utama.php");
    }
    else if(isset($_POST['batal'])){
        header("Location: crud_utama.php");
    }

?>