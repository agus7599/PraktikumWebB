<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "style.php"; ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>

<body >
    <div id="main-content">
        <?php include 'header_dan_sidebar.php';?>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p style="text-align: justify;">Selamat datang di Perpustakaan Agus, perpustakaan berbasis
                online terlengkap yang menyediakan berbagai buku dan panduan dalam berbagai bidang.</p>
            <?php
                if(isset($_SESSION['role'])){
                    if($_SESSION['role']!='suadmin'){
            ?>
            
            <?php
                    }
                }
            ?>
        </div>
        <div id="clear"></div>

    </div>
</body>

</html>