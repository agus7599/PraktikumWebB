<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Data</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Data</h1><br>
        <table>
            <form action="tambah.php" method="POST">
                <tr>
                    <td><label for="nim">NIM :</label></td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama :</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis Kelamin :</label></td>
                    <td>
                        <select name="jk" id="jk">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                </tr>  
                <tr>
                    <td><label for="alamat">Alamat:</label></td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td><label for="no_telp">No. Telepon :</label></td>
                    <td><input type="text" name="no_telp" id="no_telp"></td>

                </tr>
                <tr>
                    <td><label for="hobi">Hobi :</label></td>
                    <td><input type="text" name="hobi" id="hobi"></td>

                </tr>
                <tr>
                    <td><input type="submit" name="tambah" value="tambah"></td>
                    <td><input type="submit" name="batal" value="batal"></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>