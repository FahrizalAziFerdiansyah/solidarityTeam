<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu');
	window.location.href='login.php'</script>";
}

include"koneksi.php";
$nis = $_GET['nis'];
$query = "SELECT * FROM siswa WHERE nis = '$nis'";
$hasil = mysql_query($query);

$row = mysql_num_rows($hasil);
if($row > 0) {
	$data = mysql_fetch_assoc($hasil);
	echo json_encode($data);
} else {

}
?>
