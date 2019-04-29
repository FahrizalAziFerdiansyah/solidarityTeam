<?php
include "koneksi.php";

$q = mysql_query("SELECT barang.nama_barang FROM barang");
$d = mysql_fetch_array($q);

print_r($d);
 ?>
