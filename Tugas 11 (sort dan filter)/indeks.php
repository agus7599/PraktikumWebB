<?php
    require_once('database.php');
    require_once('koneksi.php');
    require_once('sorting.php');
    $connection = new koneksi($host,$user,$pass,$database);
    $perpus = new sorting($connection);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <table class="table table-bordered" cellpadding="" style="text-align: center;">
        <thead>
            <form action="" method="POST">
            <tr>
            <th>Filter</th>
                <td>
                    <input type="text " name="q" placeholder="Cari">
                    <select name="column" >
                        <option value="">Jenis Pencarian</option>
                        <option value="judul_buku">Judul Buku</option>
                        <option value="penulis_buku">Penulis Buku</option>
                        <option value="penerbit_buku">Penerbit Buku</option>
                        <option value="tahun_terbit">Tahun Terbit</option>
                        <option value="stok">Stok Buku</option>
                    </select>
                    <input type="submit" name="submit" id="" value="cari">
                </td>
            </tr>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul Buku <br><input type="submit" value="ASC" name="judul_buku"><input type="submit" value="DESC" name="judul_buku"></th>
                <th scope="col">Penulis Buku <br><input type="submit" value="ASC" name="penulis_buku"><input type="submit" value="DESC" name="penulis_buku"></th>
                <th scope="col">Penerbit Buku<br><input type="submit" value="ASC" name="penerbit_buku"><input type="submit" value="DESC" name="penerbit_buku"></th>
                <th scope="col">Tahun Penerbit<br><input type="submit" value="ASC" name="tahun_terbit"><input type="submit" value="DESC" name="tahun_terbit"></th>
                <th scope="col">Jumlah Stok Buku<br><input type="submit" value="ASC" name="stok"><input type="submit" value="DESC" name="stok"></th>
            </tr>
            </form>
        </thead>
        <tbody>
        <?php
            $no = 1;
            $sort = "";
            if(empty($sort)){
                $tampil = $perpus->tampil();
            }
            if (isset($_POST["judul_buku"]) )
            {
                $sort =  $_POST["judul_buku"]; 
                $tampil = $perpus->tampilsort($sort,"judul_buku");  
            }
            if (isset($_POST["penulis_buku"]) )
            {
                $sort =  $_POST["penulis_buku"]; 
                $tampil = $perpus->tampilsort($sort,"penulis_buku"); 
            }
            if (isset($_POST["penerbit_buku"]) )
            {
                $sort =  $_POST["penerbit_buku"]; 
                $tampil = $perpus->tampilsort($sort,"penerbit_buku"); 
            }
            if (isset($_POST["tahun_terbit"]) )
            {
                $sort =  $_POST["tahun_terbit"]; 
                $tampil = $perpus->tampilsort($sort,"tahun_terbit");   
            }
            if (isset($_POST["stok"]) )
            {
                $sort =  $_POST["stok"]; 
                $tampil = $perpus->tampilsort($sort,"stok");    
            }
            if(isset($_POST['submit'])){
                $q = $_POST['q'];
                $column =  $_POST['column'];
                if($q!="" AND $column!=""){
                    $tampil = $perpus->filter($q,$column);
                }
            }
            while($data = $tampil->fetch_object()){
        ?>
        <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <td><?php echo $data->judul_buku; ?></td>
            <td><?php echo $data->penulis_buku; ?></td>
            <td><?php echo $data->penerbit_buku; ?></td>
            <td><?php echo $data->tahun_terbit; ?></td>
            <td><?php echo $data->stok; ?></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>
    </body>
</html>