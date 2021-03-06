<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
  </style>
</head>
<body>
   <h1 align="center">BELING</h1>
   <p align="center">Penjualan Sparepart Bengkel Keliling</p>
  <?php
  // Load file koneksi.php
  include "config.php";
  if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter
    $filter = $_GET['filter']; // Ambil data filder yang dipilih user
    if($filter == '1'){ // Jika filter nya 1 (per tanggal)
      $tanggal_order = date('d-m-y', strtotime($_GET['tanggal']));
      echo '<b>Data Transaksi Tanggal '.$tanggal_order.'</b><br /><br />';
      $query = "SELECT * FROM daftar_order WHERE DATE(tanggal_order)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
      $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
      echo '<b>Data Transaksi Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';
      $query = "SELECT * FROM daftar_order WHERE MONTH(tanggal_order)='".$_GET['bulan']."' AND YEAR(tanggal_order)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    }else{ // Jika filter nya 3 (per tahun)
      echo '<b>Data Transaksi Tahun '.$_GET['tahun'].'</b><br /><br />';
      $query = "SELECT * FROM daftar_order WHERE YEAR(tanggal_order)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
    }
  }else{ // Jika user tidak memilih filter
    echo '<b>Semua Data Transaksi</b><br /><br />';
    $query = "SELECT * FROM daftar_order ORDER BY tanggal_order"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
  }
  ?>

  <table border="1" cellpadding="8">
  <tr>
    <th>Tanggal</th>
    <th>Kode Transaksi</th>
    <th>Barang</th>
    <th>Jumlah</th>
    <th>Total Harga</th>
  </tr>
  <?php
  $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
  $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
  if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      $tanggal_order = date('d-m-Y', strtotime($data['tanggal_order'])); // Ubah format tanggal jadi dd-mm-yyyy
      echo "<tr>";
      echo "<td>".$tanggal_order."</td>";
      echo "<td>".$data['kode_order']."</td>";
      echo "<td>".$data['nama_produk']."</td>";
      echo "<td>".$data['jumbel']."</td>";
      echo "<td>".$data['total']."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
  }
  ?>
  <?php
   $semua="SELECT SUM(total) FROM daftar_order HAVING SUM(total)";
   $cb = mysqli_query($mysqli, $semua); // Eksekusi/Jalankan query dari variabel $query
   // Ambil jumlah data dari hasil eksekusi $sql
   // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($hm = mysqli_fetch_array($cb)){
    $jmlh=$hm['SUM(total)'];
  }

  ?>
  
   </table><br>
   <div class="pull-right"> Total Pendapatan : <?php echo $jmlh ?></div> 
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once('plugin/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Transaksi.pdf', 'D');
?>