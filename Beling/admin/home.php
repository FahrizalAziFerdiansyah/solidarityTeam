 <?php
// Create database connection using config file
require 'config.php';
include"header-admin.php";
 
// Fetch all users data from database
$pesan = query ("SELECT * FROM rumah")
?>
 <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<?php
$kondisi="Lunas";
$query="SELECT count(username)  FROM trans_servis WHERE kondisi='$kondisi'" ;
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $coba=$rowcat['count(username)'];
    # code...
}
?>

<?php
$kondisi="Lunas";
$query="SELECT SUM(total) FROM daftar_order WHERE status='$kondisi' HAVING SUM(total)" ;
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $total=$rowcat['SUM(total)'];
    # code...
}
 ?>

 <?php
$kondisi="Perbaikan Selesai";
$query="SELECT count(nama) FROM pelanggan WHERE kondisi='$kondisi'" ;
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $jalan=$rowcat['count(nama)'];
    # code...
}
 ?>

  <?php
$kondisi="Perbaikan Selesai";
$query="SELECT count(nama) FROM rumah WHERE kondisi='$kondisi'" ;
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $rumah=$rowcat['count(nama)'];
    # code...
}
 ?>
   <?php
$kondisi="Perbaikan Selesai";
$query="SELECT count(nama) FROM bengkel WHERE kondisi='$kondisi'" ;
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $bengkel=$rowcat['count(nama)'];
    # code...
}
 ?>
   <?php
$kondisi="Belum Dijawab";
$query="SELECT count(username) FROM konsultasi WHERE jawaban='$kondisi'" ;
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $konsul=$rowcat['count(username)'];
    # code...
}
 ?>
   
        <div class="content mt-3">


        
            <!--/.col-->
            
            <div class="col-lg-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Pendapat Jual Sparepart</div>
                                <div class="stat-digit">Rp.<?php echo $total?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Jumlah servis berkala</div>
                                <div class="stat-digit"><?php echo $coba?> Pelanggan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Konsultasi Pelanggan</div>
                                <div class="stat-digit"><a href="konsul.php"><?php echo $konsul?> pertanyaan belum dijawab</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-xl-6 col-lg-6">
                <div class="card">
               <div class="card-header bg-secondary">
               <strong class="card-title text-light" >Pelanggan Perbaiki Motor</strong></div>
                <div style="padding: 10px">  
                        <ul>
                            
                                <div class="text-muted">Perbaiki Dijalan</div>
                                <strong><?php echo $jalan  ?> Pelanggan</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $jalan  ?>px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            
                                <div class="text-muted">Perbaiki Dirumah</div>
                                <strong><?php echo $rumah  ?> Pelanggan</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $rumah ?>px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                         
                           
                                <div class="text-muted">Perbaiki Dibengkel</div>
                                <strong><?php echo $bengkel  ?> Pelanggan</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $bengkel ?>px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </ul>
                    </div>
                    </div>
                </div>
                    </div>
      
            <!--/.col-->

        <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->