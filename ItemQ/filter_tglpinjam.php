<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<head>
	<title>Peminjaman</title>
</head>
<form class="rule" action="search_barang.php" method="GET">
	<div class="col-md-4 col-md-offset-3" style="border:1px solid #E1E1E1">
		<div class="form-group">
			<input type="text" name="cari" placeholder="Cari... [nama barang] ">
		</div>
		<input type="submit" name="filter" value="Cari">
	</div>

</form>

<form class="rule" action="filter_tglpinjam.php" method="GET">
		<div class="col-md-4 col-md-offset-3" style="border:1px solid #E1E1E1">
			<input type="date" name="tgl_awal" class="form-control">
			<input type="date" name="tgl_akhir" class="form-control">
			<input type="submit" value="Filter" class="btn btn-primary btn-block">
		</div>
</form>



<table class="table table-responsive table-striped table-hover">
	<tr>
	<th>No</th>
	<th>Kode Barang</th>
	<th>Nama Barang</th>
	<th>Jumlah</th>
	<th>Kode Siswa</th>
	<th>Nama Siswa</th>
	<th>Guru pengajar</th>
	<th>Status</th>
	<th>Tanggal Pinjam</th>
	<th>Tanggal Pengembalian</th>
	<th>Nama Petugas</th>
	<th colspan="3">Aksi</th>
	</tr>

<script type="text/javascript" language="JavaScript">
function konfirm(){
	tanya = confirm("Anda yakin ingin menghapus ?");
	if (tanya == true) return true;
	else return false;
}
</script>

<?php
	$tgl_awal = $_GET['tgl_awal'];
	$tgl_akhir = $_GET['tgl_akhir'];
		include "koneksi.php";

		$result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.kd_siswa=s.kd_siswa join login as l on p.kd_petugas=l.kd_petugas join guru as g on p.id_guru = g.id_guru WHERE p.tgl_pinjam between '$tgl_awal' and '$tgl_akhir'");
		$no = 1;
		while($data=mysql_fetch_array($result)){
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
				<td>$data[tgl_pinjam]</td>
				<td>$data[tgl_kembali]</td>
				<td>$data[nama_petugas]</td>
			</tr>
			";
			$no++;
		}

	?>
