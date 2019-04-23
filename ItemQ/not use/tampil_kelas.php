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
	<title>Kelas</title>
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
<th>kelas</th>
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
include"koneksi.php";
$query="select * from kelas join jurusan on kelas.id_jurusan = jurusan.id_jurusan";
$hasil=mysql_query($query);
$no = 1;
while($data=mysql_fetch_array($hasil)){
echo"<tr>
<td>$no</td>
<td>$data[kelas] $data[jurusan] $data[rombel]</td>
<td style='width:100px'><a href=edit_kelas.php?id_kelas=$data[id_kelas] class='btn btn-primary'style='width:100px'>Edit</a></td>
<td style='width:100px'><a onclick='return konfirm()' href=delete_kelas.php?id_kelas=$data[id_kelas] class='btn btn-danger 'style='width:100px'>Hapus</a></td>
</tr>";
$no++;
}
?>
</div>
</table>
</body>
<style>
.table{
	margin-top:85px;
}
</style>
