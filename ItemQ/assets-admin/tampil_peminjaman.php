<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <section id="no-more-tables" class="table-responsive">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Data Peminjaman</h4>
                            <hr>
                    <form action="" method="GET">
                    <table>
                      <tr>
                        <td>Dari tanggal</td>
                        <td>Sampai tanggal</td>
                        <td>Filter</td>
                      </tr>
                      <tr>
                        <td>
                          <input type="date" name="awal" class="form-control" style="width:200px;">
                        </td>
                        <td>
                          <input type="date" name="akhir" class="form-control" style="width:200px;">
                        </td>
                        <td>
                          &nbsp;
                          <button name="filter" class="btn btn-primary glyphicon glyphicon-filter"></button>
                        </td>
                      </tr>
                    </table>
                  </form>
                          <table class="table table-striped table-advance table-hover">
                            
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Nama Siswa</th>
                                <th>Guru Pengajar</th>
                                <th>Status</th>
                                <th>Rusak</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Batas Pengembalian</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Keterangan</th>
                                <th>Nama Petugas</th>
                                <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php

                                include "koneksi.php";
                                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

                                $from = $page * 5 - 5;

                                $s = mysql_query("SELECT * FROM peminjaman");
                                while ($z = mysql_fetch_array($s)) {
                                  $tgl1 = explode (' ', $z['tgl_pinjam']);
                                  $date1 = $tgl1[0];
                                  $jam1 = $tgl1[1];

                                  $tgl_kembali = explode(' ', $z['tgl_kembali']);
                                  $tgl_kem = $tgl_kembali[0];
                                  $tgl_kem = strtotime($tgl_kem);

                                  date_default_timezone_set('Asia/Jakarta');
                                  $hari=date('Y-m-d');
                                  $har = strtotime($hari);

                                  $batas = date($z['bts_kembali']);
                                  $bat = strtotime($batas);

                                  if (empty($z['tgl_kembali']) && $hari > $batas) {
                                          /*$selisih = abs(strtotime($hari) - strtotime($batas));
                                          $years = floor($selisih / (365*60*60*24));
                                          $months = floor(($selisih - $years * 365*60*60*24) / (30*60*60*24));
                                          $days = floor(($selisih - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                          $denda = $days * 5000;*/
                                          mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                          //$ket = "Telat";
                                  }
                                  else if ($z['tgl_kembali'] == '' && $hari == $batas) {
                                          //$ket="Batas pengembalian";
                                          mysql_query("UPDATE peminjaman SET ket = 'Batas pengembalian' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                  }
                                  elseif ($z['tgl_kembali'] != '' && $hari <= $batas) {
                                          //$ket = "Tepat waktu";
                                          mysql_query("UPDATE peminjaman SET ket = 'Tepat waktu' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                  }
                                        /*elseif ($data['tgl_kembali'] != '' && $hari > $batas) {
                                          //$ket = "Telat";
                                          mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                        }*/
                                  elseif ($z['tgl_kembali'] == '' && $hari < $batas) {
                                          //$ket = "-";
                                          mysql_query("UPDATE peminjaman SET ket = '-' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                  }

                                }


                                if (isset($_GET['filter'])) {
                                  $filter = $_GET['filter'];
                                  $awal = $_GET['awal'];
                                  $akhir = $_GET['akhir'];

                                  echo "Data peminjaman dari tanggal ".$awal." sampai tanggal ".$akhir;
                                  echo"<br>";
                                  echo"<br>";
                                  echo"<a href='export_peminjaman.php?awal=$awal&akhir=$akhir&filter=$filter' class='btn btn-primary'>Export ke Excel</a>";
                                  echo"<br> <br>";

                                  $result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas join guru as g on p.id_guru=g.id_guru  WHERE tgl_pinjam between '$awal 00:00' and '$akhir 23:59' ORDER BY p.id_peminjaman DESC");
                                   $tot = mysql_query("SELECT count(*) as ttl FROM peminjaman WHERE tgl_pinjam between '$awal 00:00' and '$akhir 23:59'");
                                  $total = mysql_fetch_array($tot);
                                }
                                else {
                                    $result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas join guru as g on p.id_guru=g.id_guru ORDER BY p.id_peminjaman DESC LIMIT $from,5");
                                    $tot = mysql_query("SELECT count(*) as ttl FROM peminjaman");
                                    $total = mysql_fetch_array($tot);
                                }


                                $no=1 + $page * 5 - 5;

                                while($data=mysql_fetch_array($result)){

                                  $tgl = explode (' ', $data['tgl_pinjam']);
                                  $date = $tgl[0];
                                  $jam = $tgl[1];
                                  $date = date_format(date_create($date), 'd-m-Y');
                                   $bts = date_format(date_create($data['bts_kembali']), 'd-m-Y');
                                  if ($data['tgl_kembali']=='') {
                                    $kembali = $data['tgl_kembali'];
                                  }
                                  else {
                                      $kembali = date_format(date_create($data['tgl_kembali']), 'd-m-Y');
                                  }

                                  echo "
                                    <tr>
                                    <td>$no</td>
                                    <td>$data[nama_barang]</td>
                                    <td>$data[jumlah]</td>
                                    <td>$data[nama_siswa]</td>
                                    <td>$data[guru]</td>
                                    <td>$data[status]</td>
                                    <td>$data[br_rusak]</td>
                                    <td>$date $jam</td>
                                    <td>$bts</td>
                                    <td>$kembali</td>
                                    <td>$data[ket]</td>
                                    <td>$data[nama_petugas]</td>";
                                    if ($data['tgl_kembali'] != '') {
                                    echo "<td><button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button></td>";
                                    }
                                    else {
                                    echo " <td><a href=pengembalian.php?id_peminjaman=$data[id_peminjaman] class='btn btn-success btn-xs' title='Pengembalian'><i class='fa fa-check'></i></a>
                                      </td>";
                                    }

                                  echo "</tr>";
                                  $no++;
                                }
                                ?>
                               
                              </tr>
                              </tbody>
                          </table>
                          <?php

                            echo "Total barang = ".$total['ttl'];
                           ?>
                          </div>
                          </selection>
                        </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  </section>
                  </div>
  <div class="pagination">
 <?php
  $query = mysql_query("SELECT COUNT(*) as ttl FROM peminjaman");
  $data = mysql_fetch_array($query);
  $ttlPage = ceil($data['ttl'] / 5);
  for ($i = 1; $i <= $ttlPage ; $i++) {
    echo "<ul class='pagination'>
    <li><a href='data_peminjaman.php?page=$i'>$i</a></li></ul> ";
  }

 ?>
</div>

              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
</body>
</html>
  <script type="text/javascript" language="JavaScript">
   function konfirmasi()
   {
   tanya = confirm("Anda Yakin Akan Menghapus Data ?");
   if (tanya == true) return true;
   else return false;
   }</script>

