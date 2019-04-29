<?php
error_reporting(0);
include"koneksi.php";
mysql_query("update login set nama_petugas='$_POST[nama_petugas]',username='$_POST[username]',password='$_POST[pass_baru]',level='$_POST[level]' where id_petugas='$_POST[id_petugas]'");
?>
<script>
window.location.href="tampil_hak_akses.php";
</script>