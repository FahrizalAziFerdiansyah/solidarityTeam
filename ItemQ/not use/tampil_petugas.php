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
	<title>Data petugas</title>
</head>
<body>
<div class="hm">
<?php
include"header_menu.php";
?>
</div>
<table class="table table-responsive table-striped table-hover table-bordered">
  <tr>
    <th>No</th>
    <th>Nama Petugas</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
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
    include "koneksi.php";
    $query = "SELECT * FROM login order by id_petugas ASC";
    $hasil = mysql_query($query);
    $no = 1;
    while ($data = mysql_fetch_array($hasil)) {
		$pass = md5($data['password']);
      echo "
        <tr>
          <td>$no</td>
          <td>$data[nama_petugas]</td>
          <td>$data[username]</td>
          <td>$pass</td>
          <td>$data[level]</td>
          <td><a href=edit_petugas.php?id_petugas=$data[id_petugas] class='btn btn-primary btn-block'>Edit</a></td>
        	<td><a onclick='return konfirm()' href=delete_petugas.php?id_petugas=$data[id_petugas] class='btn btn-danger btn-block'>Hapus</a></td>
        </tr>
      ";
      $no++;
    }
   ?>
</body>
<style>
table{
	margin-top:100px;
}
</style>
