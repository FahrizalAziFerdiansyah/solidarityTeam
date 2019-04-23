<?php
include'config.php';
$nip = $_GET['nip'];
$result = mysqli_query($config, "DELETE FROM tbl_user WHERE nip='$nip'");
echo "<script>alert('Pesan anda dihapus');</script>";
echo '<script>window.location="lg_admin.php";</script>';
?>