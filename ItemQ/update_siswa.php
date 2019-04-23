<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
  include 'koneksi.php';
  mysql_query("UPDATE siswa SET nis = '$_POST[nis]', nama_siswa = '$_POST[nama]', id_kelas='$_POST[kelas]', no_hp='$_POST[no_hp]' where id_siswa = '$_POST[id_siswa]'");
 ?>
<script type="text/javascript">
  window.location="data_siswa.php";
</script>
