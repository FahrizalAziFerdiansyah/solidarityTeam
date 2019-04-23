
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

  $query = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas WHERE id_peminjaman='$_GET[id_peminjaman]'");
  $data =mysql_fetch_array($query);
  $barang = mysql_query("SELECT * FROM barang as b join peminjaman as p on b.kode_barang=p.kode_barang")

 ?>
<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action="update_peminjaman.php" method="POST">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Edit Peminjaman</h4>
                            <hr>
                              <thead>
                              <input type="hidden" value="<?php echo $data['id_peminjaman'] ?>" name="id_peminjaman">
                                <tr>
                                  <td>
                                    <input type="text" id="kd_barang" value="<?php echo $data['kode_barang'] ?>" placeholder="masukkan kode" name="kd_barang" class="form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                     <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?php echo $data['nama_barang'] ?>" readonly>
                                  </td>
                                </tr><tr>
                                  <td>
                                    <input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>" class="form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" id="nis" value="<?php echo $data['nis'] ?>" placeholder="masukkan kode" name="nis" class="form-control"/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>" id="nama" class="form-control" readonly>
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
