<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}
	?>
<?php
	include 'koneksi.php';
	mysql_query("UPDATE peminjaman set kode_barang='$_POST[kd_barang]',jumlah='$_POST[jumlah]',nis='$_POST[nis]' WHERE id_peminjaman = '$_POST[id_peminjaman]'");

	echo "
			<script> alert('Proses pengembalian sukses !!')
				window.location='data_peminjaman.php'</script>
		";

 ?>
