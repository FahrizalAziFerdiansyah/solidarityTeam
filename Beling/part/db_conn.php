<?php
// KONEKSI DATABASE
$conn = mysqli_connect("localhost","root","","bengkel");

 function trik($data){
 	global $conn;
 	$judul=$_POST['judul'];
 	$gambar=$_POST['gambar'];
 	$deskripsi=$_POST['deskripsi'];
 	
	mysqli_query($conn,"INSERT INTO trik VALUES('','$judul','$gambar','$deskripsi')");
	return mysqli_affected_rows($conn);
 }


?>