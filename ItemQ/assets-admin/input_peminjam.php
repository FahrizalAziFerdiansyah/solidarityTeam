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
  <title>Tambah Peminjam</title>
</head>
<body>
 <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action="tambah_peminjaman.php" method="POST" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Tambah Peminjam</h4>
                            <hr>
                              <thead>
                                <tr>
                                  <td>
                                   <input type="text" id="kd_barang" maxlength="13" minlenght="13" placeholder="Masukkan kode" name="kd_barang" class="form-control" required>
                                  </td>
                                </tr>
                                  <tr>
                                  <td>
                                     <input type="text" name="nama_barang" value="" class="form-control" id="nama_barang" readonly>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select name="jumlah" class="form-control" id='jumlah'>

                                     </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" id="nis" value="" placeholder="Masukkan NIS" name="nis" class="form-control" required/>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" name="nama_siswa" value="" id="nama_siswa" class="form-control" readonly>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-control" name="guru">
                                      <option>Penanggung Jawab</option>
                                      <?php
                                        include 'koneksi.php';
                                        $q=mysql_query("SELECT * FROM guru");
                                        while ($data=mysql_fetch_array($q))
                                        {
                                          echo "<option value='$data[id_guru]'>$data[guru]</option>";
                                        }
                                       ?>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="date" name="bts_kembali" class="form-control">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                      <input type="hidden" name="kd_petugas" value="<?php echo $_SESSION['kd_petugas'];?>" class="form-control">
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
    </body>
</html>
    <script src='js/jquery.min.js'></script>
<script>
$(function() {
  $('#kd_barang').keyup(function() {
    var isi = $('#kd_barang').val();

    $.get('getBarang.php?kode=' + isi, function(data) {
      $('#nama_barang').val(data.nama_barang);

      //Tambah option
      for(var i = 1; i <= data.stok; i++) {
        $('#jumlah').append("<option value='" + i + "'>" + i + "</option>");
      }
    }, 'json')
  })
})
$(function(){
  $('#nis').keyup(function(){
    var isi = $('#nis').val();

    $.get('getSiswa.php?nis=' + isi, function(data) {
      $('#nama_siswa').val(data.nama_siswa);
    }, 'json')
  })
})

  </script>
