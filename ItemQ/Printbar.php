
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Barcode</title>
    <?php
				error_reporting(0);
				session_start();
				if(empty($_SESSION['username'])){
					echo"<script>alert('anda wajib login terlebih dahulu')
					window.location.href='index.php'</script>";
			}
		 
        include 'assets-admin/assets.php';
       
        
        
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
                     	
												<?php
													$kode = $_GET['kode_barang'];
													$stoks = $_GET['stok'];

													if($stoks == 0){
														echo "	<script>
																	alert('Stok barang 0');
																	window.location = 'data_barang.php';
																</script>";

													}else{
														for ($i=1; $i <= $stoks; $i++) {
															echo "<img src='generate_bar.php?kode_barang=$kode'> &nbsp;";
														}
														echo "<br>";
														echo "<button onclick='printdata()' class='btn btn-primary fa fa-print' style='height:32px;'></print> </button> ";
														echo "<a href='data_barang.php' class='btn btn-warning glyphicon glyphicon-remove-sign'></a>";
													}

												 ?>


												 <script type="text/javascript">
												 	function printdata () {
												 		window.print();
												 	}
												 </script>

												 <style type="text/css">
												 	@media print{
												 		button{
												 			visibility: hidden;
												 		}
														a{
															visibility: hidden;
														}
												 		a[href]:after{
												 			content: none;
												 		}
												 	}
												 </style>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section>
      </section>
  
    



      <?php 
        include 'assets-admin/script.php';?>
  </body>
</html>
