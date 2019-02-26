<?php

include '../config.php';

$id = $_GET['id'];
$query = "DELETE FROM jadwalku WHERE jadwal_id = '$id'";
$add = mysqli_query($mysqli, $query);

header("location:crud_tabel.php");

?>