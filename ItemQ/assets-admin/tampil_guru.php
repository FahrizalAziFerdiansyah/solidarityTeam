<?php
session_start();
error_reporting(0);
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
                            <h4><i class="fa fa-angle-right"></i> Data Guru</h4>
                            <hr>
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <?php
                                  if ($_SESSION['level']=="admin") {
                                    echo "<th>Aksi</th>";
                                  }
                                  else {

                                  }
                                 ?>
                              </tr>
                               </thead>
                              <tbody>
                              <tr>
                                  <script type="text/javascript" language="JavaScript">
                                     function konfirmasi()
                                     {
                                     tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                                     if (tanya == true) return true;
                                     else return false;
                                     }</script>

                                     <?php
                                       include 'koneksi.php';
                                       $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                                       $from = $page * 10 - 10;
                                       $result = mysql_query("SELECT * FROM guru ORDER BY id_guru ASC LIMIT $from, 10");
                                       $no=1 + $page * 10 - 10;
                                       while ($data = mysql_fetch_array($result)) {
                                         echo "<tr>
                                                 <td>$no</td>
                                                 <td>$data[guru]</td>";
                                                 if ($_SESSION['level']=="admin") {
                                            echo "<td><a href=edit_guru.php?id_guru=$data[id_guru] class='btn btn-primary '><i class='fa fa-pencil'></i></a>
                                             <a onclick='return konfirmasi()' href=delete_guru.php?id_guru=$data[id_guru] class='btn btn-danger'><i class='fa fa-trash-o'></i></a></td>";
                                          }
                                          echo "</tr>";

                                               $no++;
                                           }
                                         ?>
                              </tr>
                              </tbody>
                          </table>
                          
                      </div><!-- /content-panel -->
                  </div>
                  <div class="pagination">
                            <?php
                                $query = mysql_query("SELECT COUNT(*) as ttl FROM guru");
                                $data = mysql_fetch_array($query);
                                $ttlPage = ceil($data['ttl'] / 10);
                                for ($i = 1; $i <= $ttlPage ; $i++) 
                                {
                                  echo "<ul class='pagination'>
                                  <li><a href='data_guru.php?page=$i'>$i</a></li> </ul> ";
                                }
                            ?>
                               </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
</body>
</html>