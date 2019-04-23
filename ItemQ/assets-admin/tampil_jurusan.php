
<?php
session_start();
error_reporting(0);
?><!DOCTYPE html>
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
                            <h4><i class="fa fa-angle-right"></i> Data Jurusan</h4>
                            <hr>
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Jurusan</th>
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
                                  <?php
                                       include"koneksi.php";
                                            $query="select * from jurusan order by id_jurusan asc";
                                            $hasil=mysql_query($query);
                                            $no = 1;
                                            while($data=mysql_fetch_array($hasil)){
                                            echo"<tr>
                                            <td>$no</td>
                                            <td>$data[jurusan]</td>";
                                            if ($_SESSION['level']=="admin") {
                                              echo "<td>
                                              <a href=edit_jurusan.php?id_jurusan=$data[id_jurusan] class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                                              <a onclick='return konfirmasi()' href=delete_jurusan.php?id_jurusan=$data[id_jurusan] class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td>";
                                            }
                                        echo "  </tr>";
                                  
                                    $no++;
                                  }
                                  ?>
                              </tr>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
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
</table>