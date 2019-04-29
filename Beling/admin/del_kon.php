<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user

 
// Delete user row from table based on given id
$id_konsul = $_GET['id_konsul'];
$result = mysqli_query($mysqli, "DELETE FROM konsultasi WHERE id_konsul='$id_konsul'");
header("Location:../konsul.php");

?>