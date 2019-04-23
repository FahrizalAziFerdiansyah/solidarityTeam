<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
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
                     <form action="tambah_siswa.php" method="post" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Tambah Siswa</h4>
                            <hr>
                              <thead>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" name="nis" placeholder="Masukan nis">
                                  </td>
                                </tr>
                                  <tr>
                                  <td>
                                     <input type="text" class="form-control" name="nama" placeholder="Masukna nama siswa">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-control" name="kelas">
                                    <option>Pilih Kelas</option>
                                    <?php
                                      include'koneksi.php';
                                      $query = mysql_query("SELECT * FROM kelas join jurusan on kelas.id_jurusan = jurusan.id_jurusan");
                                      while ($data = mysql_fetch_array($query)) {
                                        echo "<option value='$data[id_kelas]'>$data[kelas] $data[jurusan] $data[rombel]</option>";
                                      }
                                     ?>
                                  </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="number" name="no_hp" placeholder="No HP" class="form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <button name="ok" class="btn btn-success"><i class="fa fa-paper-plane"></i></button>
                                  </td>
                                </tr>
     

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

</body>
</html>