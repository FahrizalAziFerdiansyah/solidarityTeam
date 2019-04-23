
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
			$query = mysql_query ("SELECT * FROM siswa WHERE id_siswa = '$_GET[id_siswa]'");
			$data = mysql_fetch_array($query);
		?>
<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action = "update_siswa.php" method = "POST" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Edit Siswa</h4>
                            <hr>
                              <thead>
                                <tr>
																	<td>
																		<input type="hidden" name="id_siswa" value = "<?php echo $data['id_siswa'];?>">
																	</td>
																</tr>
																<tr>
																	<td>
																		<input type="text" name="nis" class="form-control" value="<?php echo $data['nis'];?>">
																	</td>
																</tr><tr>
																	<td>
																		<input type="text" name="nama" class="form-control" value="<?php echo $data['nama_siswa'];?>">
																	</td>
																</tr><tr>
																	<td>
																		<select class="form-control" name="kelas">
																			<option>Pilih Kelas</option>
																			<?php
																				include'koneksi.php';
																				$q = mysql_query("SELECT * FROM kelas AS k JOIN jurusan AS j ON k.id_jurusan = j.id_jurusan");
																				while ($d = mysql_fetch_array($q)) {
																					echo "<option value='$d[id_kelas]'>$d[kelas] $d[jurusan] $d[rombel]</option>";
																				}
																			 ?>

																		</select>
																	</td>
																</tr><tr>
																	<td>
																		<input type="number" name="no_hp" value="<?php echo $data['no_hp'];?>" class="form-control">
																	</td>
																</tr><tr>
																	<td>
																		<input type="hidden" name="id_siswa" value = "<?php echo $data['id_siswa'];?>">
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
