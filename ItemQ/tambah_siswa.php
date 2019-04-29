<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
  include 'koneksi.php';
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
	$no_hp = $_POST['no_hp'];

	$q = mysql_query("SELECT nis FROM siswa WHERE nis = '$nis'");
	$d = mysql_fetch_array($q);

	if ($d >= 1) {
		echo "<script>
							alert('Siswa telah diinputkan !');
							window.location = 'add_siswa.php';
					</script>";
	}
	else {
		mysql_query("INSERT INTO siswa (nis, nama_siswa, id_kelas, no_hp) values ('$nis', '$nama', '$kelas', '$no_hp')");
		echo "<script>
		window.location = 'data_siswa.php';
		</script>";
	}

 ?>
 <script>
 //window.location.href="tampil_siswa.php";
 </script>
