<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user

 
// Delete user row from table based on given id


$id_trik = $_GET['id_trik'];
$result = mysqli_query($mysqli, "DELETE FROM trik WHERE id_trik='$id_trik'");
header("Location:trik.php");
// After delete redirect to Home, so that latest user list will be displayed.

$id_produk=$_GET['id_produk']; 
$produk = mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk='$id_produk'");
header("Location:part.php");

$id_nama=$_GET['id_nama']; 
$rumah = mysqli_query($mysqli, "DELETE FROM rumah WHERE id_nama='$id_nama'");
header("Location:rumah.php");

$id_user=$_GET['id_user']; 
$rumah = mysqli_query($mysqli, "DELETE FROM users WHERE id_user='$id_user'");
header("Location:jadwal.php");

$id_trans=$_GET['id_trans']; 
$servis = mysqli_query($mysqli, "DELETE FROM trans_servis WHERE id_trans='$id_trans'");
header("Location:jadwal.php");
?>