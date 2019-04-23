<html>
<head>
<title>Detail Barang</title>
<body>
<section id="main-content">
	<section class="wrapper">
		<div class="row mt">
<?php
include"koneksi.php";
$q=mysql_query("select * from barang where id_barang='$_GET[id_barang]'");
$data=mysql_fetch_array($q);
?>
<center>
<div class="panel panel-default" style="width:500px;">
<div class="panel-header"style="background:#2C3E50; width:500px; color:white; height:45px; padding-top:15px;">Foto Barang</div>
<div class="panel-body" style="width:500px;">
<img src="assets/img/foto/<?php echo $data['foto'];?>" style="width:500px; margin-left:-15px;">
</div>
</div>
<center><div class="panel panel-default" style="width:500px;">
<div class="panel-heading" style="background:#2C3E50; width:500px; color:white;">
Spesifikasi Barang
</div>
<div class="panel-body" style="width:500px;">
<?php echo $data['spesifikasi'];?>
</div>
</div>
<a href="data_barang.php" class="btn btn-danger">Kembali</a>
			</div>
		</section>
	</section>
</body>
</html>