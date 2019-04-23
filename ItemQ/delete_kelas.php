<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
include "koneksi.php";
mysql_query("delete from kelas where id_kelas='$_GET[id_kelas]'");
?>
<script>
window.location.href="data_kelas.php";
</script>
