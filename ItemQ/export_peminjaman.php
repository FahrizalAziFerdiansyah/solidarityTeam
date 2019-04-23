<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data peminjaman.xls");

if ($_GET['filter'] == "filter") {
	$filter = $_GET['filter'];
	$awal = $_GET['awal'];
	$akhir = $_GET['akhir'];
}
$tgl1 = date_format(date_create($awal), 'd-m-Y');
$tgl2 = date_format(date_create($akhir), 'd-m-Y');
echo "<center><b>Data peminjaman dari tanggal ".$tgl1." sampai ".$tgl2."</center></b><br>";
?>

<table border="1">
	<tr>
	<th>No</th>
	<th>Kode Barang</th>
	<th>Nama Barang</th>
	<th>Jumlah</th>
	<th>NIS</th>
	<th>Nama Siswa</th>
	<th>Guru Pengajar</th>
	<th>Status</th>
	<th>Tanggal Peminjaman</th>
	<th>Batas Pengembalian</th>
	<th>Tanggal Pengembalian</th>
	<th>Keterangan</th>
	<th>Nama Petugas</th>
	</tr>

  <?php
	include "koneksi.php";

		$result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas JOIN guru as g on p.id_guru = g.id_guru WHERE p.tgl_pinjam between '$awal 00:00' and '$akhir 23:59' ORDER BY p.id_peminjaman ASC");

		$no = 1;
  		while($data=mysql_fetch_array($result)){
				$tgl = explode (' ', $data['tgl_pinjam']);
				$date = $tgl[0];
				$jam = $tgl[1];
				$date = date_format(date_create($date), 'd-m-Y');

				date_default_timezone_set('Asia/Jakarta');
				$hari=date('Y-m-d');

				$batas = date($data['bts_kembali']);

				if (empty($data['tgl_kembali']) && $hari > $batas) {
					/*$selisih = abs(strtotime($hari) - strtotime($batas));
					$years = floor($selisih / (365*60*60*24));
					$months = floor(($selisih - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($selisih - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

					$denda = $days * 5000;*/
					mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
					//$ket = "Telat";
				}
				else if ($data['tgl_kembali'] == '' && $hari == $batas) {
					//$ket="Batas pengembalian";
					mysql_query("UPDATE peminjaman SET ket = 'Batas pengembalian' WHERE id_peminjaman = '$data[id_peminjaman]'");
				}
				elseif ($data['tgl_kembali'] != '' && $hari <= $batas) {
					//$ket = "Tepat waktu";
					mysql_query("UPDATE peminjaman SET ket = 'Tepat waktu' WHERE id_peminjaman = '$data[id_peminjaman]'");
				}
				elseif ($data['tgl_kembali'] != '' && $hari > $batas) {
					//$ket = "Telat";
					mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
				}
				elseif ($data['tgl_kembali'] == '' && $hari < $batas) {
					//$ket = "-";
					mysql_query("UPDATE peminjaman SET ket = '-' WHERE id_peminjaman = '$data[id_peminjaman]'");
				}

				echo "
					<tr>
					<td>$no</td>
					<td>'$data[kode_barang]'</td>
					<td>$data[nama_barang]</td>
					<td>$data[jumlah]</td>
					<td>$data[nis]</td>
					<td>$data[nama_siswa]</td>
					<td>$data[guru]</td>
					<td>$data[status]</td>
					<td>$date $jam</td>
					<td>$data[bts_kembali]</td>
					<td>$data[tgl_kembali]</td>
					<td>$data[ket]</td>
					<td>$data[nama_petugas]</td>
  			</tr>
  			";
  			$no++;
  		}

  	?>
