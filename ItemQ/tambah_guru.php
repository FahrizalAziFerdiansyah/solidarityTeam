<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
  include 'koneksi.php';
  $nama_guru = $_POST['nama_guru'];
  mysql_query("INSERT INTO guru (guru) values ('$nama_guru')");
 ?>
 <script type="text/javascript">
   window.location="data_guru.php";
 </script>
