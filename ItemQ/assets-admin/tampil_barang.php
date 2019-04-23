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
                        <h4><i class="fa fa-angle-right"></i> Data Barang</h4>
                            <hr>
                      <form action="" method="GET">
                    <table>
                      <tr>
                        <td>Dari tanggal</td>

                        <td></td>
                        <td>Sampai tanggal</td>
                      </tr>
                      <tr>
                        <td>
                          <input type="date" name="awal" class="form-control" style="width:200px;">
                        </td>
                        <td>-</td>
                        <td>
                          <input type="date" name="akhir" class="form-control" style="width:200px;">
                        </td>
                        <td>
                          &nbsp;
                          <button name="filter" class="btn btn-primary glyphicon glyphicon-filter"></button>
                        </td>
                      </tr>
                    </table><br>
                  </form>
                  <table>
                    <tr><td>
                      <form action="" method="GET">
                                     
                                      <select name="status" id="sel1" class="form-control">
                                      <option>-- Pilih status barang --</option>
                                      <option value="Semua">Semua</option>
                                      <option value="Habis">Habis</option>
                                      <option value="Tersedia">Tersedia</option>
                                      </select>
                                    </td><td>
                                      <button name="ok" value="Cari Barang" class="form-control btn btn-success"><i class="glyphicon glyphicon-search"></i></button>
                                     

                                      </form>
                                      </div>
                    </td></tr>
                  </table>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Total</th>
                                <th>Jumlah Tersedia</th>
                                <th>Jumlah Barang Dipinjam</th>
                                <th>Jumlah Rusak</th>
                                <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tr>
                                 
                                      <?php


                                      include"koneksi.php";

                                        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                                      $from = $page * 5 - 5;

                                      if (isset($_GET['ok'])) {
                                        $ok = $_GET['ok'];
                                        $status = $_GET['status'];

                                        if ($status == "Tersedia") {
                                            $query = "SELECT * FROM barang WHERE stok > 0 order by id_barang DESC";
                                            $tot = mysql_query("SELECT count(*) as ttl FROM barang WHERE stok > 0");
                                            $total = mysql_fetch_array($tot);
                                            echo "Data barang yang tersedia <br>";
                                            echo"<a href='export_barang.php?status=$status&ok=$ok' class='btn btn-primary'><i class='fa fa-file-excel-o'></i></a>";
                                            echo"<br> <br>";
                                        }
                                        else if ($status == "Habis") {
                                            $query = "SELECT * FROM barang WHERE stok <= 0 order by id_barang DESC";
                                            $tot = mysql_query("SELECT count(*) as ttl FROM barang WHERE stok <= 0");
                                            $total = mysql_fetch_array($tot);
                                            echo "Data barang yang habis <br>";
                                            echo"<a href='export_barang.php?status=$status&ok=$ok' class='btn btn-primary'><i class='fa fa-file-excel-o'></i></a>";
                                            echo"<br> <br>";
                                        }
                                        else {
                                          $query = "SELECT * FROM barang  ORDER BY id_barang DESC LIMIT $from,5";
                                          $tot = mysql_query("SELECT count(*) as ttl FROM barang");
                                          $total = mysql_fetch_array($tot);
                                          echo "Data semua barang <br>";
                                          echo"<a href='export_barang.php' class='btn btn-primary'><i class='fa fa-file-excel-o'></i></a>";
                                          echo"<br> <br>";
                                        }

                                      }
                                      else {
                                        $query = "SELECT * FROM barang ORDER BY id_barang DESC LIMIT $from,5";
                                        $tot = mysql_query("SELECT count(*) as ttl FROM barang");
                                          $total = mysql_fetch_array($tot);
                                        echo "Data semua barang <br>";

                                        echo"<a href='export_barang.php' class='btn btn-primary'><i class='fa fa-file-excel-o'></i></a>";
                                        echo"<br> <br>";
                                      }

                                      $hasil = mysql_query($query);
                                      $no=1 + $page * 5 - 5;
                                      while($data=mysql_fetch_array($hasil)){

                                        echo "
                                        <tr>
                                        <td>$no</td>
                                        <td>$data[kode_barang]</td>
                                        <td>$data[nama_barang]</td>
                                        <td>$data[jml_total]</td>
                                        <td>$data[stok]</td>
                                        <td>$data[jml_dipinjam]</td>
                                        <td>$data[jml_rusak]</td>
                                        <td><a href=edit_barang.php?id_barang=$data[id_barang] class='btn btn-primary btn-xs' title='Edit'><i class='glyphicon glyphicon-pencil'></i></a>  
                                        <a href='detail.php?id_barang=$data[id_barang]'  class='btn btn-primary btn-xs' title='Detail'><i class='fa fa-list-alt'></i></a> <a href=Printbar.php?id_barang=$data[id_barang]&kode_barang=$data[kode_barang]&stok=$data[stok] class='btn btn-primary btn-xs' title='Barcode'><i class='glyphicon glyphicon-barcode'></i></a></td>";
                                        /*<td><a onclick='return konfirm()' href=delete_barang.php?id_barang=$data[id_barang] class='btn btn-danger btn-block'>Hapus</a></td>
                                        </tr>*/
                                        $no++;
                                      }
                                      ?>
                               
                              </tr>
                              </tbody>
                          </table>
                          <?php

                            echo "Total barang = ".$total['ttl'];
                           ?>
                      </div><!-- /content-panel -->



                  </div>
                  
  <div class="pagination">
 <?php
  $query = mysql_query("SELECT COUNT(*) as ttl FROM barang");
  $data = mysql_fetch_array($query);
  $ttlPage = ceil($data['ttl'] / 5);
  for ($i = 1; $i <= $ttlPage ; $i++) {
    echo "<ul class='pagination'>
    <li><a href='data_barang.php?page=$i'>$i</a></li></ul> ";
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

