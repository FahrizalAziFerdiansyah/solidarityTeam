
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Data Peminjam</title>
    <?php
        error_reporting(0);
        session_start();
        if(empty($_SESSION['username'])){
          echo"<script>alert('anda wajib login terlebih dahulu')
          window.location.href='login.php'</script>";
      }
     
        include 'assets-admin/assets.php';
        include 'assets-admin/header-admin.php';
        include 'assets-admin/sidebar-admin.php';
        
        ?>
  </head>

  <body>  
        
  <?php
    include "koneksi.php";
    $query = mysql_query ("SELECT * FROM barang where id_barang = '$_GET[id_barang]'");
    $data = mysql_fetch_array($query);
  ?>
<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action = "update_barang.php" method = "POST" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Edit Peminjaman</h4>
                            <hr>
                              <thead>
                                <tr>
                                  <td>
                                    <input type="hidden" name="id_barang" value = "<?php echo $data['id_barang'];?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" name="kode_barang" class="form-control" value="<?php echo $data['kode_barang'];?>" readonly>
                                  </td>
                                </tr><tr>
                                  <td>
                                    <input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang'];?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="number" name="total" class="form-control" value="<?php echo $data['jml_total'];?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="number" name="br_rusak" class="form-control" value="<?php echo $data['jml_rusak'];?>">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="submit" value="Simpan Perubahan" class="btn btn-success">
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
<script src='js/jquery.min.js'></script>
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
<style>
form{
  margin-top:70px;
}
.footer{
  margin-top:500px;
  background:black;
  padding:15px;
  text-align:center;
}
</style>
</script>