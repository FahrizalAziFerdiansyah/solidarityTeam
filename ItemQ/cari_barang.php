
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Cari data barang</title>
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
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  echo"<script>alert('anda wajib login terlebih dahulu')
  window.location.href='index.php'</script>";
}
  ?>
 <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      	<table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Cari data Barang</h4>
                            <hr>
                              <thead>
                          <form action="" method="POST">
                            <tr>
                             	<td>
                             		<input type="text" name="barang" class="form-control" placeholder="Cari data barang berdasarkan nama barang">
                              </td>
                             </tr>
                             <tr>
                              <td>
                             	 &nbsp;
                                <button name="da" class="btn btn-success"><i class="fa fa-paper-plane"></i></button>
                              	</td>
                              </tr>
                              </table>
                            </form>
                          <?php
                          if(isset($_POST['da']))
                          {
                          echo "<thead>
                            <div class='table-responsive'>
                              <table  class='table table-striped table-advance table-hover'>
                                <thead>
                                   <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Total</th>
                                    <th>Jumlah Tersedia</th>
                                    <th>Jumlah Rusak</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>";
                          
                               ?>
    
                              <tbody>
                              <?php
                                    include "koneksi.php";

                                    /*  $search = 'this is my search';

                                      $searchSplit = explode(' ', $search);

                                      $searchQueryItems = array();
                                      foreach ($searchSplit as $searchTerm) {*/
                                          /*
                                           * NOTE: Check out the DB connections escaping part
                                           * below for the one you should use.
                                           */
                                        /*  $searchQueryItems[] = "name LIKE '%" . mysqli_real_escape_string($searchTerm) . "%'";
                                      }

                                      $query = 'SELECT pageurl FROM names' . (!empty($searchQueryItems) ? ' WHERE ' . implode(' AND ', $searchQueryItems) : '');*/


                                    if(isset($_POST['da'])){

                                    $nama = $_POST['barang'];

                                    $barang = mysql_query("SELECT * FROM barang WHERE nama_barang like '%$nama%'");
                                    $no =1;
                                    while($data=mysql_fetch_array($barang)){
                                      echo "

                                          <tr>
                                          <td>$no</td>
                                          <td>$data[kode_barang]</td>
                                          <td>$data[nama_barang]</td>
                                          <td>$data[jml_total]</td>
                                          <td>$data[stok]</td>
                                          <td>$data[jml_rusak]</td>
                                              <td><a href=edit_barang.php?id_barang=$data[id_barang] class='btn btn-primary btn-block'>Edit</a></td>
                                    
                                          </tr>
                                          ";
                                      $no++;
                                    }
                                    }

                                }
                                ?>
                                </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
  
    

    <
<br>
</body>

 </body>
      <?php 
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';?>
 
</html>
