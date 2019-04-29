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
	<title>Tambah kelas</title>
</head>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<body>
  <form action="tambah_kelas.php" method="POST" class="rule">
    <div class="col-md-6 col-md-offset-3" style="border:1px solid #E1E1E1;">
      <div class="form-group">
        <label for="disabledInputText">Kelas</label>
        <select class="form-control" name="kelas">
        	<option value="">Pilih Kelas</option>
					<option value="X">X</option>
					<option value="XI">XI</option>
					<option value="XII">XII</option>
        </select>
      </div>
			<div class="form-group">
				<label for="disabledInputText">Jurusan</label>
				<select class="form-control" name="jurusan">
					<option value="">Pilih Jurusan</option>
					<?php
						include 'koneksi.php';
						$q = mysql_query("SELECT * FROM jurusan");
						while ($d = mysql_fetch_array($q)) {
							echo "<option value=$d[id_jurusan]>$d[jurusan]</option>";
						}
					 ?>
				</select>
			</div>
			<div class="form-group">
				<label for="disabledInputText">Jumlah Rombel</label>
				<select class="form-control" name="rombel">
					<option value="">Jumlah Rombel</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
      <center><input type="submit" value="Simpan" class="btn btn-success">
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
	margin-top:350px;
	background:black;
	padding:15px;
	text-align:center;
}
form{
	margin-top:250px;
}
</style>
