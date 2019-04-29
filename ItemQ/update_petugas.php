<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
include "koneksi.php";

$passbaru=$_POST['pass_baru'];
$konfirm=$_POST['konfirm_pass_baru'];
if($passbaru != $konfirm){
echo "<script>alert('Konfirmasi Password Baru Salah!!')
window.location.href='edit_petugas.php?id_petugas=$_POST[id_petugas]';</script>";
}
else if(empty($passbaru) && empty($konfirm)){
mysql_query("UPDATE login set kd_petugas='$_POST[kd_petugas]',nama_petugas='$_POST[nama_petugas]',username='$_POST[username]', level='$_POST[level]' WHERE id_petugas='$_POST[id_petugas]'");
echo"<script>
window.location='tampil_petugas.php';
</script>";

}
else if($passbaru == $konfirm){
mysql_query("UPDATE login set kd_petugas='$_POST[kd_petugas]' ,nama_petugas='$_POST[nama_petugas]',username='$_POST[username]',password='$_POST[pass_baru]', level='$_POST[level]' where id_petugas='$_POST[id_petugas]'");
echo"<script>
window.location='data_petugas.php';
</script>";

}

?>
		