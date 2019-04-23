<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<html>
<head>
<title></title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<body>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<form action="tambah_petugas.php" method="POST" class="rule">
<div class="col-md-6 col-md-offset-3" style="border:1px solid #E1E1E1;">
<div class="form-group">
<label for="disabledInputText">Kode Petugas</label>
<input type="text" name="kd_petugas" class="form-control">
</div>
<div class="form-group">
<label for="disabledInputText">Nama Petugas</label>
<input type="text" name="nama_petugas" class="form-control">
</div>
<div class="form-group">
<label for="disabledInputText">Username</label>
<input type="text" name="username" class="form-control">
</div>
<div class="form-group">
<label for="disabledInputText">Password</label>
<input type="text" name="password" class="form-control">
</div>
<div class="form-group">
<label for="disabledInputText">Level</label>
<select name="level" id="sel1" class="form-control">
<option value="admin">admin</option>
<option value="petugas">petugas</option>
</select>
</div>
<input type="submit" value="Simpan" class="btn btn-success">
</div>
</form>
<br>
<div class="footer">
<?php
include"footer.php";
?>
</div>
</body>
</html>
<style>
.footer{
	margin-top:480px;
	background:black;
	padding:15px;
	text-align:center;
}
form{
	margin-top:120px;
}
</style>
