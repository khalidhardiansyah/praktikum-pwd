<?php
$hostname = "localhost"; #variabel untuk menyimpan host
$username = "root"; #variabel untuk menyeimpan username database
$password = ""; #variabel untuk menyimpan password database
$database = "akademik"; #var untuk menyimpan nama database

$con= mysqli_connect($hostname,$username,$password,$database);
#variabel untuk menyimpan fungsi yang digunakan untuk menghubungkan ke mysql 
echo"status database : ";
if($con) { #jika connection tidak berjalan maka
 echo "database connected"; 
} else {
 echo "database not connected";  #akan menjalankan perintah 
} 


?>