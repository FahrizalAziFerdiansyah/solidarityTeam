<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// *** LOAD SESSION
session_start();
// *** LOAD CONFIGURATION VARS
include "web_config_vars.php";
// *** DB CONNECTION
include "db_conn.php";
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bengkel Keliling</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us,id">
<meta name="keywords" content="Your Keyword" />
<meta name="description" content="Your Descripton" />
<meta name="robots" content="index,follow">
<meta name="Generator" content="umkm">
<meta name="Author" content="Your Name">
<meta name="revisit-after" content="2 days">
<meta NAME="Rating" CONTENT="General">
<meta NAME="Distribution" CONTENT="Global">
<link rel="shortcut icon" href="images/pavicon.ico" >
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!-- Start Slider HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End Slider.com HEAD section -->

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/bootstrap.css" rel="stylesheet">

</head>

<body>
<?php
session_start();

?>

  <!--==========================
    Header
  ============================-->
 
 <header id="header" ">
    <div class="container-fluid" >
      <div id="logo" class="pull-left">
        <h1><a href="index.php?clear=y" class="scrollto"><img src="../img/intro-carousel/logo.png" style="margin-bottom: 5px">BELING</a></h1>
      </div>
      <nav id="nav-menu-container" >
        <ul class="nav-menu">
          <li><a href="../index.php#pelayanan">Beranda</a></li>
          <li><a href="konfirmasi_bayar.php"><i class="fa fa-user"></i> Konfirmasi Pembayaran</a></li>

	  <li> <?php
		  echo'<form method="post" action="list_barang.php">
			     <input class="btncari" type="submit" value="Cari"><input class="texbox_cari" name="cari" value="'.$_SESSION[scari].'" placeholder="  Type Here to Search" >
			     </form>';
	   ?></li>
	   
	 
   <li><h4 style="font-size: 15px; margin-left: 10px; margin-top: 20px; color: white" >Hai <?php echo $_SESSION['username'] ; ?></li>
   <li><a href="../logout.php" style="color: white"><i class="fa fa-sign-out" style="font-size: 25px"></i></a></li> 
        </ul>
        <div>
          <li><?php include"cart.php";?></li> 
        </div>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>


	
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<style>
#bgmenu{
    background:#0096D6;
    height:26px;
    width:100%;
    padding-top:5px;
}

</style>
<div id="bgmenu">
<div id="contact">
<ul>

</ul>
</div>
</div>

<!-- #header -->
<!--start header-->


   


	 
 <!--end header-->

<div id="container"><!--start container-->
<div class="cleared"></div>