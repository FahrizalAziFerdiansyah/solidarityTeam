<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  echo"<script>alert('anda wajib login terlebih dahulu')
  window.location.href='login.php'</script>";
}
  ?>
<head>
  <title>Tambah siswa</title>
</head>
<body>
 <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action="tambah_kelas.php" method="post">
                      <script type="text/javascript" language="JavaScript">
                        function konfirm(){
                          tanya = confirm("Anda yakin ingin menghapus ?");
                          if (tanya == true) return true;
                          else return false;
                        }
                        </script>
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Tambah Kelas</h4>
                            <hr>
                              <thead>
                                <form action="tambah_kelas.php" method="POST" class="rule">
                                  <tr>
                                    <td>
                                      <select class="form-control" name="kelas">
                                        <option value="">Pilih Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <select class="form-control" name="jurusan">
                                        <option value="">Pilih Jurusan</option>
                                        <?php
                                          include 'koneksi.php';
                                          $q = mysql_query("SELECT * FROM jurusan");
                                          while ($d = mysql_fetch_array($q)) {
                                            echo "<option value=$d[id_jurusan]>$d[jurusan]</option>";
                                          }
                                         ?>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <select class="form-control" name="rombel">
                                        <option value="">Jumlah Rombel</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        
                                      </select>
                                    </td>
                                  </tr>
                                      
                                  <tr>
                                    <td>  
                                      <button name="ok" class="btn btn-success"><i class="fa fa-paper-plane"></i></button>
                                    </td>
                                  </tr>
                                  
                                </form>
                              </tbody>
                          </table>
                          </form>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
  
    

    <
<br>
</body>
