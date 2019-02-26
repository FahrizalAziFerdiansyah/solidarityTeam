<?php
// include database connection file
include_once("config.php");

$id_pelanggan = $_GET['id_pelanggan'];
$result = mysqli_query($mysqli, "UPDATE pelanggan SET kondisi ='Perbaikan Selesai' WHERE id_pelanggan='$id_pelanggan'");
header("Location:home.php");


?>