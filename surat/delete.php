<?php
include'config.php';
$id_surat = $_GET['id_surat'];
$result = mysqli_query($config, "DELETE FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
echo "<script>alert('User anda dihapus');</script>";
echo '<script>window.location="admin1.php";</script>';
?>