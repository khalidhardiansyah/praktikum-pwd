<?php
echo "<h2>User</h2>
<form method=POST action='form_user.php'>
<input type=submit value='Tambah User'>
</form>
<table>
<tr><th>No</th><th>Username</th><th>NamaLengkap</th><th>Email</th><th>Aksi</th
></tr>";
include "koneksi.php"; #memanggil file koneksi 
$sql="SELECT * FROM user order by id_user"; #sintak untuk mencetak semua isi tabel ordr by id
$tampil = mysqli_query($con,$sql); #berisi fungsi mysqli_query yang berguna untuk mengirimkan perintah query untuk melihat semua data
if (mysqli_num_rows($tampil) > 0) {  #jika baris data lebih dari 0 maka akan menjalankan perintah dibawah 
$no=1; #no
while ($r = mysqli_fetch_array($tampil)) #perulangan untuk mengambil data mysql ke bentuk array asosiatif dan numerik
{
echo "<tr><td>$no</td><td>$r[id_user]</td> 
<td>$r[nama_lengkap]</td>
<td>$r[email]</td>
<td><a href='hapus_user.php?id_user=$r[id_user]'>Hapus</a></td>
</tr>";
 $no++;
}
echo "</table>";
} else {
 echo "0 results";
 }
 mysqli_close($con);  #menghentikan koneksi php ke server mysql dengan cara otomatis
?>
 