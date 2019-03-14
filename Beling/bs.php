
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bengkel Keliling</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: black">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><img src="img/intro-carousel/logo.png" style="margin-bottom: 5px">BELING</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
 <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="index.php#services">Perbaiki</a></li>
          <li><a href="index.php#pelayanan">Pelayanan</a></li>
         <!-- <li><a href="#team">Team</a></li>-->
          <li><a href="index.php#trik">Tips And Trik</a>
          <li><a href="index.php#contact">Kontak</a></li>
           <li>  <h4 style="font-size: 15px; margin-left: 10px; margin-top: 20px; color: white" >Hai <?php session_start(); echo $_SESSION['username'] ; ?></h4></li>
           <li><a href="logout.php" style="color: white"><i class="fa fa-sign-out" style="font-size: 25px"></i></a></li> 
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <div class="row">
  <div class="col-xs-11 col-sm-7" style="margin-left: 100px">
                    <div>
                        <?php  
                           include 'konfig.php';
                           $id_yolo = $_GET['id_yolo'];
                           $result=mysqli_query($mysqli,"SELECT * FROM trik WHERE id_trik = '$id_yolo' LIMIT 1");
                           while($data=mysqli_fetch_array($result)) {

                            echo "<div style='margin-top:120px'><h2><strong>".$data['judul']."</strong></h2><hr>";
                            echo '<img src="img/'.$data['gambar'].'" width="600" height="300" margin-top="100px">';
                            echo "<p style='margin-top:20px;'>".$data['deskripsi']."</p></div>";
                           } 
                      ?>
                </div>
              </div>
                <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item active"  style="margin-top:120px"><center>Daftar Tips & Trik</center></a><br>
                            <?php
                           
                            $query="SELECT * FROM trik ";
                            $rcat=mysqli_query($mysqli,$query);
                            while ($rowcat=mysqli_fetch_array($rcat)){
                            echo "<div class='row'>";
                             echo "<div class='col-lg-5'><h4>".$rowcat['judul']."</h4>";
                             echo '<img src="img/'.$rowcat['gambar'].'" width="200" height="100" margin-top="100px">';
                             echo "</div>&nbsp;&nbsp;";
                             echo "<div class='col-lg-3'>";
                             echo "<p>".substr($rowcat['deskripsi'],0,250)."</p>";
                             echo "<a class='btn btn-info' href='bs.php?id_yolo=".$rowcat['id_trik']."'>Baca Selengkapnya</a></div></div></div><hr>";
                            }
                            ?>
                         
                    </div>
                </div><!--/.sidebar-offcanvas-->
            </div><!-- #header -->


