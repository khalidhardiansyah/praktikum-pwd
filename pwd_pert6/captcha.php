<?php
session_start(); #untuk menerima file kode captcha masukan ke json
$random_alpha = md5(rand()); #variabel untuk mengacak yang di enkripsi md5
$captcha_code = substr($random_alpha, 0, 6); #hasil acak karakter alfanumerik mennggunakan fitur php yang mulai dari 0 dan panjang 6
$_SESSION["captcha_code"] = $captcha_code; #dimasukan ke dalam session
$target_layer = imagecreatetruecolor(70,30); #dibuat target layer ukuran 70 x 30 pixel
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); #membuat background captcha berwarna salmon
imagefill($target_layer,0,0,$captcha_background); #mengisi background
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); #warna captcha
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg"); #memformat menjadi jpg
imagejpeg($target_layer); #mengirim image header dengan tipe mime ke browser
?>