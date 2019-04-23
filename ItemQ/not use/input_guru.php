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
	<title>Tambah guru</title>
</head>
<body>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<form action="tambah_guru.php" method="post" class="rule">
<div class="col-md-6 col-md-offset-3"style="border:1px solid #E1E1E1">

<div class="form-group">
  <label for="disabledInputTezt">Nama Guru</label>
  <input type="text" name="nama_guru" class="form-control">
</div>
<input type="submit" value="Simpan" class="btn btn-success">
</div>
<br>
<div class="footer">
<?php
include"footer.php";
?>
</div>
</form>
</body>
<style>
.footer{
	margin-top:350px;
	background:black;
	padding:15px;
}
form{
	margin-top:250px;
}
.footer{
	text-align:center;
}
</style>