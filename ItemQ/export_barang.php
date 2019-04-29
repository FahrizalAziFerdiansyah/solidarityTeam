<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<?php

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data barang.xls");
date_default_timezone_set('Asia/Jakarta');
$tgl = date('d-m-Y');
if (isset($_GET['ok'])) {
	$ok = $_GET['ok'];
	$status = $_GET['status'];
  echo "<center><b>Data barang yang ".$status." tanggal  ".$tgl."</center></b><br>";
}

else {
  echo "<center><b>Data barang tanggal " .$tgl."</center></b><br>";
}
?>

<table border="1px">
    <tr>
      <th>No</th>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
			<th>Jumlah Total</th>
			<th>Jumlah Tersedia</th>
			<th>Jumlah yang Dipinjam</th>
			<th>Jumlah Rusak</th>
			<th>Spesifikasi</th>
    </tr>

  <?php
    include"koneksi.php";
    if (isset($_GET['ok'])) {

      $ok = $_GET['ok'];
      $status = $_GET['status'];

      if ($status == "Tersedia") {
        $query = "SELECT * FROM barang WHERE stok > 0 order by id_barang ASC";
      }

      else {
        $query = "SELECT * FROM barang WHERE stok <= 0 order by id_barang ASC";
      }

    }

    else {
      $query = "SELECT * FROM barang";
    }

    $hasil = mysql_query($query);
    $no=0;
    while($data=mysql_fetch_array($hasil)){
    	$no++;
    	echo "
    	<tr>
    	<td>$no</td>
    	<td>'$data[kode_barang]'</td>
    	<td>$data[nama_barang]</td>
			<td>$data[jml_total]</td>
    	<td>$data[stok]</td>
			<td>$data[jml_dipinjam]</td>
			<td>$data[jml_rusak]</td>
			<td>$data[spesifikasi]</td>
      </tr>";
    }

   ?>
</table>
