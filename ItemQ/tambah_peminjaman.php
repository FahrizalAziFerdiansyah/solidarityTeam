<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu');
	window.location.href='index.php'</script>";
}
	?>
<?php
	include "koneksi.php";

	date_default_timezone_set('Asia/Jakarta');
	$tgl_pinjam=date('Y-m-d H:i:s');
	$tgl = explode(' ', ($tgl_pinjam));
	$t = $tgl[0];
	$bts = $_POST['bts_kembali'];

	$bln = substr($tgl_pinjam,5,2)+1;
  $thn = substr($tgl_pinjam, 0,4);
  if($bln==13)
  {
    $bln = "01";
    $thn = $thn+1;
  }
  $tgl_batas = date($thn."-".$bln."-d");

  /*if ($bts > $tgl_batas) {
    echo "<script>alert('Batas pengembalian adalah 1 bulan !')";
  }
  else {
    echo "ok";
  }
	*/

	/*$selisih = $bts - $t;
	$years = $selisih / (365*60*60*24);
	$months = ($selisih - $years * 365*60*60*24) / (30*60*60*24);
	$days = floor(($selisih - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));*/

	$kd_barang = $_POST['kd_barang'];
	$jumlah = $_POST['jumlah'];
	$nis = $_POST['nis'];
	$status = 'Dipinjam';
	$kd_petugas = $_POST['kd_petugas'];
	$guru = $_POST['guru'];

	if ($bts < $t || $bts > $tgl_batas) {
		echo"<script>alert('Data tidak valid')
			window.location.href='data_peminjamanan.php'</script>";
	}
	else{

			mysql_query("insert into peminjaman(kode_barang,jumlah,br_rusak,tgl_pinjam,bts_kembali,status,id_guru,ket,nis,id_petugas)values('$kd_barang','$jumlah','0','$tgl_pinjam','$bts','$status','$guru', '-', '$nis','$_SESSION[id_petugas]')");

			$barang=$_POST['kd_barang'];
			mysql_query("update barang set stok = stok - $jumlah where kode_barang = '$barang'");

			$br = mysql_query("SELECT * FROM barang WHERE kode_barang = '$kd_barang'");
			$br2 = mysql_fetch_array($br);
			$dipinjam = $br2['jml_total'] - ($br2['jml_rusak'] + $br2['stok']);
			mysql_query("UPDATE barang SET jml_dipinjam = '$dipinjam' WHERE id_barang = '$br2[id_barang]'");
			//echo $tgl_batas;
			//echo "<script>window.location='tampil_peminjaman.php'</script>";
			echo"<script>window.location.href='data_peminjaman.php'</script>";
	}
	?>
