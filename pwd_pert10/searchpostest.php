
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="datasearch.php" method="POST" name="nim">
<label>Cari :</label>
<input type="text" name="nim">
<input type="submit" value="Cari">
</form>

<?php
if(isset($_POST['nim'])){
$nim = $_POST['nim'];
echo "<b>Hasil pencarian : ".$nim."</b>";

}

if(isset($_POST['nim'])){
    $cari = $_POST['nim'];
    $url = "http://localhost:8080/pwd_pert10/datasearch.php";
 $client = curl_init($url); 
 curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
 $response = curl_exec($client);
 $result = json_decode($response, true);

 print_r($result);

// foreach ($result as $r) {
//  echo "<p>";
//  echo "NIM : " . $r['nim'] . "<br />";
//  echo "Nama : " . $r['nama'] . "<br />";
//  echo "jenis kel : " . $r['jkel'] . "<br />";
//  echo "Alamat : " . $r['alamat'] . "<br />";
//  echo "Tgl Lahir : " . $r['tglhr'] . "<br />";
//  echo "</p>";
// }
}
?>