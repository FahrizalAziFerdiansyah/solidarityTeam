<?php
	session_start();
	if(empty($_SESSION['username']) || $_SESSION['level'] != "admin"){
	echo"<script>alert('anda tidak bisa mengakses halaman ini !')
	window.location.href='login.php'</script>";
	}

	include"koneksi.php";
	$nama_petugas=$_POST['nama_petugas'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$konfirm = $_POST['konfirm'];
	$level = $_POST['level'];

	if ($password != $konfirm) {
		echo "<script>alert('Konfirmasi password salah !')
			window.location='input_petugas.php'</script>
		";
	}
else {
	mysql_query("insert into login(nama_petugas,username,password,level)values( '$nama_petugas', '$username', '$password', '$level')");
	echo "<script>
		window.location.href='tampil_hak_akses.php';
	</script>
";
}

?>
