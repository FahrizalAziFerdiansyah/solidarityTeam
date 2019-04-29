<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
include "koneksi.php";
mysql_query("delete from guru where id_guru='$_GET[id_guru]'");
?>
<script>
window.location.href="data_guru.php";
</script>
