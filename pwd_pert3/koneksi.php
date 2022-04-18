<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "akademik"; 

$connection= mysqli_connect($hostname,$username,$password,$database); 
echo"status database : ";
if($connection) {
 echo "database connected"; 
} else {
 echo "database not connected"; 
} 


?>