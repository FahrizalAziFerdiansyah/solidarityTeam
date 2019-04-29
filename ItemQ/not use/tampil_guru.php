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
	<title>Data guru</title>
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
    <th>Nama Guru</th>
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
     $result = mysql_query("SELECT * FROM guru ORDER BY id_guru ASC LIMIT $from, 10");
     $no=1 + $page * 10 - 10;
     while ($data = mysql_fetch_array($result)) {
       echo "<tr>
               <td>$no</td>
               <td>$data[guru]</td>
               <td style='width:100px'><a href=edit_guru.php?id_guru=$data[id_guru] class='btn btn-primary ' style='width:100px'>Edit</a></td><td style='width:100px'><a onclick='return konfirmasi()' href=delete_guru.php?id_guru=$data[id_guru] class='btn btn-danger ' style='width:100px'>Hapus</a></td>
             </tr>";
             $no++;
     }
	 ?>
	 </div>
	 </table>
	 <div class="pagination">
	 <?php
     $query = mysql_query("SELECT COUNT(*) as ttl FROM guru");
     $data = mysql_fetch_array($query);
     $ttlPage = ceil($data['ttl'] / 10);
     for ($i = 1; $i <= $ttlPage ; $i++) {
       echo "<ul class='pagination'>
	   <li><a href='tampil_guru.php?page=$i'>$i</a></li> </ul> ";
     }
     ?>
	 </div>
	 <style>
	 .table{
		 margin-top:100px;
	 }
	 </style>
