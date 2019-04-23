<?php
include"koneksi.php";
$kd_petugas=$_POST['kd_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$q=mysql_query("insert into login (kd_petugas,nama_petugas,username,password,level)values('$kd_petugas','$nama_petugas','$username','$password','$level')");
?>
<script>
window.location.href="tampil_hak_akses.php";
</script>