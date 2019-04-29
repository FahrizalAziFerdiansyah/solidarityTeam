<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
	include "koneksi.php";
	mysql_query("DELETE FROM peminjaman WHERE id_peminjaman = '$_GET[id_peminjaman]'");
?>

<script type="text/javascript">
	window.location="data_peminjaman.php";
</script>
