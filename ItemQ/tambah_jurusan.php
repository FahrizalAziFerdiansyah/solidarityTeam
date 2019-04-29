<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
include"koneksi.php";
$jurusan=$_POST['jurusan'];
mysql_query("insert into jurusan(jurusan) values('$jurusan')");
?>
<script>
window.location.href="data_jurusan.php";
</script>
