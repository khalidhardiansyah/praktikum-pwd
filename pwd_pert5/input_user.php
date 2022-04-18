<?php
include "koneksi.php"; #memanggil file koneksi.php
$id_user = $_POST['id_user']; #memanggil data yang telah diinputkan
 $nama = $_POST['nama']; #memanggil data yang telah diinputkan
 $email = $_POST['email']; #memanggil data yang telah diinputkan
$pass = md5($_POST['password']); #memanggil data yang telah diinputkan lalu di hash ke md5
$sql = "INSERT INTO user(id_user,password, nama_lengkap, email) VALUES ('$id_user', '$pass','$nama','$email')"; #perintah SWQL untuk input data ke tabel
$query=mysqli_query($con, $sql);#berisi fungsi mysqli_query yang berguna untuk mengirimkan perintah query untuk menginputkan data

mysqli_close($con); #menghentikan koneksi php ke server mysql dengan cara otomatis
header('location:tampil_user.php'); #akan direct ke tampil_user.php
?>