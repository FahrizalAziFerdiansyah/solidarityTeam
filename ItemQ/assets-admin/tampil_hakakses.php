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
                            <h4><i class="fa fa-angle-right"></i> Data Petugas</h4>
                            <hr>
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Id Petugas</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th colspan="2">Aksi</th>
                                </tr>                        
                               </thead>
                              <tbody>
                              <tr>
                                  <?php
                                        include "koneksi.php";
                                        $q=mysql_query("select * from login order by id_petugas ASC");
                                        $no=1;
                                        while($data=mysql_fetch_array($q)){
                                          echo"<tr>
                                          <td>$no</td>
                                          <td>$data[id_petugas]</td>
                                          <td>$data[nama_petugas]</td>
                                          <td>$data[username]</td>
                                          <td>$data[password]</td>
                                          <td>$data[level]</td>
                                          <td><a href='edit_hak_akses.php?id_petugas=$data[id_petugas]' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a>
                                          <a onclick='return konfirmasi()' href=delete_hak_akses.php?id_petugas=$data[id_petugas] class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td>
                                          </tr>";

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