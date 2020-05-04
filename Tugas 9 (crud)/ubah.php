<?php
    include('koneksi.php');
    if(isset($_POST['edit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $no_telp =$_POST['no_telp'];
        $hobi = $_POST['hobi'];
        $sql = "UPDATE `tb_mhs` SET `nama`='$nama',`jenis_kelamin`='$jk',`alamat`='$alamat',`no_telp`='$no_telp',`hobi`='$hobi' WHERE `nim`='$nim'";
        $query = mysqli_query($koneksi, $sql);
        header("Location: crud_utama.php");
    }
    else if(isset($_POST['batal'])){
        header("Location: crud_utama.php");
    }

?>