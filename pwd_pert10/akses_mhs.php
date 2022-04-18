<?php
//  //inisialisasi fungsi curl
//  $ch = curl_init();

//  curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/pwd_pert10/getdatamhs.php');

//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//  $content = curl_exec($ch);

//  curl_close($ch);

//  //mengubah data json menjadi data array asosiatif
//  $result=json_decode($content,true);

 $url = "http://localhost:8080/pwd_pert10/getdatamhs.php" .$_POST["nim"];
 $client = curl_init($url); 
 curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
 $response = curl_exec($client);
 $result = json_decode($response, true);


foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r['nim'] . "<br />";
 echo "Nama : " . $r['nama'] . "<br />";
 echo "jenis kel : " . $r['jkel'] . "<br />";
 echo "Alamat : " . $r['alamat'] . "<br />";
 echo "Tgl Lahir : " . $r['tglhr'] . "<br />";
 echo "</p>";
}