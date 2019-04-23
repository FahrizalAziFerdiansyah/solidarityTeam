
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <script src='js/jquery.min.js'></script>

    <title>Tambah Petugas</title>
    <?php
        error_reporting(0);
        session_start();
        if(empty($_SESSION['username'])){
          echo"<script>alert('anda wajib login terlebih dahulu')
          window.location.href='index.php'</script>";
      }


        include 'assets-admin/assets.php';
        include 'assets-admin/header-admin.php';
        include 'assets-admin/sidebar-admin.php';
        
        ?>
  </head>

  <body>  
        
<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <form action="tambah_petugas.php" method="post">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i>Tambah Petugas</h4>
                            <hr>
                              <thead><tr><td>
                                <input type="text" name="nama_petugas" class="form-control" placeholder="Nama Petugas" required>
                              </td></tr>
                                <tr>
                                  <td>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                     <input type="password" name="password" class="form-control" placeholder="Password" required>
                                  </td>
                                </tr><tr>
                                  <td>
                                    <input type="password" name="konfirm" class="form-control" placeholder="Konfirmasi Password" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-control" name="level">
                                      <option value="">Pilih Level</option>
                                      <option value="admin">Admin</option>
                                      <option value="petugas">Petugas</option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i></button>
                                  </td>
                                </tr>
                              </thead>
                          </table>
                          </form>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
  
    



      <?php 
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';?>
  </body>
</html>
<script>
$(function() {
  $('#kd_barang').keyup(function() {
    var isi = $('#kd_barang').val();

    $.get('getBarang.php', {kode: isi}, function(data) {
      $('#nama_barang').val(data.nama_barang);
    }, 'json')
  })
})
$(function(){
  $('#nis').keyup(function(){
    var isi = $('#nis').val();

    $.get('getSiswa.php', {kodes: isi}, function(data) {
      $('#nama_siswa').val(data.nama_siswa);
    }, 'json')
    })
})
</script>