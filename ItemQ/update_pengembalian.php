<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php
	include 'koneksi.php';

	date_default_timezone_set('Asia/Jakarta');
	$tgl_kembali=date('Y-m-d H:i:s');

	$kd_barang = $_POST['kd_barang'];
	$jumlah = $_POST['jumlah'];
	$nis = $_POST['nis'];
	$br_rusak = $_POST['br_rusak'];


	$query = mysql_query("SELECT * FROM peminjaman WHERE id_peminjaman = '$_POST[id_peminjaman]'");
	$data = mysql_fetch_array($query);

	if ($kd_barang != $data['kode_barang'] || $jumlah != $data['jumlah'] || $nis != $data['nis'] || $br_rusak > $data['jumlah']) {
		echo 
			print_r($_POST);
		;
	}
	else{

		$qs=mysql_query("SELECT * FROM barang WHERE kode_barang= '$_POST[kd_barang]'");
		$ds = mysql_fetch_array($qs);

		$j = $ds['stok'] + $jumlah;

		mysql_query("UPDATE barang SET jml_rusak = '$ds[jml_rusak]' + '$br_rusak' WHERE kode_barang = '$_POST[kd_barang]'");

		$up = mysql_query("SELECT jml_total, stok, jml_dipinjam, jml_rusak FROM barang WHERE kode_barang= '$_POST[kd_barang]'");
		$op = mysql_fetch_array($up);
		$dipinjam = $op['jml_dipinjam'] - $jumlah;
		mysql_query("UPDATE barang SET stok = '$op[jml_total]' - '$op[jml_rusak]', jml_dipinjam = '$dipinjam' WHERE kode_barang = '$_POST[kd_barang]'");


		mysql_query("UPDATE peminjaman SET status= 'Dikembalikan ', br_rusak = '$br_rusak', tgl_kembali='$tgl_kembali' WHERE id_peminjaman = '$_POST[id_peminjaman]'");

		echo "
			<script> alert('Proses pengembalian sukses !!')
				window.location='data_peminjaman.php'</script>
		";
	}


?>
