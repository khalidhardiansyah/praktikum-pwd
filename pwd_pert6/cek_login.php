<?php
session_start();
include "koneksi.php"; #memanggil file koneksi
$id_user = $_POST['id_user']; #memanggil data yang telah diinputkan
$pass= md5($_POST['paswd']); #memanggil data yang telah diinputkan
$no_hp = $_POST['no_hp'];#memanggil data yang telah diinputkan
$sql = "SELECT * FROM user WHERE id_user='$id_user' AND password='$pass'"; 
#syntak kondisi untuk login dengan persamaan id_user
if($_POST["captcha_code"] == $_SESSION["captcha_code"]){
#mengecek user apakah menginput captcha dengan benar


$login= mysqli_query($con, $sql); #var menyimpan fungsi mysqli_query yang berguna untuk mengirimkan perintah query
$ketemu = mysqli_num_rows($login); #untuk mengetahui berapa banyak baris data yang ada di database
$r= mysqli_fetch_array($login); #menangkap data dari hasil perintah query dan membentuknya ke dalam array asosiatif dan array numerik
if ($ketemu > 0){ #jika baris data lebih dari 0 maka akan menjlanakan perintah dibawah
//  session_start();#memulai eksekusi session pada server dan kemudian menyimpannya pada browser
 $_SESSION['iduser'] = $r['id_user']; #mendaftarkan sebuah session
 $_SESSION['passuser'] = $r['password']; #mendaftarkan sebuah session
 $_SESSION['nohp'] = $r['no_hp'];#mendaftarkan sebuah session
echo"USER BERHASIL LOGIN<br>";
echo "id user = ",$_SESSION['iduser'],"<br>"; #menampilkan id user
echo "password = ",$_SESSION['passuser'],"<br>"; #menampilkan pasword user
echo "no hp = ",$_SESSION['nohp'],"<br>"; #menampilkan no hp user
echo "<a href=form_login.php><b>LOGOUT</b></a></center>"; #link untuk logout
}
else{ #perintah akan ditampilkan jika login gagal
echo "<center>Login gagal! username & password tidak benar<br>";
echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con); #menghentikan koneksi php ke server mysql dengan cara otomatis
}else{ #akan dieksekusi jika user menginput captcha tidak sesuai
    echo "<center>Login gagal! Captcha tidak sesuai<br>"; #menampilkan login gagal
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";  #menampilkan link jika login gagal
}
?>