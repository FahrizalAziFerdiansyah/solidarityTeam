<?php
          include'config.php';
?>
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
  
  <style>
    #map {
        height: 50%;
        width: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
  </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
    <?php 
            session_start();
    ?>
<?php
            $username=$_SESSION['username'];
            $query="SELECT count(pelanggan.kondisi) as jmlh FROM users INNER JOIN pelanggan ON users.username=pelanggan.nama  WHERE pelanggan.nama='$username' ";
            $rcat=mysqli_query($mysqli,$query);
            while ($rowcat=mysqli_fetch_array($rcat)){
            $jumlah=$rowcat['jmlh'];

          }
            $a="SELECT * FROM users WHERE username='$username'";
            $b=mysqli_query($mysqli,$a);
            while ($c=mysqli_fetch_array($b)) {
              $alamat=$c['alamat'];
              $no_hp=$c['no_hp'];
              $email=$c['email'];
              # code...
            }

?>


  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><img src="img/intro-carousel/logo.png" style="margin-bottom: 5px">BELING</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
  
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#services">Perbaiki</a></li>
          <li><a href="#pelayanan">Pelayanan</a></li>
         <!-- <li><a href="#team">Team</a></li>-->
          <li><a href="#trik">Tips And Trik</a>
          </li>
          <li><a href="#contact">Kontak</a></li>
          <li><h4 style="font-size: 15px; margin-left: 10px; margin-top: 20px; color: white" >Hai <?php echo $_SESSION['username'] ; ?></li>
           <li><a href="logout.php" style="color: white"><i class="fa fa-sign-out" style="font-size: 25px"></i></a></li> 

        </ul>
      <div class="pull-right">
        <div class="dropdown for-notification" style="margin-top: 40px;">
                            <button class="btn btn-secondary dropdown-toggle" style="font-size: 25px" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count"><?php echo $jumlah?> </span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
           <?php
            $username=$_SESSION['username'];
            $query="SELECT * FROM users INNER JOIN pelanggan ON users.username=pelanggan.nama INNER JOIN montir ON montir.nama_montir=pelanggan.nama_montir WHERE pelanggan.nama='$username' ";
            $rcat=mysqli_query($mysqli,$query);
            while ($rowcat=mysqli_fetch_array($rcat)){
            $id=$rowcat['id_pelanggan'];
            echo '<center><p class="red"><strong><img class="rounded-circle mx-auto d-block" width="100px" height="100px" src="admin/img/'.$rowcat['foto'].'"alt="Card image cap"><br>'.$rowcat['nama_montir'].'<br>Servis Di'.$rowcat['jenis_perbaiki'].'</strong><br><i>'.$rowcat['kondisi'].' <a class="btn btn-danger"  onclick="return confirm(Apakah anda yakin?)" href="del_notif.php?id_pelanggan='.$id.'">Batalkan</a></p></i></center><hr>';  
            }
           ?>
           </div>
           </div>
      </div>
      </nav><!-- #nav-menu-container -->
    </div>

  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
   
    
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Siap Melayani Anda Kapanpun</h2>
                 <a href="#servis" data-toggle="modal"  class="btn-get-started portfolio-link">Daftar servis berkala!</a>
                
                <!--<a href="#modalLogin" data-toggle="modal"  class="btn-get-started portfolio-link">Ayo servis berkala!</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Terdapat Bengkel Nyata</h2>
                <a href="#servis" data-toggle="modal"  class="btn-get-started portfolio-link">Daftar servis berkala!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Pelayanan Cepat</h2>
                <a href="#servis" data-toggle="modal"  class="btn-get-started portfolio-link">Daftar servis berkala!</a>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ditangani Oleh Orang Profesional</h2>
                <a href="#servis" data-toggle="modal"  class="btn-get-started portfolio-link">Daftar servis berkala!</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Sparepart Lengkap</h2>
                <a href="#servis" data-toggle="modal"  class="btn-get-started portfolio-link">Daftar servis berkala!</a>
              </div>
            </div>
          </div>

        </div>

        <!--<a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>-->

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
<!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box" ">
            <div class="icon" style="text-align: center;"><i class="icon ion-clock" style="font-size: 80px;"></i>
            <h4 class="title"  style="text-align: center;"><p>Pelayanan Cepat</p></h4>
            <p class="description" style="text-align: center;">Dengan website ini pelayanan akan cepat dan montir akan segera mengeksekusi motor anda</p>
            </div>
          </div>

          <div class="col-lg-4 box box-bg">
            <div class="icon" style="text-align: center;"><i class="icon ion-person-stalker"style="font-size: 80px;"></i>
            <h4 class="title" style="text-align: center;"><p>Montir Berpengalaman</p></h4>
            <p class="description" style="text-align: center;">Dengan montir yang berpengalaman, motor anda tidak akan mengalami kerusakan lagi</p>
            </div>
          </div>

          <div class="col-lg-4 box">
            <div class="icon" style="text-align: center;"><i class="icon ion-radio-waves" style="font-size: 80px;"></i>
            <h4 class="title" style="text-align: center;"><p>Akses Mudah</p></h4>
            <p class="description" style="text-align: center;">Cukup menggunakan website ini motor anda akan diperbaiki oleh montir dimanapun anda berada</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Perbaiki</h3>
          <p>Perbaiki Kendaraan Anda dengan Cepat dan Profesional.</p>
        </header>
         
        

        <div class="row" style="margin-top: 20px ;margin-bottom: 100px">
          <div class="col-lg-3 col-md-6 box wow bounceInUp pull-left" data-wow-duration="1.4s" >
            <h4 class="title"> PILIH MOTOR ANDA</h4><hr>
             
                <form action="#" method="get">
                   <div class="input-group">
                                      <label style="margin-right: 20px">Merk Motor : </label>
                                      <select name="merk" class="form-control" id="provinsi" style="width: 200px; " required>
                                                <option value="">Pilih</option>
                                                
                                                <?php
                                                // Load file koneksi.php
                                                include"koneksi.php";
                                                
                                                // Buat query untuk menampilkan semua data siswa
                                                $sql = mysqli_query($connect, "SELECT * FROM motor");
                                            
                                                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                                  echo "<option value='".$data['id_motor']."'>".$data['nama']."</option>";
                                                }
                                                ?>
                                              </select>

                                    </div>
                                    <br>
                                 <div class="input-group">
                                      <label style="margin-right: 20px">Model Motor : </label>
                                <select name="model" class="form-control" id="kota" style="width: 200px;" required>
                                  <option value="">Pilih</option>
                                </select>

                              <div id="loading" style="margin-top: 15px;">
                                <img src="images/loading.gif" width="18"> <small>Loading...</small>
                              </div>
                              </div><br>
                              <input type="submit" class="btn btn-info" name="submit" value="Pilih"></input> </form>
                                             
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-map" style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a class="portfolio-link" data-toggle="modal" href="#ModalDijalan">Di Jalan</a></h4>
            <p class="description">Fitur ini sangat cocok apabila motor anda tiba-tiba mengalami kerusakan saat diperjalanan, , montir kami siap untuk mendatangi lokasi anda</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-ios-home-outline"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a class="portfolio-link" data-toggle="modal" href="#ModalDirumah">Di Rumah</a></h4>
            <p class="description">Fitur ini sangat cocok apabila anda mager ingin service motor anda dibengkel, montir kami siap untuk mendatangi rumah anda</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-wrench"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a class="portfolio-link" data-toggle="modal" href="#ModalDibengkel">Di Bengkel</a></h4>
            <p class="description">Fitur ini sangat cocok apabila motor anda ingin dibawa kebengkel namun anda males membawanya ke bengkel, montir kami siap untuk mendatangi lokasi anda lalu membawa motor anda ke bengkel</p>
            </div>          
          </div>
        </div>

      </div>
    </section><!-- #services -->        


    <!--==========================
      Clients Section
    ============================-->

<section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Montir Kami</h3>
        </header>
        <div class="owl-carousel testimonials-carousel">
<?php         
            $result=mysqli_query($mysqli,"SELECT * FROM montir WHERE nama_montir NOT IN  ('custom')");
            while($data=mysqli_fetch_array($result)) {
                $gambar=$data['foto'];
                $nama=$data['nama_montir'];
        echo '
        
          <div class="testimonial-item">
            <img src="admin/img/'.$gambar.'" class="testimonial-img" alt="">
            <h3>'.$nama.'</h3>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              '.$data['no_hp'].', '.$data['email'].'  
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
       ';
}?>
       </div>
      </div>
    </section><!-- #testimonials -->
        <!--==========================
      pelayanan Section
    ============================-->
    <section id="pelayanan">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Pelayanan</h3>
          <p>Perbaiki Kendaraan Anda dengan Cepat dan Profesional.</p>
        </header>

        <div class="row" style="margin-top: 20px ;margin-bottom: 100px">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-ios-speedometer-outline" style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a class="portfolio-link"href="part/index.php">Ganti Sparepart</a></h4>
            <p class="description">Menyediakan spaepart secara lengkap, bisa dibeli secara online</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-chatboxes"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a href="konsul.php">Konsultasi</a></h4>
            <p class="description">tanyakan permasalahan mengenai motor anda di sini, kami akan memberi solusi</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-clipboard"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a href="coba.php">Servis Berkala</a></h4>
            <p class="description">Jadwalkan servis motor anda menggunakan aplikasi kami</p>
            </div>          
          </div>
        </div>

      </div>
    </section>
     <!--==========================
      Contact Section
    ============================-->
        <!--==========================
     Tips And Trik
    ============================-->
    <?php
    $result=mysqli_query($mysqli,"SELECT judul,gambar,deskripsi FROM trik");
    ?>
    <section id="trik">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Tips & Trik</h3>
          <p>Tambah wawasan anda dengan melihat tips terbaru daru kami</p>
        </header>
       <div class="row" style="margin-top: 20px ;margin-bottom: 100px;">
           <?php
            include 'konfig.php';
            $result=mysqli_query($mysqli,"SELECT * FROM trik ORDER BY id_trik DESC LIMIT 1");
            while($data=mysqli_fetch_array($result)) {

             echo '<div class="col-lg-7" style="margin-bottom:20px"><img src="img/'.$data['gambar'].'" width="600" height="300" margin-top="100px"></div>';
             echo "<div class='col-lg-5'><h2>".$data['judul']."</h2>";
             echo "<p>".substr($data['deskripsi'],0,250)."</p>";
             echo "<a class='btn btn-info' href='bs.php?id_yolo=".$data['id_trik']."'>Baca Selengkapnya</a><br><br>";
             echo "<a class=' btn btn-info pull-right' href='bs.php?id_yolo=".$data['id_trik']."' >Lihat Lainya >></a></div>";
            }
           ?>
           
        </div>
        </div>   
        </div>

      </div>
    </section>
     <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Kontak Kami</h3>
          <p>Kirim masukkan buat kammi</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl.Bondowoso, Bondowoso, Jawa timur, Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nomor</h3>
              <p><a href="tel:+155895548855">085736586636</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">beling@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
        </div>

      </div>
    </section><!-- #contact -->
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Beling</h3>
            <p>Sistem informasi yang menyediakan perbaikan secara online.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kamii</h4>
            <p>
              Jl.Bondowoso <br>
              Bondowoso, B 535022<br>
              Indonesia <br>
              <strong>Phone:</strong> 085736586636<br>
              <strong>Email:</strong> beling@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Pelayanan</h4>
            <p>Menyediakan pelayanan secara lengkap mulai ganti sparepart, konsultasi, dan ganti sparepart.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->
          <!--Part-->
<!--register-->




    <div class="login-modal modal fade" id="servis" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">

<?php 

if (isset($_POST["register"])) {
  
  if (registrasiPelanggan($_POST)>0) {
    echo "<script>
    alert('user baru ditambahkan!');
    </script>";
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}

if (isset($_POST["servis"])) {
  
  if (berkala($_POST)>0) {
    echo "<script>
    alert('Berhasil!');
    </script>";
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}//Registrasi Pelanggan

?>

          
                   <form action="" method="post">
                        <ul>
                           <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                          <span class="glyphicon glyphicon-remove"></span></a>

                          <div align="center" style="margin-top: 20px;">
                            <h1 class="text-uppercase" style="font-size: 30px"> Registrasi</h1><br><br>
                            <div class="row">
                              <div class="col-lg-6">
                                 <div class="input-group">
                                    <span class="input-group-addon"><i class="ion-android-person" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input readonly="" type="text" name="username" class="form-control"  value=<?php  echo $_SESSION['username'] ?>>
                                    <input type="hidden" name="username" value=<?php  echo $_SESSION['username'] ?>>
                                  </div><br>
                                  <div class="input-group ">
                                    <span class="input-group-addon"><i class="ion-android-home" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="alamat" size="height:200px;" class="form-control" placeholder="Masukkan Alamat" required autofocus="" value='<?php  echo $alamat ?>'>
                                  </div><br>
                                  <div class="input-group ">
                                    <span class="input-group-addon"><i class="icon ion-document-text" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Masukkan email" required autofocus="" value='<?php  echo $email ?>'>
                                  </div><br>
                                     <div class="input-group ">
                                    <span class="input-group-addon"><i class="icon ion-iphone" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP" required autofocus="" value='<?php  echo $no_hp ?>'>
                                  </div><br>       
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Merk</label>
                                      </div>
                                      <select class="custom-select" name="merk" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Yamaha">Yamaha</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Kawasaki">Kawasaki</option>
                                      </select>
                                    </div>

                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Pilihan Servis</label>
                                      </div>
                                      <select class="custom-select" name="pilihan" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="Servis/1 minggu">Servis/1 minggu</option>
                                        <option value="Servis/2 minggu">Servis/2 minggu</option>
                                        <option value="Servis/3 minggu">Servis/3 minggu</option>
                                      </select>
                                    </div>

                                 <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Jumlah Servis</label>
                                      </div>
                                      <select class="custom-select" name="jumlah" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="5_kali_servis(Rp.100.000)">5 kali servis = Rp.100.000</option>
                                        <option value="10_kali_servis(Rp.190.000)">10 kali servis = Rp.190.000</option>
                                        <option value="15_kali_servis(Rp.280.000)">15 kali servis = Rp.280.000</option>
                                        <option value="20_kali_servis(Rp.370.000)">20 kali servis = Rp.370.000</option>
                                      </select>
                                    </div>
                                    <div class="input-group ">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Tanggal Mulai Perbaiki</label>
                                    </div>
                                    <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Mulai Perbaiki" required autofocus="">
                                  </div><br> 
                                  </div>
                                  </div>
                                  <br>
                          </div>
                           <div class="input-group" style="margin-left: 250px; margin-bottom: 110px"> <input type="submit" name="servis" class="btn btn-primary" value="Register"> </div>
                        </ul> 
                     </form>
                         </div>
                          </div>
                      
                    </div>
     
</div>
</div></div></div>

   
  <!--modalLogin-->   

<div class="login-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
 
          <form action="cek_login.php" style=" margin-bottom: 70px;" align="center" method="post" class="navbar-form">
            <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                  <span class="glyphicon glyphicon-remove"></span></a>

               <h2 class="text-uppercase text-center" style="font-size: 18px">Masuk Sebagai Pelanggan Servis Berkala</h2><br><br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="ion-android-person" style="font-size: 30px; margin-right:10px"></i></span>
                  <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" required autofocus="">
                </div> <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="ion-android-lock" style="font-size: 30px; margin-right:10px"></i></span>
                  <input type="password" name="password" class="form-control" placeholder="Kata sandi" required autofocus="">
                </div>
                <br>
              
                  <div class="input-group" style="margin-left: 300px">
                    <input type="submit" name="login" class="btn btn-primary" value="login">
                  </div><br><br>

                     <p style=" font-size: 15px" > Belum Punya Akun? <a class="portfolio-link" href="#modalRegister" data-toggle="modal" data-dismiss="modal">Daftar</a></p>         
          </form>
      </div>
      </div>
    </div></div></div></div></div>
 <!--Dibengkel-->
      <div class="login-modal modal fade" id="ModalDibengkel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-center" style="font-size: 20px; margin-top: 20px">Perbaiki Dibengkel</h2><hr style="background-color: #45aaf2; margin-bottom: 50px">
                  
                        <div class="box-body">
                          <form action="add.php" method="post" >
                            <div class="row">
                              <div class="col-lg-6">
                              <div class="input-group ">
                                  <label style="margin-right: 60px">Nama:</label>
                                  <input type="text" class="form-control" placeholder="" readonly="" name="nama" value=<?php echo $_SESSION['username'];?>>
                                  <input type="hidden" name="nama" value=<?php echo $_SESSION['username'];?>>
                              </div><br>
                           <div class="input-group">
                                      <label style="margin-right: 20px">Merk Motor : </label>
                                      <?php
                                      if(  $_GET["model"])
                                      {
                                       echo "<input type='text' class='form-control' name='merk' value=".$_GET["model"].">";
                                      }
                                      ?>
                                    </div><br>
                               <div class="input-group">
                                  <label style="margin-right: 55px">Alamat:</label>
                                  <textarea type="text" class="form-control" placeholder=""  name="alamat" ><?php echo $alamat;?></textarea>
                                  
                                </div><br>
                              </div>
                              <div class="col-lg-6">    
                              <div class="input-group">
                                  <label style="margin-right: 105px">No Hp:</label>
                                  <input type="number" class="form-control" placeholder="" name="no_hp" value=<?php echo $no_hp;?>>
                              </div><br>

                               <div class="input-group">
                                <label for="tanggalpesan" style="margin-right: 5px">Tanggal Pemesanan: </label>
                                <input name="tanggal" type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal">
                              </div><br>
                               <div class="input-group">
                                <label for="jampesan" style="margin-right: 35px">jam Pemesanan: </label>
                                <input name="jam" type="time" class="form-control" id="jampesan" placeholder="masukantanggal">
                              </div><br>
                              <div class="input-group">
                                  <label style="margin-right: 95px">Keluhan:</label>
                                  <textarea name="keluhan" class="form-control" aria-label="With textarea"></textarea>
                              </div> <br>
                              <input type="hidden" name="jenis_perbaiki" value="bengkel">
                                  <div class="box-footer" style="margin-right: 130px">
                                    <button type="submit" class="btn btn-danger pull-right" name="pesan" value="">Perbaiki</button>
                                  </div>
                                </div>
                              </div>
                           </form>
                            <br>     
                        </div> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!--Modal Dirumah-->

<div class="login-modal modal fade" id="ModalDirumah" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-center" style="font-size: 20px; margin-top: 20px">Perbaiki Dirumah</h2><hr style="background-color: #45aaf2; margin-bottom: 50px">
                  
                        <div class="box-body">
                          <form action="add.php" method="post" >
                            <div class="row">
                              <div class="col-lg-6">
                              <div class="input-group ">
                                  <label style="margin-right: 60px">Nama:</label>
                                  <input type="text" class="form-control" placeholder="" readonly="" name="nama" value=<?php echo $_SESSION['username'];?>>
                                  <input type="hidden" name="nama" value=<?php echo $_SESSION['username'];?>>
                              </div><br>
                           <div class="input-group">
                                      <label style="margin-right: 20px">Merk Motor : </label>
                                      <?php
                                      if(  $_GET["model"])
                                      {
                                       echo "<input type='text' class='form-control' name='merk' value=".$_GET["model"].">";
                                      }
                                      ?>
                                    </div><br>
                               <div class="input-group">
                                  <label style="margin-right: 55px">Alamat:</label>
                                  <textarea type="text" class="form-control" placeholder=""  name="alamat" ><?php echo $alamat;?></textarea>
                                </div><br></div>
                              <div class="col-lg-6">    
                              <div class="input-group">
                                  <label style="margin-right: 105px">No Hp:</label>
                                  <input type="number" class="form-control" placeholder="" name="no_hp" value=<?php echo $no_hp;?>>
                              </div><br>

                               <div class="input-group">
                                <label for="tanggalpesan" style="margin-right: 5px">Tanggal Pemesanan: </label>
                                <input name="tanggal" type="date" class="form-control" id="tanggalpesan" placeholder="masukantanggal">
                              </div><br>
                               <div class="input-group">
                                <label for="jampesan" style="margin-right: 35px">jam Pemesanan: </label>
                                <input name="jam" type="time" class="form-control" id="jampesan" placeholder="masukantanggal">
                              </div><br>
                              <div class="input-group">
                                  <label style="margin-right: 95px">Keluhan:</label>
                                  <textarea name="keluhan" class="form-control" aria-label="With textarea"></textarea>
                              </div> <br>
                              <input type="hidden" name="jenis_perbaiki" value="rumah">
                                  <div class="box-footer" style=" margin-right: 130px">
                                    <button type="submit" class="btn btn-danger pull-right" name="pesan" value="">Perbaiki</button>
                                  </div>
                                </div>
                              </div>
                           </form>    
                            <br>     
                        </div> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--logindulu-->

   
     
          <!--Modal Dijalan-->

    <div class="login-modal modal fade" id="ModalDijalan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-center" style="font-size: 20px; margin-top: 20px">Perbaiki Dijalan</h2><hr style="background-color: #45aaf2; margin-bottom: 50px">
                  
                        <div class="box-body">
                          <form action="add.php" method="post" >
                              <div class="row">
                                <div class="col-lg-6 col-offset-lg-2">
                              <div class="input-group">
                                  <label style="margin-right: 65px">Nama:</label>
                                  <input type="text" class="form-control" placeholder="" readonly="" name="nama" value=<?php echo $_SESSION['username'];?>>
                                  <input type="hidden" name="nama" value=<?php echo $_SESSION['username'];?>>
                              </div><br>
                           <div class="input-group">
                                      <label style="margin-right: 20px">Merk Motor : </label>
                                      <?php
                                      if(  $_GET["model"])
                                      {
                                       echo "<input type='text' class='form-control' name='merk' value=".$_GET["model"].">";
                                      }
                                      ?>
                                    </div><br>
                                <div class="input-group">
                                  <label style="margin-right: 55px">Alamat :</label>
                                  <input type="text" readonly="" class="form-control" placeholder="" id="lok" name="alamat">
                              </div><br>

                            </div>
                              <div class="col-lg-6">      
                            <div class="input-group">
                                  <label style="margin-right: 90px">No Hp:</label>
                                  <input type="number" class="form-control" placeholder="" name="no_hp" value=<?php echo $no_hp;?>>
                              </div><br>
                                <div class="input-group">
                                      <label style="margin-right: 20px">Jenis Kerusakan: </label>
                                      <textarea name="keluhan" class="form-control"></textarea>
                              </div><br>
                              <input type="hidden" name="jenis_perbaiki" value="jalan">
                              <input type="hidden" name="tanggal" value="0">
                              <input type="hidden" name="jam" value="0">
                                  <div class="box-footer" style="margin-bottom: 10px; margin-right: 130px">
                                    <button type="submit" class="btn btn-danger pull-right" name="pesan" value="">Perbaiki</button>
                                  </div>
                                </div>
                              </div>
                           </form>
<div>  
<p id="tampilkan"></p>
<button class="btn btn-info pull-left" onclick="getLocation()">Cek Lokasi Anda!</button><br><br>
<div id="mapcanvas"></div></div>
<br>
                        </div> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--HM-->
    <div class="login-modal modal fade" id="lihat" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
          <!--Modal Dijalan-->

      <div id="pac-container">
        <label>Alamat: </label>
        <input id="pac-input" type="text"
            placeholder="Enter a location">
     </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>


  <!--MAP-->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  
<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkE6oJvsyX4sRAw0QTt3R_gJClY0NtIFQ&libraries=places&callback=initMap"
        async defer></script>
 
<script>
var view = document.getElementById("tampilkan");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    mapcanvas = document.getElementById('mapcanvas')
    mapcanvas.style.height = '500px';
    mapcanvas.style.width = '1000px';
 
    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
     
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
        position:latlon,
        map:map,
        title:"You are here!"
    });
    window.onload=document.getElementById("lok");
   var element_kasi=document.getElementById("lok");
   element_kasi.value =lat+','+ lon; 
}
 
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
            break;
        case error.POSITION_UNAVAILABLE:
            view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
            break;
        case error.TIMEOUT:
            view.innerHTML = "Requestnya timeout bro"
            break;
        case error.UNKNOWN_ERROR:
            view.innerHTML = "An unknown error occurred."
            break;
    }
 }
</script> 
  <!-- JavaScript Libraries -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/config.js" type="text/javascript"></script>
  <script src="lib/jquery/jquery.min.js"></script>
    <!--<script src="lib/jquery/jquery-migrate.min.js"></script>-->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
