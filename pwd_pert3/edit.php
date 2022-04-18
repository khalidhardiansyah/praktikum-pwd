<?php
include_once("koneksi.php");

if(isset($_POST['update'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['jkel'];
    $tgllhr = $_POST['tgllhr'];

    $result = mysqli_query($con, "UPDATE mahasiswa SET
nama='$nama',jkel='$jkel',alamat='$alamat',tglhr='$tgllhr' WHERE nim='$nim'");
 // Redirect to homepage to display updated user in list
header("Location: index.php");
}

?>

<?php

$nim = $_GET['nim'];
$result = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE nim='$nim'");

while($user_data = mysqli_fetch_array($result)){
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['jkel'];
    $tglhr = $user_data['tglhr'];
}

?>

<html>
    <head>
        <title>Edit data</title>
    </head>

    <body>
        <a href="index.php">Home</a>

        <form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
</tr>
<tr>
<td>alamat</td>
<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
</tr>
<tr>
<td>Tgl Lahir</td>
<td><input type="text" name="tglhr" value=<?php echo $tglhr;?>></td>
</tr>
<tr>
<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>

    </body>
</html>