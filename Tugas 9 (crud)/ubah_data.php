<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data</title>
</head>
<body>
    <div class="container">
    
        <h1 class="title">Ubah Data</h1><br>
        <table>
            <?php
                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                include('koneksi.php');
                $nim = $_POST['nim'];
                $sql = mysqli_query($koneksi,"SELECT * FROM `tb_mhs` WHERE `nim`='$nim'");
                $data = mysqli_fetch_array($sql)
                 
            ?>
            <form action="ubah.php" method="POST">
                <tr>
                    <td><label for="nik">NIM :</label></td>
                    <td><input type="text" name="nim" id="nim" value="<?php echo $data['nim'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama :</label></td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis Kelamin :</label></td>
                    <td>
                        <select name="jk" id="jk">
                            <option value="L" <?php if($data['jenis_kelamin']=='L'){echo "selected";} ?>>Laki-laki</option>
                            <option value="P" <?php if($data['jenis_kelamin']=='P'){echo "selected";} ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>  
                <tr>
                    <td><label for="alamat">Alamat :</label></td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="3"><?php echo $data['alamat'] ?></textarea></td>
                </tr>
                <tr>
                    <td><label for="no_telp">No. Telepon :</label></td>
                    <td><input type="text" name="no_telp" id="no_telp" value="<?php echo $data['no_telp'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="hobi">Hobi :</label></td>
                    <td><input type="text" name="hobi" id="hobi" value="<?php echo $data['hobi'] ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="edit" value="edit"></td>
                    <td><input type="submit" name="batal" value="batal"></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>