<?php

$lokasi = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$desc = $_POST['deskripsi'];
$dir = "c:xampp/www/nim/$nama_file";

if(move_uploaded_file($lokasi, $dir)){
    echo "Nama File: <b>$nama_file</b> berhasil di upload <br>";
    echo "Deskripsi File :<br>$desc";
}
else {
 echo "File gagal diupload";
 }


?>