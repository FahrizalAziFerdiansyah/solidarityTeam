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
	<title>Edit petugas</title>
</head>
<body>
<form action = "update_petugas.php" method = "POST" class="rule">
<?php
include "koneksi.php";
$query = mysql_query ("SELECT * FROM login where id_petugas = '$_GET[id_petugas]'");
$data = mysql_fetch_array($query);
?>
<div class="col-md-6 col-md-offset-3"style="border:1px solid #E1E1E1">
  <input type="hidden" name="id_petugas" value = "<?php echo $data['id_petugas'];?>">
  <div class="form-group">
    <label for="disabledInputText">Kode Petugas</label>
    <input type="text" name="kd_petugas" class="form-control" value="<?php echo $data['kd_petugas'];?>">
  </div>
  <div class="form-group">
    <label for="disabledInputText">Nama Petugas</label>
    <input type="text" name="nama_petugas" class="form-control" value="<?php echo $data['nama_petugas'];?>">
  </div>
  <div class="form-group">
    <label for="disabledInputText">Username</label>
    <input type="text" name="username" class="form-control" value="<?php echo $data['username'];?>">
  </div>
  <div class="form-group">
    <label for="disabledInputText">Password</label>
    <input type="password" name="pass_baru" class="form-control">
  </div>
  <div class="form-group">
    <label for="disabledInputText">Konfirmasi Password</label>
    <input type="password" name="konfirm_pass_baru" class="form-control">
  </div>
  <div class="form-group">
    <label for="disableInputText">Level</label>
    <select class="form-control" name="level">
      <option value="">-- Pilih Level --</option>
      <option value="admin">Admin</option>
      <option value="petugas">Petugas</option>
    </select>
  </div>
	<input type="submit" name="ok" value="Simpan" class="btn btn-primary">
	<a href="tampil_petugas.php" class="btn btn-primary">Kembali</a>
</div>
