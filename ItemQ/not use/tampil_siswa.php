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
	<title>Data siswa</title>
</head>
<body>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<div class="table">
<table class="table table-responsive table-striped table-hover table-bordered">
  <tr>
    <th>No</th>
    <th>NIS</th>
    <th>Nama Siswa</th>
    <th>Kelas</th>
    <th>No HP</th>
    <th colspan="2">Aksi</th>
  </tr>

  <script type="text/javascript" language="JavaScript">
   function konfirmasi()
   {
   tanya = confirm("Anda Yakin Akan Menghapus Data ?");
   if (tanya == true) return true;
   else return false;
   }</script>

<?php
  include 'koneksi.php';
	$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
	$from = $page * 10 - 10;
  $query = mysql_query("SELECT * FROM siswa as s join kelas as k on s.id_kelas = k.id_kelas join jurusan as j on k.id_jurusan = j.id_jurusan LIMIT $from,10");
  $no=1 + $page * 10 - 10;
  while ($data = mysql_fetch_array($query)) {
    echo "<tr>
            <td>$no</td>
            <td>$data[nis]</td>
            <td>$data[nama_siswa]</td>
            <td>$data[kelas] $data[jurusan] $data[rombel]</td>
            <td>$data[no_hp]</td>
            <td style='width:100px'><a href=edit_siswa.php?id_siswa=$data[id_siswa] class='btn btn-primary 'style='width:100px'>Edit</a></td><td style='width:100px'><a onclick='return konfirmasi()' href=delete_siswa.php?id_siswa=$data[id_siswa] class='btn btn-danger'style='width:100px'>Hapus</a></td>
          </tr>
    ";
    $no++;
  }
  ?>
  </table>
  </div>
  <br>
  <div class="pagination">
 <?php
	$query = mysql_query("SELECT COUNT(*) as ttl FROM barang");
	$data = mysql_fetch_array($query);
	$ttlPage = ceil($data['ttl'] / 10);
	for ($i = 1; $i <= $ttlPage ; $i++) {
		echo "<ul class='pagination'>
		<li><a href='tampil_siswa.php?page=$i'>$i</a></li></ul> ";
	}

 ?>
</div>

</body>
<style>

.table{
	margin-top:100px;
	margin-bottom:-10px;
}
</style>
