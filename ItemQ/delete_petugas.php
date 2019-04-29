<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
  include 'koneksi.php';
  mysql_query("DELETE FROM login WHERE id_petugas='$_GET[id_petugas]'");
 ?>
<script type="text/javascript" language="JavaScript">
  window.location="data_petugas.php";
</script>
