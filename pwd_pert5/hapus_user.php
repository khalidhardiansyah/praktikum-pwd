<?php
include "koneksi.php"; #memanggil file koneksi
$id_user = $_GET['id_user']; #untuk membuat data id user agar ditampilkan adalam file action
$sql="DELETE From user WHERE id_user ='$id_user' "; 
mysqli_query($con, $sql);
#variabel untuk menyimpan fungsi mysql_query yang berguna untuk mengirimkn perintah query untuk menghapus data dengan kondisi berdasarakn id user

 mysqli_close($con);#menghentikan koneksi php ke server mysql dengan cara otomatis
header('location:tampil_user.php'); #mendirect ke tampil_user.php
?>