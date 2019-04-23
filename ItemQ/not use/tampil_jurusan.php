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
	<title>Jurusan</title>
</head>
<body>
<?php
include"header_menu.php";
?>
<div class="table">
<table class="table table-responsive table-striped table-hover">
<tr>
<th>No</th>
<th>Jurusan</th>
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
$query="select * from jurusan order by id_jurusan asc";
$hasil=mysql_query($query);
$no = 1;
while($data=mysql_fetch_array($hasil)){
echo"<tr>
<td>$no</td>
<td>$data[jurusan]</td>
<td style='width:100px'><a href=edit_jurusan.php?id_jurusan=$data[id_jurusan] class='btn btn-primary' style='width:100px'>Edit</a></td>
<td style='width:100px'><a onclick='return konfirm()' href=delete_jurusan.php?id_jurusan=$data[id_jurusan] class='btn btn-danger'style='width:100px'>Hapus</a></td>
</tr>";
$no++;
}
?>
</table>
</div>
</body>
<style>
.table{
	margin-top:85px;
}
</style>