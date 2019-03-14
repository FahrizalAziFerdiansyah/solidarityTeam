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
     <?php 
            session_start();
            if($_SESSION['status']!="login"){
              header("location:../index.php?pesan=belum_login");
            }
    ?>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
           <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="index.php#services">Perbaiki</a></li>
          <li><a href="index.php#pelayanan">Pelayanan</a></li>
         <!-- <li><a href="#team">Team</a></li>-->
          <li><a href="index.php#trik">Tips And Trik</a>
          <li><a href="index.php#contact">Kontak</a></li>
           <li>  <h4 style="font-size: 15px; margin-left: 10px; margin-top: 20px; color: white" >Hai <?php echo $_SESSION['username'] ; ?></h4></li>
           <li><a href="logout.php" style="color: white"><i class="fa fa-sign-out" style="font-size: 25px"></i></a></li> 
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>

  <!-- #header -->
 <!--==========================
      Contact Section
    ============================-->
    <?php 
require'config.php';

if (isset($_POST["bayar"])) {
  
  if (bayar($_POST)>0) {
    echo "<script>
    alert('Selamat Bergabung!');
    </script>";
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}
?>
                <?php
                                
                                 $username=$_SESSION['username'];
                                 $query="SELECT * FROM users INNER JOIN user_servis ON users.username=user_servis.username WHERE user_servis.username='$username'";
                                 $rcat=mysqli_query($mysqli,$query);
                                 while ($rowcat=mysqli_fetch_array($rcat)){
                                      $username = $rowcat['username'];
                                      $jumlah=$rowcat['jumlah'];
                                      $pilihan=$rowcat['pilihan'];
                                 }
                                 ?>

    <section id="services" style="background: white" class="section-bg wow fadeInUp">
      <div class="container" style="margin-top: 100px">

        <div class="section-header">
          <h3>JADWAL SERVIS BERKALA</h3>
          <p>Ingin servis berkala tapi mager mau kebengkel? Disini aja!</p>
        </div>
            <div class="row row-offcanvas row-offcanvas-right">
                        <div class="col-xs-12 col-sm-8">

                        <form action="" method="POST">
                           <div class="form-group">
                            <label>Nama Pelanggan:</label>
                            <input type="text" name="username" class="form-control"  value=<?php  echo $_SESSION['username'] ?>>
                            </div>
                            <div class="form-group">
                              <label>Total Bayar:</label><br>
                                 <strong><i><?php echo $jumlah?></strong></i>
                                 <input type="hidden" name="total_bayar" value=<?php echo $jumlah?>>
                            </div>
                            <div class="form-group">
                                <label for="date">No Rekening : </label>
                                <input type="text" class="form-control" disabled="" value="0504.01.000240.30.1 A.n BELING">
                            </div>
                            <div class="form-group">
                                <label for="date">Jumlah Transfer : </label>
                                <input type="text" onkeypress="return HanyaAngka(event)" class="form-control" name="jum_tf" value="">
                            </div>
                            <div class="form-group">
                                <label for="judul">Bukti Transfer :</label>
                                <input type="file" name="bukti_tf" required autofocus="" placeholder="Upload bukti transfer anda" class="form-control" >
                            </div>
                            <br>
                            <center>
                            <input type="submit" name="bayar" class="btn btn-primary" value="Bayar"/>
                            <a href="Jadwal/index.php" class="btn btn-default">Kembali</a>
                            </center>
                        </form>
                </div>
                 <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Cara Pembayaran</a><br>
                        <p>1. Pastikan berapa total bayar yang harus anda bayar <br>2. Kirim melalui via transfer sesuai No Rek disamping<br>3. Upload bukti transfer anda kepada kami <br>4. Jadwal servis akan muncul 24 jam setelah pembayaran</p>
                         
                    </div>
                </div>

      </div>
      
    </section><!-- #contact -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container" >

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
  <!--modalLogin-->
               <?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan'] == "gagal"){
                        echo '<i><p style="color:red">Login gagal! username atau password salah! </p><i>';
                      }else if($_GET['pesan'] == "logout"){
                        echo '<i><p style="color:red">Anda berhasil keluar! </p><i>';
                      }else if($_GET['pesan'] == "belum_login"){
                        echo "Anda harus login untuk mengakses halaman admin";
                      }
                    }
                ?>    



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Beling</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
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
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
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
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
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

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script type="text/javascript">
function HanyaAngka(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
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
