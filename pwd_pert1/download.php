<?php
$Mydir = "c:xampp/www/nim/";
$dir = opendir($Mydir);
echo"isi folder(klik kanan untuk download)<br>";
while($tmp = readdir($dir)){
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
?>