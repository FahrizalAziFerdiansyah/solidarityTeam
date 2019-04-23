
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Tambah Barang</title>
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
        include 'assets-admin/input_barang.php';
        ?>
  </head>

  <body>

      <?php 
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';?>
  </body>
</html>
