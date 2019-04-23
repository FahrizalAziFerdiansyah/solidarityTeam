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
	<title>Tambah siswa</title>
</head>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<body>
  <form action="tambah_siswa.php" method="post" class="rule">
    <div class="col-md-6 col-md-offset-3"style="border:1px solid #E1E1E1">

    <div class="form-group">
      <label for="disableInputText">NIS</label>
      <input type="text" class="form-control" name="nis" placeholder="Masukan nis">
    </div>

    <div class="form-group">
      <label for="disableInputText">Nama Siswa</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukna nama siswa">
    </div>

    <div class="form-group">
      <label for="disableInputText">Kelas</label>
      <select class="form-control" name="kelas">
        <option>Pilih Kelas</option>
        <?php
          include'koneksi.php';
          $query = mysql_query("SELECT * FROM kelas join jurusan on kelas.id_jurusan = jurusan.id_jurusan");
          while ($data = mysql_fetch_array($query)) {
            echo "<option value='$data[id_kelas]'>$data[kelas] $data[jurusan] $data[rombel]</option>";
          }
         ?>

      </select>
		 </div>

		 <div class="form-contol">
		 		<label for="disableInputText">No HP</label>
				<input type="number" name="no_hp" placeholder="No HP" class="form-control">
		 </div>
		 <br>
    <input type="submit" name="ok" value="Simpan" class="btn btn-success">
</div>
  </form>
<br>
<div class="footer">
 <center>
 <?php
  include"footer.php";
  ?>
  </div>
</body>
 <style>
 .footer{
	margin-top:500px;
	background:black;
	padding:15px;
}
form{
	margin-top:100px;
}
 </style>
