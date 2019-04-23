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
<script type="text/javascript">
  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent)
   {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>
 <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action="tambah_barang.php" method="post" enctype="multipart/form-data">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Tambah Barang</h4>
                            <hr>
                              <thead>
                                <tr>
                                  <td>
                                    <input type="text" name="kd_barang" maxlength="13" minlength="13" class="form-control" placeholder="Kode Barang" required>
                                  </td>
                                </tr>
                                  <tr>
                                  <td>
                                     <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="number" name="total" class="form-control" placeholder="Total Barang" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td><img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                      <input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" /></td>
                                </tr>
                                <tr>
                                  <td> <textarea name="spek" class="form-control" cols="8" rows="6">Spesifikasi</textarea> </td>
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

    </section>
      </section>

<br>
</body>

</body>
</html>