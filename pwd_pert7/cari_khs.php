<?php
include 'koneksi.php';
?>
<h3>Form Pencarian DATA khs Dengan PHP </h3>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
<th>No</th>
<th>Nama mahasiswa</th>
<th>Kode MK</th>
<th>Nama MK</th>
<th>Nilai</th>
<th>NIM</th>
</tr>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="SELECT mahasiswa.nim, mahasiswa.nama, matkuliah.kode, matkuliah.namamk, khs.nilai FROM mahasiswa JOIN khs on mahasiswa.nim = khs.nim JOIN matkuliah ON matkuliah.kode = khs.kode WHERE mahasiswa.nim='$cari'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="SELECT mahasiswa.nim, mahasiswa.nama, matkuliah.kode, matkuliah.namamk, khs.nilai FROM mahasiswa JOIN khs on mahasiswa.nim = khs.nim JOIN matkuliah ON matkuliah.kode = khs.kode ";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nama']; ?></td>
<td><?php echo $r['kode']; ?></td>
<td><?php echo $r['namamk']; ?></td>
<td><?php echo $r['nilai']; ?></td>
<td><?php echo $r['nim']; ?></td>

</tr>
<?php } ?>
</table>