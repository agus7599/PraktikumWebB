<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <h1 class="title">Data Mahasiswa</h1>
            <br>
            <a href="tambah_data.php"><button>Tambah Data</button></a>
            <table border="1" cellpadding="8">
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Hobi</th>
                    <th>Pilihan</th>
                </tr>
                <?php
                    include('koneksi.php');
                    $sql = mysqli_query($koneksi,"SELECT * FROM `tb_mhs`");
                    if(mysqli_num_rows($sql)!=0){
                        $no=1;
                        while($data = $sql->fetch_array()){
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data['nim']."</td>";
                            echo "<td>".$data['nama']."</td>";
                            echo "<td>".$data['jenis_kelamin']."</td>";
                            echo "<td>".$data['alamat']."</td>";
                            echo "<td>".$data['no_telp']."</td>";
                            echo "<td>".$data['hobi']."</td>";
                            echo '<td><a href="ubah_data.php?nim='.$data['nim'].'"><button>Ubah</button></a> | <a href="hapus.php?nim='.$data['nim'].'"><button>Hapus</button></a></td>';    
                            $no++;
                        }
                    }        
                ?>
            </table>
        </div>
    </body>
</html>