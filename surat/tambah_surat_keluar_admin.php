<?php
include'config.php';
session_start();
$nama=$_SESSION['username'];
$query=mysqli_query($config, "SELECT * FROM tbl_user where username='$nama'");

while ($rowcat=mysqli_fetch_array($query)){
$nama_lengkap=$rowcat['nama_lengkap'];
$bidang=$rowcat['nama'];
$sub_bidang=$rowcat['sub_bidang'];
$nip=$rowcat['nip'];
$file=$rowcat['foto'];


// ambil data file

  
  }

if (isset($_POST['kirim'])){

$file = $_FILES['file']['name'];
$namaSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "upload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$file);
  

    $sql_add="INSERT INTO tbl_surat_keluar(asal_surat,asal_surat_sub,disposisi,no_surat,isi,tgl_surat,kode,file,keterangan,nip) VALUES ("
    ."'".$_POST['asal_surat']."','".$_POST['asal_surat_sub']."','".$_POST['disposisi']."','".$_POST['no_surat']."','".$_POST['isi']."','".$_POST['tgl_surat']."','".$_POST['kode']."','$file','".$_POST['keterangan']."','".$_POST['nip']."') ";

    $add="INSERT INTO tbl_surat_masuk(asal_surat,asal_surat_sub,disposisi,no_surat,isi,tgl_surat,kode,file,keterangan,nip) VALUES ("
    ."'".$_POST['asal_surat']."','".$_POST['asal_surat_sub']."','".$_POST['disposisi']."','".$_POST['no_surat']."','".$_POST['isi']."','".$_POST['tgl_surat']."','".$_POST['kode']."','$file','".$_POST['keterangan']."','".$_POST['nip']."') ";
    @mysqli_query($config,$add);
    @mysqli_query($config,$sql_add);


    echo '
    <script>alert("Surat Telah Terkirim!");window.location="surat_keluar_admin.php"</script>
    ';


}

$no=mysqli_query($config,"SELECT id_surat FROM tbl_surat_keluar ORDER BY id_surat ASC");
while ($counter= mysqli_fetch_array($no)) {

  $no_surat=$counter['id_surat'];
  }


$sql = mysqli_query($config, "SELECT id_surat FROM tbl_surat_keluar");
$no_agenda = "1";
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

$abcd=$ab + $abc;

?>

<?php
$psn=mysqli_query($config,"SELECT count(nip) from tbl_user");
while ($nilai=mysqli_fetch_array($psn)) {
  $jmlh=$nilai['count(nip)'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                    <a href="#">
                      <h4>
                        <?php echo $abc; ?> Surat yang masuk
                      </h4>
                      <p>Lihat surat yang masuk sekarang?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
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
              <img src="upload/<?php echo $file;?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nama_lengkap; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="upload/<?php echo $file;?>" class="img-circle" alt="User Image">

                <p>
                   <?php echo $nama_lengkap; ?> - <?php echo $bidang; ?>
                  <small><?php echo $sub_bidang; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="ubah_pass.php" class="btn btn-default btn-flat">Ubah Password</a>
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
          <img src="upload/<?php echo $file;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama_lengkap; ?></p>
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
          <a href="admin.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
         
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Transaksi Surat</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin1.php"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
            <li><a href="surat_keluar.php"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
          </ul>
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
                <img class="" src="assets/logo1.png" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Selamat Datang <?php echo $nama_lengkap; ?></h3>
              <h5 class="widget-user-desc">Dinas Pendidikan - <?php echo $bidang; ?> - <?php echo $sub_bidang; ?></h5>
            </div>
           
          </div>
          <!-- /.widget-user -->
        </div></div>
         <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $abc; ?> Pesan</h3>

              <p>Jumlah Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="admin1.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


          <!-- /.widget-user -->
        
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $ab;?> Pesan</h3>

              <p>Jumlah Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-files-o"></i>
            </div>
            <a href="surat_keluar.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo  $jmlh; ?> User</h3>

              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <form action="tambah_surat_keluar_admin.php" method="post" enctype="multipart/form-data">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">KIRIM SURAT</h3>
            </div>
            <div class="box-body">
              <div class="col-md-6">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>No Agenda :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <input type="number" class="form-control" name="" value="<?php 
                  if (mysqli_num_rows($sql) == 0){
                  echo $no_agenda;}
                  $result = mysqli_num_rows($sql);
                  $counter = 0;
                  while(list($no_agenda) = mysqli_fetch_array($sql)){
                  if (++$counter == $result) {
                  $no_agenda++;
                  echo $no_agenda;}}?>">
                </div>
                <!-- /.input group -->
              </div><br>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
              <div class="form-group">
                <label>Asal Surat :</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                  <input type="hidden"  class="form-control" name="asal_surat" value=" - ">
                  <input type="text" class="form-control" readonly="" name="asal_surat_sub" value="Dinas Pendidikan dan Kebudayaan">
                </div>
                <!-- /.input group -->
              </div>

              
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Tujuan Surat :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                <textarea type="text" class="form-control" name="nip" value=""></textarea>
                </div>
                <!-- /.input group -->
              </div>


              <div class="form-group">
                <label>Disposisi :</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                  
                  <textarea type="text" class="form-control" name="disposisi" value=""></textarea>
                </div>
                <!-- /.input group -->
              </div>


              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Tanggal Diterima : </label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                 <input type="date" class="form-control" name="tgl_surat">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <div class="col-md-6">
              <!-- IP mask -->
              <div class="form-group">
                <label>Perihal :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <textarea type="text" name="isi" class="form-control" data-mask></textarea>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Kode Klasifikasi : </label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                 <input type="text" class="form-control" name="kode">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Nomor Surat : </label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                 <input type="number" class="form-control" name="no_surat">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Keterangan Surat : </label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-file"></i>
                  </div>
                <select name="keterangan" class="form-control">
                  <option value="Rahasia">Rahasia</option>
                  <option value="Penting">Penting</option>
                  <option value="Biasah">Biasah</option>
                </select>
                </div>
                <!-- /.input group -->
              </div>

               Pilih file:
              <input type="file" name="file" />
            </div>
           <div class="box-footer">
                <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                <button type="submit" class="btn btn-danger" style="margin-left: 7px">Batal</button>
              </div>
            </div>
            <!-- /.box-body -->

          </div>

          <!-- /.box -->

          
          <!-- /.box -->
          </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>