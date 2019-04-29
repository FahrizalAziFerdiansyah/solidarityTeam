
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Edit Jurusan</title>
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
include"koneksi.php";
$query=mysql_query("SELECT * from jurusan where id_jurusan='$_GET[id_jurusan]'");
$data=mysql_fetch_array($query);
?>
<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     		<form action="update_jurusan.php" method="post" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Edit Kelas</h4>
                            <hr>
                              <thead>
                                <tr>
																	<td>
																		<input type='hidden' name="id_jurusan" value="<?php echo $data['id_jurusan'];?>">
																</tr>
																<tr>
																	<td>
																		<input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan'];?>">
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

    </section>
      </section>
  
    



      <?php 
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';?>
  </body>
</html>
