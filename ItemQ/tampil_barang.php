<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<head>
	<title>Data barang</title>
</head>
<body>
<?php
include"header_menu.php";
?>
<table class="table table-responsive table-striped table-hover" >
<tr>
<th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Jumlah Total</th>
<th>Jumlah Tersedia</th>
<th>Jumlah Barang Dipinjam</th>
<th>Jumlah Rusak</th>
<th>Aksi</th>
</tr>
<script type="text/javascript" language="JavaScript">
/*function konfirm(){
	tanya = confirm("Anda yakin ingin menghapus ?");
	if (tanya == true) return true;
	else return false;
}*/
</script>
<div id="a">
<form action="" method="GET">
<div class="form-group">
<select name="status" id="sel1" class="form-control" style="width:70%; float:left; margin-right:3%;">
<option>-- Pilih status barang --</option>
<option value="Semua">Semua</option>
<option value="Habis">Habis</option>
<option value="Tersedia">Tersedia</option>
</select>
</div>
<div class="form-group">
<input type="submit" name="ok" value="Cari Barang" class="form-control glyphicon glyphicon-user btn btn-success" style="width:20%;">
</div>

</form>
</div>
<?php


include"koneksi.php";

	$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$from = $page * 10 - 10;

if (isset($_GET['ok'])) {
	$ok = $_GET['ok'];
	$status = $_GET['status'];

	if ($status == "Tersedia") {
			$query = "SELECT * FROM barang WHERE stok > 0 order by id_barang ASC";
			echo "Data barang yang tersedia <br>";
			echo"<a href='export_barang.php?status=$status&ok=$ok' class='btn btn-primary'>Export ke Excel</a>";
			echo"<br> <br>";
	}
	else if ($status == "Habis") {
			$query = "SELECT * FROM barang WHERE stok <= 0 order by id_barang ASC";
			echo "Data barang yang habis <br>";
			echo"<a href='export_barang.php?status=$status&ok=$ok' class='btn btn-primary'>Export ke Excel</a>";
			echo"<br> <br>";
	}
	else {
		$query = "SELECT * FROM barang  ORDER BY id_barang ASC LIMIT $from,10";
		echo "Data semua barang <br>";
		echo"<a href='export_barang.php' class='btn btn-primary'>Export ke Excel</a>";
		echo"<br> <br>";
	}

}
else {
	$query = "SELECT * FROM barang ORDER BY id_barang ASC LIMIT $from,10";
	echo "Data semua barang <br>";

	echo"<a href='export_barang.php' class='btn btn-primary'>Export ke Excel</a>";
	echo"<br> <br>";
}

$hasil = mysql_query($query);
$no=1 + $page * 10 - 10;
while($data=mysql_fetch_array($hasil)){

	echo "
	<tr>
	<td>$no</td>
	<td>$data[kode_barang]</td>
	<td>$data[nama_barang]</td>
	<td>$data[jml_total]</td>
	<td>$data[stok]</td>
	<td>$data[jml_dipinjam]</td>
	<td>$data[jml_rusak]</td>
	<td><a href=edit_barang.php?id_barang=$data[id_barang] class='btn btn-primary btn-block'>Edit</a> <a href=Printbar.php?id_barang=$data[id_barang]&kode_barang=$data[kode_barang]&stok=$data[stok] class='btn btn-primary btn-block'>Barcode</a></td>";
	/*<td><a onclick='return konfirm()' href=delete_barang.php?id_barang=$data[id_barang] class='btn btn-danger btn-block'>Hapus</a></td>
	</tr>*/
	$no++;
}
?>
</table>
<div class="pagination">
<?php
	$query = mysql_query("SELECT COUNT(*) as ttl FROM barang");
	$data = mysql_fetch_array($query);
	$ttlPage = ceil($data['ttl'] / 10);
	for ($i = 1; $i <= $ttlPage ; $i++) {
		echo "<ul class='pagination'><li><a href='data_barang.php?page=$i'>$i</a></li></ul></div>";
	}


?>
</div>
</body>
<style>
.pagination{
	margin-top:5px;
}
#a{
	margin-top:100px;
}
</style>
