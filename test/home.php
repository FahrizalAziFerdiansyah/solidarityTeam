<?php
include'config.php';
session_start();
$name=$_SESSION['username'];
$query="SELECT * FROM tbl_user where username='$name'";
$data=mysqli_query($config,$query);
while ($rowcat=mysqli_fetch_array($data)){
$username=$rowcat['username'];
$sub_bidang=$rowcat['sub_bidang'];
$aduh=$rowcat['nama'];
$nip=$rowcat['nip'];

}

?>

<?php

$z=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE asal_surat_sub= '$sub_bidang'");
while ($tampil=mysqli_fetch_array($z)) {
  $ab=$tampil['count(id_surat)'];
}
$y=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE nip= '$nip'");
while ($tampil=mysqli_fetch_array($y)) {
  $abc=$tampil['count(id_surat)'];
}


?>
<?php
                //SEKETARIAT
//Bag Umum (Surat Keluar)
$bidang='Bag Umum';
$bag_umum=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE asal_surat_sub= '$bidang'");
while ($tampil=mysqli_fetch_array($bag_umum)) {
  $a=$tampil['count(id_surat)'];
}
//Bag Umum (Surat Masuk)
$nip='12345';
$bag_umum=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE nip= '$nip'");
while ($tampil=mysqli_fetch_array($bag_umum)) {
  $b=$tampil['count(id_surat)'];
}
//Bag Program (Surat Keluar)
$bidang='Bag Program';
$data=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE asal_surat_sub= '$bidang'");
while ($tampil=mysqli_fetch_array($data)) {
  $e=$tampil['count(id_surat)'];
}
//Bag Program (Surat Masuk)
$nip='41172253';
$data=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE nip= '$nip'");
while ($tampil=mysqli_fetch_array($data)) {
  $f=$tampil['count(id_surat)'];
}

                //BIDANG KETENAGAAN
//Seksi Tendik (Surat Keluar)
$bidang='Seksi Tendik';
$data=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE asal_surat_sub= '$bidang'");
while ($tampil=mysqli_fetch_array($data)) {
  $c=$tampil['count(id_surat)'];
}
//Seksi Tendik (Surat Masuk)
$nip='122121';
$data=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE nip= '$nip'");
while ($tampil=mysqli_fetch_array($data)) {
  $d=$tampil['count(id_surat)'];
}


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Suratin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">*{font-family:century gothic</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>Resep Surat</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Beranda <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Agenda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penyuratan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                
                <li><a href="tampil.php">Surat Masuk</a></li>
                <li class="divider"></li>
                <li><a href="surat_keluar.php">Surat Keluar</a></li>
                </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
             
              
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              
              <ul class="dropdown-menu">
                
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      
      <!-- Main content -->
      <section class="content">
        <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="assets/dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $username;?></h3>

              <p class="text-muted text-center"><?php echo $aduh;?> Bagian <?php echo $sub_bidang;?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jumlah Surat Masuk</b> <a >(<?php echo $abc; ?>)</a> <a  href="tampil.php" class="btn btn-default pull-right">Lihat</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Surat Keluar</b> <a>(<?php echo $ab; ?>)</a> <a href="surat_keluar.php" class="btn btn-default pull-right" >Lihat</a>
                
              </ul>

              <a class="btn btn-primary btn-block"><b>Admin</b></a>
            
            <!-- /.box-body -->
          </div></div></div>
         <div class="col-md-9">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active"><br>
              <h3 class="widget-user-username">Data Surat Masuk & Keluar</h3>
              
            </div>
          </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SEKETARIAT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr><td>-----------Sub------------</td><th>Surat Masuk</th><th>Surat Keluar</th></tr>
                        <tr><td>Bag Umum</td> <td> <?php echo $b; ?></td><td> <?php echo $a; ?></td></tr>
                        <tr><td>Bag Program</td><td> <?php echo $f; ?></td><td> <?php echo $e; ?></td></tr>
                        <tr><td>Bag Kautase</td></tr>
                </thead>
              </table>
          </div>  </div>
           <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bidang ketenagaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr><td>-----------Sub------------</td><th>Surat Masuk</th><th>Surat Keluar</th></tr>
                        <tr><td> seksi tendik</td> <td> <?php echo $d; ?></td><td> <?php echo $c; ?></td></tr>
                        <tr><td> seksi kependudukan</td><td> <?php echo $f; ?></td><td> <?php echo $e; ?></td></tr>
                        <tr><td> seksi PSDM</td></tr>
                </thead>
              </table>
          </div>  </div>
           <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SEKETARIAT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr><td>-----------Sub------------</td><th>Surat Masuk</th><th>Surat Keluar</th></tr>
                        <tr><td>Bag Umum</td> <td> <?php echo $b; ?></td><td> <?php echo $a; ?></td></tr>
                        <tr><td>Bag Program</td><td> <?php echo $f; ?></td><td> <?php echo $e; ?></td></tr>
                        <tr><td>Bag Kautase</td></tr>
                </thead>
              </table>
          </div>  </div>
           <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SEKETARIAT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr><td>-----------Sub------------</td><th>Surat Masuk</th><th>Surat Keluar</th></tr>
                        <tr><td>Bag Umum</td> <td> <?php echo $b; ?></td><td> <?php echo $a; ?></td></tr>
                        <tr><td>Bag Program</td><td> <?php echo $f; ?></td><td> <?php echo $e; ?></td></tr>
                        <tr><td>Bag Kautase</td></tr>
                </thead>
              </table>
          </div>  </div>
           <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bidang kebudayaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr><td>-----------Sub------------</td><th>Surat Masuk</th><th>Surat Keluar</th></tr>
                        <tr><td>Bag Umum</td> <td> <?php echo $b; ?></td><td> <?php echo $a; ?></td></tr>
                        <tr><td>Bag Program</td><td> <?php echo $f; ?></td><td> <?php echo $e; ?></td></tr>
                        <tr><td>Bag Kautase</td></tr>
                </thead>
              </table>
          </div>  </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
