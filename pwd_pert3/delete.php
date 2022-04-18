<?php

include_once("koneksi.php");
$nim = $_GET['nim'];

$result = mysqli_query($connection, "DELETE FROM mahasiswa WHERE nim='$nim'");

if($result){
    header("Location:index.php");
}else echo "gagal";



?>