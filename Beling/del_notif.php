<?php 


include_once("config.php");

$id_pelanggan = $_GET['id_pelanggan'];
$result = mysqli_query($mysqli, "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
echo "<script>
    alert('Perbaiki anda dibatalkan!');
    </script>";
echo '<script>window.location="index.php";</script>';

 ?>