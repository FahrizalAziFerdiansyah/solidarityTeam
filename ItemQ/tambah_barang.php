<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
	include "koneksi.php";

	$postkode_barang=$_POST['kd_barang'];
	$nama_barang=$_POST['nama_barang'];
	$total=$_POST['total'];
	$spek = $_POST['spek'];

	if (empty($spek || $total <= 0 || $_FILES['foto']=='')) {
		echo"<script>alert('Data tidak valid')
		window.location.href='add_barang.php'</script>";
	}

	$q = mysql_query("SELECT kode_barang,nama_barang FROM barang WHERE kode_barang = '$postkode_barang' OR nama_barang = '$nama_barang'");
	$d = mysql_fetch_array($q);

	if ($d >= 1) {
		echo "<script>
							alert('Barang telah Tersedia');
							window.location = 'data_barang.php';
					</script>";
	}
	else {
		$namafolder="assets/img/foto";
		$fotoname = $_FILES['foto']['name'];
		$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/foto/'.$fotoname);
		mysql_query("insert into barang
		(kode_barang,nama_barang,jml_total, stok, jml_rusak, foto, spesifikasi)values('$postkode_barang','$nama_barang','$total', '$total',0, '$fotoname', '$_POST[spek]')");
		echo "<script>
		window.location = 'data_barang.php';
		</script>";
	}

?>

<script>
	//window.location.href="tampil_barang.php";
</script>
