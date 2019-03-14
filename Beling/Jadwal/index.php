
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bengkel Keliling</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
       
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/eventCalendar.css">
  <link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">

        <!-- css dibawah ini hanya untuk demo-->
        <style>
            body {
                padding-top: 70px;
            }
            footer {
                padding: 30px 0;
            }
        </style>
  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: black">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><img src="../img/intro-carousel/logo.png" style="margin-bottom: 5px">BELING</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
     <?php 
            session_start();
            if($_SESSION['status']!="login"){
              header("location:../index.php?pesan=belum_login");
            }
    ?>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../index.php#intro">Beranda</a></li>
          <li><a href="../index.php#services">Perbaiki</a></li>
          <li><a href="../index.php#pelayanan">Pelayanan</a></li>
         <!-- <li><a href="#team">Team</a></li>-->
          <li><a href="../index.php#trik">Tips And Trik</a>
          <li><a href="../index.php#contact">Kontak</a></li>
           <li>  <h4 style="font-size: 15px; margin-left: 10px; margin-top: 20px; color: white" >Hai <?php echo $_SESSION['username'] ; ?></h4></li>
           <li><a href="logout.php" style="color: white">KELUAR</a></li> 

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
    <body>

            
            <div class="container"  style="margin-top: 90px">
                 <div class="section-header">
                    <h3>JADWAL SERVIS BERKALA</h3>
                    <p>Ingin servis berkala tapi mager mau kebengkel? Disini aja!</p>
                 </div>
          
            
               <!--/.col-xs-12.col-sm-9-->
                    
                <div class="col-xs-12 sidebar-offcanvas"  id="sidebar">
                    <div id="eventCalendarHumanDate"></div>
                </div><!--/.sidebar-offcanvas-->
            <!--/row-->
               <div>
                 <p>*Catatan : <br><i>&nbsp; Lakukan pembayaran terlebih dahulu agar jadwal servis berkala anda muncul<br>&nbsp; Jumlah servis anda
                  <?php
                            include'../config.php';
                            $username= $_SESSION['username'];
                            $query="SELECT * FROM users INNER JOIN user_servis ON users.username=user_servis.username WHERE user_servis.username='$username'";
                            $rcat=mysqli_query($mysqli,$query);
                            while ($rowcat=mysqli_fetch_array($rcat)){
                                  echo '<strong>'.$rowcat['jumlah'].'</strong> dengan <strong>'.$rowcat['pilihan'].',</strong>' ;
                            }
                  ?>
                <a href="../bayar.php" class="portfolio-link" data-toggle="modal">Bayar Sekarang!</a></i></p>
               </div> 
            <hr>
                
            <footer>
                <p>&copy; 2016 Company, Inc.</p>
            </footer>
                
        </div><!--/.container-->

   

            
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/jquery.eventCalendar.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $("#eventCalendarHumanDate").eventCalendar({
                    eventsjson: 'json.php',
                    showDescription: 'true',
                    jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
                });
            });
        </script>
    </body>
</html>