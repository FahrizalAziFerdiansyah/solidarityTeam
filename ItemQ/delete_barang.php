<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}

?>
<?php

  include 'koneksi.php';

  mysql_query("DELETE FROM barang WHERE id_barang='$_GET[id_barang]'");
?>
<script>
window.location='data_barang.php';
</script>
