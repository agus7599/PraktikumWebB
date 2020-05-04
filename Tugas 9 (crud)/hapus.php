<?php 
    
    include('koneksi.php');
    if(isset($_GET['nim'])){
        $nim = $_GET['nim'];
        $sql= mysqli_query($koneksi,"DELETE FROM `tb_mhs` WHERE `nim`='$nim'");
        header("location:crud_utama.php");
    }
    
    
?>