<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php

include"koneksi.php";
$kode = $_GET['kode'];
$query = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$hasil = mysql_query($query);

$row = mysql_num_rows($hasil);
if($row > 0) 
{
	$data = mysql_fetch_assoc($hasil);
	echo json_encode($data);
} 
else {
	
}