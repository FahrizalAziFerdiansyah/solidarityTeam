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
	<title>Data Barang</title>
</head>
<table class="table table-responsive table-striped table-hover">
  <a href="tampil_barang.php" class="btn btn-primary" value="semua barang">Semua barang</a>
<tr>
<th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Stok</th>
<th colspan="2">Aksi</th>
</tr>
<script type="text/javascript" language="JavaScript">
function konfirm(){
	tanya = confirm("Anda yakin ingin menghapus ?");
	if (tanya == true) return true;
	else return false;
}
</script>



<?php
if ($_GET['ok'] == "ok") {
  $status = $_GET['status'];
  if ($status == "Habis") {
    $query = "SELECT * FROM barang WHERE stok <= 0 order by id_barang ASC";
  }
  else {
    $query = "SELECT * FROM barang WHERE stok > 0 order by id_barang ASC";
  }
}

echo $_GET['ok'];
include"koneksi.php";




$hasil = mysql_query($query);
$no=0;
while($data=mysql_fetch_array($hasil)){
	$no++;
	echo "
	<tr>
	<td>$no</td>
	<td>$data[kode_barang]</td>
	<td>$data[nama_barang]</td>
	<td>$data[stok]</td>
	<td><a href=edit_barang.php?id_barang=$data[id_barang] class='btn btn-primary btn-block'>Edit</a></td>
	<td><a onclick='return konfirm()' href=delete_barang.php?id_barang=$data[id_barang] class='btn btn-danger btn-block'>Hapus</a></td>
	</tr>
	";

}
?>
