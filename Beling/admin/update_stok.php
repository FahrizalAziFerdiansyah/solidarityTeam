<?php 
include_once("config.php");

$jum="5";
$nama_produk=$_GET['id'];
$update=mysqli_query($mysqli, "UPDATE produk SET stok='$jum' WHERE nama_produk='$nama_produk'");
echo '<script>window.location="rumah.php";</script>';


}
 ?>