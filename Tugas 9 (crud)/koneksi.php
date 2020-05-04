<?php 
	$koneksi= mysqli_connect('localhost', 'root', '', 'db_mhs');
	if(!$koneksi){
		echo "Koneksi gagal!";
		exit();
	}
?>