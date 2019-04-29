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
  <header id="header">
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
          <li><a href="#services">Perbaiki</a></li>
          <li><a href="#pelayanan">Pelayanan</a></li>
         <!-- <li><a href="#team">Team</a></li>-->
          
          <li><a href="#contact">Kontak</a></li>
           <li>  <h4 style="font-size: 15px; margin-left: 10px; margin-top: 20px; color: white" >Hai <?php echo $_SESSION['username'] ; ?></h4></li>

        </ul>
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
                <p>Montir langsung dari bengkel resmi dan anda dapat konsultasi dengan kami gratis selama 24 jam.</p>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Terdapat Bengkel Nyata</h2>
                <p>Tidak hanya Online, kami juga terdapat bengkel fisik secara nyata, jadi memudahkan para client yang ingin memperbaiki motornya namun tidak memiliki lahan yang cukup luas untuk tempat perbaikan.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Pelayanan Cepat</h2>
                <p>Karena ditangani oleh tenaga kerja yang banyak dan profesional maka akan mempercepat waktu perbaikan.</p>
                 
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ditangani Oleh Orang Profesional</h2>
                <p>Montir yang ada di bengkel kami semua telah tersertifikasi sebagai montir yang handal, dan sudah mengikuti pelatihan sebelumnya.</p>
                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Sparepart Lengkap</h2>
                <p>Menyediakan bermacam - macam Sparepart dan kelengkapan berbagai merk kendaraan speda motor yang ada di pasaran Indonesia.</p>
                
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    
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

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-map" style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a class="portfolio-link" data-toggle="modal" href="#ModalDijalan">Di Jalan</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepaboutturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-ios-home-outline"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a href="">Di Rumah</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-wrench"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a href="">Di Bengkel</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
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
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

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
            <h4 class="title"><a href="">Ganti Sparepart</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepaboutturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-chatboxes"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a href="">Konsultasi</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s" align="center">
            <div class="icon"><i class="ion-clipboard"style="font-size: 100px; margin-left: 50px"></i>
            <h4 class="title"><a href="">Servis Berkala</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>          
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Team Section
    ============================-->
   <!-- <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>-->
    <!-- #team -->
     <!--modalRegister-->

<?php 
require'config.php';
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

if (isset($_POST["pesan"])) {
  
  if (perbaikiJalan($_POST)>0) {
    echo "<script>
    alert('pemesanan anda berhasil!');
    </script>";
    # code...
  }else{
    echo "<script>
    alert('pemesanan anda berhasil!');
    </script>";
  }
}
 ?>    


    <div class="login-modal modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
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
          
                   <form action="" method="post">
                        <ul>
                           <a class="btn btn-default" data-dismiss="modal" style="margin-left: 400px; margin-bottom: 8px;" >
                          <span class="glyphicon glyphicon-remove"></span></a>

                          <div align="center" style="margin-top: 20px;">
                            <h1 class="text-uppercase" style="font-size: 30px"> Registrasi</h1><br><br>
                                 <div class="input-group">
                                    <span class="input-group-addon"><i class="ion-android-person" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" required autofocus="">
                                  </div><br>
                                  <div class="input-group ">
                                    <span class="input-group-addon"><i class="ion-android-lock" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required autofocus="">
                                  </div><br>       
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="ion-android-lock" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Kata sandi" required autofocus="">
                                  </div><br>
                                   <div class="input-group ">
                                    <span class="input-group-addon"><i class="ion-android-lock" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Kata sandi" required autofocus="">
                                  </div><br>
                                     <div class="input-group ">
                                    <span class="input-group-addon"><i class="ion-android-lock" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Masukkan email" required autofocus="">
                                  </div><br>
                                     <div class="input-group ">
                                    <span class="input-group-addon"><i class="ion-android-lock" style="font-size: 30px; margin-right:10px"></i></span>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP" required autofocus="">
                                  </div><br>


                                  <br>
                             <div class="input-group" style="margin-left: 110px; margin-bottom: 20px"> <input type="submit" name="register" class="btn btn-primary" value="Register"> </div>
                          </div>
                        </ul> 
                      </form> 
          
      </div>
      </div>
    </div></div></div></div></div>
    <!--Modal Dijalan-->

    <div class="daftar-modal modal fade" id="ModalDijalan" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-center" style="font-size: 20px; margin-top: 20px">Perbaiki Dijalan</h2><hr style="background-color: #45aaf2; margin-bottom: 50px">
                  
                        <div class="box-body">
                          <form action="" method="post" >
                              

                              <div class="input-group">
                                  <label style="margin-right: 25px">Nama:</label>
                                  <input type="text" class="form-control" placeholder="" name=""></input>
                              </div><br>
                               <div class="input-group">
                                  <label style="margin-right: 20px">Alamat:</label>
                                  <input type="text" class="form-control" placeholder="" name="alamat">
                              </div><br>      
                              <div class="input-group">
                                  <label style="margin-right: 25px">No Hp:</label>
                                  <input type="text" class="form-control" placeholder="" name="no_hp">
                              </div><br>
                              <div class="input-group">
                                  <label style="margin-right: 10px">Keluhan:</label>
                                  <input type="text" class="form-control" placeholder="" name="keluhan">
                              </div> <br>
                                  <div class="box-footer" style="margin-bottom: 100px; margin-right: 50px">
                                    <button type="submit" class="btn btn-info pull-right" name="pesan" value="">Perbaiki Sekarang!</button>
                                  </div>
                           </form>     
                        </div> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

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
              
                  <div class="input-group" style="margin-left: 170px">
                    <input type="submit" name="login" class="btn btn-primary" value="login">
                  </div><br>

                     <p style=" font-size: 15px" > Belum Punya Akun? <a class="portfolio-link" href="#modalRegister" data-toggle="modal" data-dismiss="modal">Daftar</a></p>
                   
                  

                   
             
          </form>
          
      </div>

      </div>
    </div></div></div></div></div>

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
