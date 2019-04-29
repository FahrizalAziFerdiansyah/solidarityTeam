<?php
session_start();
//error_reporting(0);
?>

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
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Data Siswa</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>NIS</th>
                                  <th>Nama Siswa</th>
                                  <th>Kelas</th>
                                  <th>No HP</th>
                                   <?php
                                    if ($_SESSION['level']=="admin") {
                                      echo "<th colspan='2'>Aksi</th>";
                                    }
                                    else {

                                    }
                                   ?>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php
                                  include 'koneksi.php';
                                  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                                  $from = $page * 10 - 10;
                                  $query = mysql_query("SELECT * FROM siswa as s join kelas as k on s.id_kelas = k.id_kelas join jurusan as j on k.id_jurusan = j.id_jurusan LIMIT $from,10");
                                  $no=1 + $page * 10 - 10;
                                  while ($data = mysql_fetch_array($query)) {
                                    echo "<tr>
                                            <td>$no</td>
                                            <td>$data[nis]</td>
                                            <td>$data[nama_siswa]</td>
                                            <td>$data[kelas] $data[jurusan] $data[rombel]</td>
                                            <td>$data[no_hp]</td>";
                                            if ($_SESSION['level']=="admin") {
                                              echo "<td><a href=edit_siswa.php?id_siswa=$data[id_siswa] class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                                              <a onclick='return konfirmasi()' href=delete_siswa.php?id_siswa=$data[id_siswa] class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td>";
                                            }
                                    echo "</tr>";
                                    
                                    $no++;
                                  }
                                  ?>
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  
  <div class="pagination">
 <?php
  $query = mysql_query("SELECT COUNT(*) as ttl FROM barang");
  $data = mysql_fetch_array($query);
  $ttlPage = ceil($data['ttl'] / 10);
  for ($i = 1; $i <= $ttlPage ; $i++) {
    echo "<ul class='pagination'>
    <li><a href='data_siswa.php?page=$i'>$i</a></li></ul> ";
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

