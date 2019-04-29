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
	<title>Tambah barang</title>
</head>
<body>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<form action="tambah_barang.php" method="POST" class="rule">
<div class="col-md-6 col-md-offset-3" style="border: 1px solid #E1E1E1">
<div class="form-group">
<label for="disabledInputText">Kode Barang</label>
<input type="text" name="kd_barang" maxlength="20" minlength="20" class="form-control">
</div>

<div class="form-group">
<label for="disabledInputText">Nama Barang</label>
<input type="text" name="nama_barang" class="form-control" required>
</div>
<div class="form-group">
<label for="disabledTextInput">Total Barang</label>
<input type="number" name="total" class="form-control" required>
</div>
<input type="submit" value="Simpan" name="Simpan" class="btn btn-success">
</div>
</form>
<br>
<div class="footer">
<?php
include"footer.php";
?>
</div>
</body>
<style>
.footer{
	margin-top:390px;
	background:black;
	padding:15px;
	text-align:center;
}
form{
	margin-top:203px;
}
</style>
