<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">GO home</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table style="width: 25%;">
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
            <td>Gender (L/P)</td>
            <td><input type="text" name="jkel" id=""></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" id=""></td>
        </tr>
        <tr>
            <td>Tgl lahir</td>
            <td><input type="text" name="tglhr" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah" name="Submit"></td>
        </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jkel = $_POST['jkel'];
        $alamat = $_POST['alamat'];
        $tgllhr = $_POST['tglhr'];

        include_once("koneksi.php");

        $result = mysqli_query($connection, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tglhr)VALUES('$nim','$nama', '$jkel','$alamat','$tglhr')");

        echo 'data berhasil disimpan.<a href="index.php">View User</a>'; 
        
    }
    
    ?>
</body>
</html>