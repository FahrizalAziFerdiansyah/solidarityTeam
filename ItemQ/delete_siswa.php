<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
  include 'koneksi.php';
  mysql_query("DELETE FROM siswa WHERE id_siswa = '$_GET[id_siswa]'");
 ?>
<script type="text/javascript">
  window.location="data_siswa.php";
</script>
