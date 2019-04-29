<?php

include'config.php';
$id_surat = $_GET['id_surat'];
$result = mysqli_query($config, "DELETE FROM tbl_surat_keluar WHERE id_surat='$id_surat'");
echo "<script>alert('Pesan anda dihapus');</script>";
echo '<script>window.location="surat_keluar.php";</script>';
?>