
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Pengembalian</title>
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
  	<?php
			include 'koneksi.php';
			$query = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang = b.kode_barang join siswa as s on p.nis = s.nis WHERE id_peminjaman='$_GET[id_peminjaman]'");
			$data = mysql_fetch_array($query);

		?>
  <body>	

<section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     		<form action="update_pengembalian.php" method="POST">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Pengembalian</h4>
                            <hr>
                            	<input type="hidden" name="id_peminjaman" value="<?php echo $data['id_peminjaman'];?>">
                              <thead>
                                <tr>
																	<td>
																		<input type="text" id="kd_barang" maxlength="20" name="kd_barang" class="form-control" value="<?php echo $data['kode_barang'];?>" readonly>
																</tr>
																<tr>
																	<td>
																		<input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang'];?>" readonly>
																	</td>
																</tr>
																<tr>
																	<td>
																	<input type="hidden" name="jumlah" value="<?php echo $data['jumlah'];?>">
																		<select class="form-control" name="br_rusak" required>
																			<option>-- Jumlah barang yang rusak --</option>
																			<?php
																				$br = mysql_query("SELECT jumlah from peminjaman WHERE id_peminjaman = '$data[id_peminjaman]'");
																				$rb = mysql_fetch_array($br);
																				for ($i=0; $i <= $rb['jumlah'] ; $i++) {
																					echo "<option value = '$i'>$i</option>";
																				}
																			 ?>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		<input type="text" id="nis" value="<?php echo $data['nis'];?>" name="nis" class="form-control" readonly required/>
																	</td>
																</tr>
																<tr>
																	<td>
																		<input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'];?>" id="nama_siswa" class="form-control" readonly>
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
