<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<html>
<head>
	<title>Dara peminjaman</title>
</head>
<body>
<?php
include"header_menu.php";
?>
<form action="" method="GET" style="margin-top:6%">
	<br>
	<table>
		<tr>
			<td>Dari tanggal</td>
			<td>Sampai tanggal</td>
		</tr>
		<tr>
			<td>
				<input type="date" name="awal" class="form-control" style="width:200px;">
			</td>
			<td>
				<input type="date" name="akhir" class="form-control" style="width:200px;">
			</td>
			<td>
				&nbsp;
				<input type="submit" value="filter" name="filter" class="btn btn-primary">
			</td>
		</tr>
	</table>




</form>

<table class="table table-responsive table-striped table-hover table-bordered">



	<tr>
	<th>No</th>
	<th>Kode Barang</th>
	<th>Nama Barang</th>
	<th>Jumlah</th>
	<th>Kode Siswa</th>
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
		$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

		$from = $page * 10 - 10;
		if (isset($_GET['filter'])) {
			$filter = $_GET['filter'];
			$awal = $_GET['awal'];
			$akhir = $_GET['akhir'];

			echo "Data peminjaman dari tanggal ".$awal." sampai tanggal ".$akhir;
			echo"<br>";
			echo"<br>";
			echo"<a href='export_peminjaman.php?awal=$awal&akhir=$akhir&filter=$filter' class='btn btn-primary'>Export ke Excel</a>";
			echo"<br> <br>";

			$result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.kd_siswa=s.kd_siswa join login as l on p.kd_petugas=l.kd_petugas join guru as g on p.id_guru=g.id_guru  WHERE tgl_pinjam between '$awal 00:00' and '$akhir 23:59' ORDER BY p.id_peminjaman ASC");
		}
		else {
				$result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.kd_siswa=s.kd_siswa join login as l on p.kd_petugas=l.kd_petugas join guru as g on p.id_guru=g.id_guru ORDER BY p.id_peminjaman ASC LIMIT $from,10");
		}


		$no=1 + $page * 10 - 10;

		while($data=mysql_fetch_array($result)){

			$tgl = explode (' ', $data['tgl_pinjam']);
			$date = $tgl[0];
			$jam = $tgl[1];
			$date = date_format(date_create($date), 'd-m-Y');

			$tgl_kembali = explode(' ', $data['tgl_kembali']);
			$tgl_kem = $tgl_kembali[0];
			$tgl_kem = strtotime($tgl_kem);

			date_default_timezone_set('Asia/Jakarta');
			$hari=date('Y-m-d');
			$har = strtotime($hari);

			$batas = date($data['bts_kembali']);
			$bat = strtotime($batas);

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
				<td>$data[kode_barang]</td>
				<td>$data[nama_barang]</td>
				<td>$data[jumlah]</td>
				<td>$data[kd_siswa]</td>
				<td>$data[nama]</td>
				<td>$data[guru]</td>
				<td>$data[status]</td>
				<td>$date $jam</td>
				<td>$data[bts_kembali]</td>
				<td>$data[tgl_kembali]</td>
				<td>$data[ket]</td>
				<td>$data[nama_petugas]</td>";
				

			echo "</tr>";
			$no++;
		}
?><div class="pagination">
<?php
		$query = mysql_query("SELECT COUNT(*) as ttl FROM peminjaman");
		$data = mysql_fetch_array($query);
		$ttlPage = ceil($data['ttl'] / 10);
		for($i = 1; $i <= $ttlPage; $i++) {
			echo "<ul class='pagination'><li><a href='tampil_peminjaman.php?page=$i'>$i</a></li></ul>";
		}
	?>
	</div>
</table>
</body>
</html>
<style>
.pagination{
	margin-top:0px;
	margin-left:5px;
}
</style>