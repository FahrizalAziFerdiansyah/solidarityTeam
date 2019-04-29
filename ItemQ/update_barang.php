<?php
  session_start();

  if(empty($_SESSION['username'])){
	   echo"<script>alert('anda wajib login terlebih dahulu')
	        window.location.href='index.php'</script>";
  }

  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $total = $_POST['total'];
  $br_rusak = $_POST['br_rusak'];

  if ($br_rusak > $total) {
    echo "<script>alert('Barang rusak melebihi total barang !')
    window.location='edit_barang.php?id_barang=$_POST[id_barang]';</script>
    ";

  }

 else{ include 'koneksi.php';
  mysql_query("UPDATE barang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', jml_total = '$total', stok = '$total' - '$br_rusak', jml_rusak = '$br_rusak' WHERE id_barang = '$_POST[id_barang]'");

  $a = mysql_query("SELECT id_barang, jml_total, stok, jml_dipinjam,jml_rusak FROM barang WHERE id_barang = '$_POST[id_barang]'");
  $b = mysql_fetch_array($a);
  $dipinjam = $b['jml_total'] - ($b['jml_rusak'] + $b['stok']);
  mysql_query("UPDATE barang SET jml_dipinjam = '$dipinjam' WHERE id_barang = '$_POST[id_barang]'");
  //echo $b['jml_total'] . "+ " . $b['stok'] . "+" . $b['jml_rusak'];
 }
  ?>

<script type="text/javascript">
  window.location="data_barang.php";
</script>
