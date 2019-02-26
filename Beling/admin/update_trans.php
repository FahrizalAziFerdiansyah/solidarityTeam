<?php
include'config.php';

$id_trans = $_GET['id_trans'];
$bengkel = mysqli_query($mysqli, "UPDATE trans_servis SET kondisi ='Lunas' WHERE id_trans='$id_trans'");
header("Location:jadwal.php")
 ?>

