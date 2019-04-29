<?php
include 'koneksi.php';

$query=mysqli_query($mysqli,"SELECT * FROM mahasiswa");
$arraydata=array();
while ($baris= mysqli_fetch_assoc($query)) 
{
	$arraydata[]=$baris;
}

echo json_encode($arraydata);

?>
