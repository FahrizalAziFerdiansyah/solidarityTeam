
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Edit Petugas</title>
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
<?php
include "koneksi.php";
$query = mysql_query ("SELECT * FROM login where id_petugas = '$_GET[id_petugas]'");
$data = mysql_fetch_array($query);
?>
<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <form action = "update_hak_akses.php" method = "POST" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Edit Petugas</h4>
                            <hr>
                              <thead>
                                <tr>
                                <input type="hidden" name="id_petugas" value = "<?php echo $data['id_petugas'];?>">
                                  <td>
                                    <input type="text" name="nama_petugas" class="form-control" value="<?php echo $data['nama_petugas'];?>"required>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" name="username" class="form-control" value="<?php echo $data['username'];?>" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="password" name="pass_baru" class="form-control"required placeholder="Password">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="password" name="konfirm_pass_baru" class="form-control"required placeholder="Confirm Password">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <select class="form-control" name="level" required>
                                      <option value="">-- Pilih Level --</option>
                                      <option value="admin">Admin</option>
                                      <option value="petugas">Petugas</option>
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="submit" name="ok" value="Simpan Perubahan" class="btn btn-success">
                                  </td>
                                </tr>
                              </thead>
                          </table>
                          </form>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section>
      </section>
  
    



      <?php 
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';?>
  </body>
</html>
