<?php
include 'config.php'; 
session_start();
$name=$_SESSION['username'];
$query="SELECT * FROM tbl_user where username='$name'";
$data=mysqli_query($config,$query);
while ($rowcat=mysqli_fetch_array($data)){
$nama_lengkap=$rowcat['nama_lengkap'];
$username=$rowcat['username'];
$sub_bidang=$rowcat['sub_bidang'];
$aduh=$rowcat['nama'];
$nip=$rowcat['nip']; } ?>
<?php



if (isset($_POST['tambah'])) {

$level= 2;
$foto = $_FILES['file']['name'];
$namaSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "upload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$foto);

  $tambah="INSERT INTO tbl_user(nip,username,password,nama_lengkap,nama,sub_bidang,level,foto) VALUES ('".$_POST['nip']."','".$_POST['username']."','".$_POST['password']."','".$_POST['nama_lengkap']."','".$_POST['nama']."','".$_POST['sub_bidang']."','$level','$foto')";
  mysqli_query($config,$tambah);
  
  echo '<script>alert("User baru ditambahkan");window.location="lg_admin.php"</script> ';
  
}
?>

<?php
$m=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar");
while ($tampil=mysqli_fetch_array($m)) {
  $hm=$tampil['count(id_surat)'];
}

$z=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_keluar WHERE asal_surat_sub= '$sub_bidang'");
while ($tampil=mysqli_fetch_array($z)) {
  $ab=$tampil['count(id_surat)'];
}
$y=mysqli_query($config,"SELECT count(id_surat) FROM tbl_surat_masuk WHERE nip= '$nip'");
while ($tampil=mysqli_fetch_array($y)) {
  $abc=$tampil['count(id_surat)'];
}

$abcd=$ab + $abc;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
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
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#provinsi').change(function(){
      var provinsi_id=$(this).val();

    $.ajax({
      type:'POST',
      url:'kota.php',
      data:'prov_id='+provinsi_id,
      success:function(response){
        $('#kota').html(response);
      }
    });
  })
  });
</script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo $abcd;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <!-- end message -->
                   <li>
                    <a href="admin1.php">
                      <h4>
                        <?php echo $abc; ?> Surat yang masuk
                      </h4>
                      <p>Lihat surat yang masuk sekarang?</p>
                    </a>
                  </li>
                  <li>
                    <a href="surat_keluar.php">
                      <h4>
                        <?php echo $ab; ?> Surat yang keluar
                      </h4>
                      <p>Lihat surat keluarmu sekarang?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Pesan Anda</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/logo1.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/logo1.png" class="img-circle" alt="User Image">

                <p>
                   Dinas pendidikan dan kebudayaan
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="ubah_pass.php" class="btn btn-default btn-flat">Ubah password</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/logo1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form><br>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li><br>
        <li class="">
          <a href="lg_admin.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
         
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Agenda</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="">
          <a href="tambah_user.php">
            <i class="fa fa-dashboard"></i> <span>Tambah User</span>
          </a>  
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-light-blue">
              <div class="widget-user-image">
                <img class="img-circle" src="assets/logo1.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Selamat Datang Admin</h3>
              <h5 class="widget-user-desc">Dinas Pendidikan dan kebudyaan</h5>
            </div>
           
          </div>
          <!-- /.widget-user -->
        </div></div>

        <div class="row">
          <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tambah user</h3>
            </div>
            <form action="tambah_user.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-md-6">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Usename & Password</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user-circle"></i>
                  </div>
                  <input type="text" name="username"  class="form-control" placeholder="username">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-unlock-alt"></i>
                  </div>
                  <input type="password" name="password"  class="form-control" placeholder="Password">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Bidang:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-users"></i>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                    <?php
                    $sql_provinsi=mysqli_query($config, "SELECT * FROM bidang");
                    ?>
                    <select name="nama" id="provinsi"  class="form-control">
                    <option value=""> Pilih Bidang</option>
                   <?php
                    while ($row_provinsi =  mysqli_fetch_array($sql_provinsi)){ 
                    ?> 
                    <option value="<?php echo $row_provinsi['bidang'];?>"> <?php echo $row_provinsi ['bidang'] ?>
                    </option>
                    <?php }?>

                    </select>
                    </div>
                    <div class="col-md-6">
                    <select name="sub_bidang" id="kota" class="form-control" >
                    <option value="">Pilih Sub</option>
                    <option></option>
                    </select>
                    </div>
                    </div>
                </div>
                <!-- /.input group -->
              </div>
            </div>

            <div class="col-md-6">
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Data diri:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask -->
              <div class="form-group">

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="text" name="nip" class="form-control" placeholder="NIP">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>

             <div class="col-md-6"> 
              <div class="form-group">
                <label for="exampleInputFile">Pilih foto:</label>
                <input name="file" type="file" id="exampleInputFile">
              </div>
             </div>
            <div class="box-footer">
                <button type="submit"  name="tambah" class="btn btn-primary" style="margin-left:  15px">Simpan</button>
                <button type="submit" class="btn btn-danger" style="margin-left: 7px">Batal</button>
            </div>  
              </div>
            <!-- /.box-body -->
          </div>
        </form>
          <!-- /.box -->



      
        </div> 
        <div class="row"> 
          <div class="col-md-12">
        <h3 style="margin-left: 15px">Seketariat</h3>
      <?php  
      $level=1;
      $s='Seketariat';
      $result ="SELECT * FROM tbl_user WHERE level != 1 and nama= '$s'";
            $ada =  mysqli_query($config, $result);
            while ($row=mysqli_fetch_array($ada)) {
            echo '

     <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">'.$row['nama_lengkap'].'</h3>
              <h5 class="widget-user-desc">NIP ('.$row['nip'].')</h5>
              <a class="btn btn-danger pull-right"  onclick="return confirm("Apakah anda yakin?")" href="delete_user.php?nip='.$row['nip'].'">Delete</a>
            </div>
            <div class="widget-user-image">
              <img class="img-circle"  src="upload/'.$row['foto'].'" height="10px" width="500px" >
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Bidang</h5>
                    <span class="description-text">'.$row['nama'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>

                <!-- /.col -->
                <div class="col-sm-4 pull-right border-left">
                  <div class="description-block">
                    <h5 class="description-header">Sub Bidang</h5>
                    <span class="description-text">'.$row['sub_bidang'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> ';}?>
            </div>
          </div>

          <div class="row"> 
          <div class="col-md-12">
         <h3 style="margin-left: 15px">Ketenagaan</h3>
      <?php  
      $level=1;
      $k='Bidang Ketenagaan';
      $result ="SELECT * FROM tbl_user WHERE level != 1 and nama= '$k'";
            $ada =  mysqli_query($config, $result);
            while ($row=mysqli_fetch_array($ada)) {
            echo '

     <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <h3 class="widget-user-username">'.$row['nama_lengkap'].'</h3>
              <h5 class="widget-user-desc">NIP ('.$row['nip'].') </h5>
               <a class="btn btn-danger pull-right"  onclick="return confirm("Apakah anda yakin?")" href="delete_user.php?nip='.$row['nip'].'">Delete</a>
            </div>
            <div class="widget-user-image">
              <img class="img-circle"  src="upload/'.$row['foto'].'" height="10px" width="500px" >
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Bidang</h5>
                    <span class="description-text">'.$row['nama'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>

                <!-- /.col -->
                <div class="col-sm-4 pull-right border-left">
                  <div class="description-block">
                    <h5 class="description-header">Sub Bidang</h5>
                    <span class="description-text">'.$row['sub_bidang'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> ';}?>

          </div>
        </div>

        <div class="row"> 
          <div class="col-md-12">
        <h3 style="margin-left: 15px">Dikdan</h3>
      <?php  
      $level=1;
      $d='Bidang Dikdan';
      $result ="SELECT * FROM tbl_user WHERE level != 1 and nama= '$d'";
            $ada =  mysqli_query($config, $result);
            while ($row=mysqli_fetch_array($ada)) {
            echo '

     <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <h3 class="widget-user-username">'.$row['nama_lengkap'].'</h3>
              <h5 class="widget-user-desc">NIP ('.$row['nip'].') </h5>
               <a class="btn btn-danger pull-right"  onclick="return confirm("Apakah anda yakin?")" href="delete_user.php?nip='.$row['nip'].'">Delete</a>
            </div>
            <div class="widget-user-image">
              <img class="img-circle"  src="upload/'.$row['foto'].'" height="10px" width="500px" >
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Bidang</h5>
                    <span class="description-text">'.$row['nama'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>

                <!-- /.col -->
                <div class="col-sm-4 pull-right border-left">
                  <div class="description-block">
                    <h5 class="description-header">Sub Bidang</h5>
                    <span class="description-text">'.$row['sub_bidang'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> ';}?>
      </div>
    </div>

            <div class="row"> 
          <div class="col-md-12">
        <h3 style="margin-left: 15px">PNF dan PAUD</h3>
      <?php  
      $level=1;
      $p='Bidang PNF dan PAUD';
      $result ="SELECT * FROM tbl_user WHERE level != 1 and nama= '$p'";
            $ada =  mysqli_query($config, $result);
            while ($row=mysqli_fetch_array($ada)) {
            echo '

     <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-red">
              <h3 class="widget-user-username">'.$row['nama_lengkap'].'</h3>
              <h5 class="widget-user-desc">NIP ('.$row['nip'].') </h5>
               <a class="btn btn-danger pull-right"  onclick="return confirm("Apakah anda yakin?")" href="delete_user.php?nip='.$row['nip'].'">Delete</a>
            </div>
            <div class="widget-user-image">
              <img class="img-circle"  src="upload/'.$row['foto'].'" height="10px" width="500px" >
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Bidang</h5>
                    <span class="description-text">'.$row['nama'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>

                <!-- /.col -->
                <div class="col-sm-4 pull-right border-left">
                  <div class="description-block">
                    <h5 class="description-header">Sub Bidang</h5>
                    <span class="description-text">'.$row['sub_bidang'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> ';}?>
      </div>
    </div>

            <div class="row"> 
          <div class="col-md-12">
        <h3 style="margin-left: 15px">Kebudayaan</h3>
      <?php  
      $level=1;
      $k='Bidang Kebudayaan';
      $result ="SELECT * FROM tbl_user WHERE level != 1 and nama= '$k'";
            $ada =  mysqli_query($config, $result);
            while ($row=mysqli_fetch_array($ada)) {
            echo '

     <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-gray">
              <h3 class="widget-user-username">'.$row['nama_lengkap'].'</h3>
              <h5 class="widget-user-desc">NIP ('.$row['nip'].') </h5>
               <a class="btn btn-danger pull-right"  onclick="return confirm("Apakah anda yakin?")" href="delete_user.php?nip='.$row['nip'].'">Delete</a>
            </div>
            <div class="widget-user-image">
              <img class="img-circle"  src="upload/'.$row['foto'].'" height="10px" width="500px" >
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Bidang</h5>
                    <span class="description-text">'.$row['nama'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>

                <!-- /.col -->
                <div class="col-sm-4 pull-right border-left">
                  <div class="description-block">
                    <h5 class="description-header">Sub Bidang</h5>
                    <span class="description-text">'.$row['sub_bidang'].'</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> ';}?>
      </div>
    </div>

      </div>


          <!-- /.box -->


        </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
