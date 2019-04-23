<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
include "koneksi.php";
mysql_query("update guru set guru='$_POST[guru]' where id_guru='$_POST[id_guru]'");
?>
<script>
window.location.href="data_guru.php";
</script>
