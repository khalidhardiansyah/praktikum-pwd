<?php
$nama =  $_POST['nama'];
$alamat = $_POST['alamat'];
$email =$_POST['email'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];
echo'<head><title></title></head>';
$fp = fopen('guestbook.txt', 'a+');
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);
echo'Terimkasih atas partisipasi anda mengisi buku tamu<br>';
echo'<a href="tampilan.php">isi buku tamu</a>';
echo'<a href="lihat.php">lihat buku tamu</a>';


?>