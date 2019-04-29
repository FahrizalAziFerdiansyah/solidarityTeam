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
                            <h4><i class="fa fa-angle-right"></i> Data Kelas</h4>
                            <hr>
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>kelas</th>
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
                                      $query="select * from kelas join jurusan on kelas.id_jurusan = jurusan.id_jurusan";
                                      $hasil=mysql_query($query);
                                      $no = 1;
                                        while($data=mysql_fetch_array($hasil)){
                                        if ($data['rombel'] == 0) {
                                          $rombel = "";
                                        }
                                        else{
                                          $rombel = $data['rombel'];
                                        };
                                        echo"<tr>
                                              <td>$no</td>
                                              <td>$data[kelas] $data[jurusan] $rombel</td>";
                                              if ($_SESSION['level']=="admin") {
                                        echo "<td><a onclick='return konfirmasi()' href=delete_kelas.php?id_kelas=$data[id_kelas] class='btn btn-danger btn-xs' title='hapus'><i class='fa fa-trash-o'></i></a></td>";
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
</script>