<?php
session_start();
include 'koneksi.php';
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	
	if ($_POST['rombel'] > 2) {
		echo "<script>alert('rombel tidak boleh diatas 2')
					window.location='edit_kelas.php?id_kelas=$_POST[id_kelas]'</script>";
	}
	else{
		if ($_POST['rombel']) {
			# code...
		}
		//mysql_query("UPDATE kelas SET rombel = '$_POST[rombel]'");

	?>
<script>
window.location.href="data_kelas.php";
</script>
<?php
}
?>
