<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
include"koneksi.php";
mysql_query("delete from jurusan where id_jurusan='$_GET[id_jurusan]'");
?>
<script>
window.location.href="update_jurusan.php";
</script>
