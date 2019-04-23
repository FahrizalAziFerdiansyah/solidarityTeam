<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
include "koneksi.php";
mysql_query("update jurusan set jurusan='$_POST[jurusan]' where id_jurusan='$_POST[id_jurusan]'");
?>
<script>
window.location.href="data_jurusan.php";
</script>
