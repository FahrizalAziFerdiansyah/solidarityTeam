<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?php echo base_url('admin/vendors/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/vendors/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/vendors/themify-icons/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/vendors/selectFX/css/cs-skin-elastic.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('admin/assets/css/style.css')?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
           
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Bengkel Kita</h3><!-- /.menu-title -->
                    <li class=" ">
                        <a href="index"> <i class="menu-icon fa fa-laptop"></i>Beranda</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Perbaikan Pelanggan</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li class=""><a href="jalan" > <i class="fa fa-table"></i>Dijalan</a> </li> 
                        <li class=""><a href="bengkel" > <i class="fa fa-table"></i>Dibengkel</a> </li> 
                        </ul>
                    </li>
                    <li class="">
                    <a href="sparepart" > <i class="menu-icon fa fa-th"></i>Sparepart</a>
                    </li>
                    <li class="">
                    <a href="montir" > <i class="menu-icon fa fa-th"></i>Montir</a>
                    </li>
                    <li class="">
                    <a href="tambah" > <i class="menu-icon fa fa-th"></i>Tambah Data</a>
                    </li>
                    <h3 class="menu-title"> <a href="#" aria-haspopup="true" aria-expanded="false"> </i>Keluar</a></h3><!-- /.menu-title -->
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        
                    </div>

                    <div class="language-select dropdown" id="language-select">
                       
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Cards</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

<?php
$no=1;
foreach($montir as $a){


?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url('./berkas/'.$a->foto) ?>"  width="200px" height="200px" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $a->nama_montir ?></h5>
                                    <div class="location text-sm-center"><i class="fa fa-phone"></i> <?php echo $a->no ?>, <?php echo $a->email ?></div>

                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                    <a class="btn btn-danger"   href="tampil_montir.php?id_montir='.$row['id_montir].'">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                    

                  



                    







                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url('admin/vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('admin/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('admin/assets/js/main.js')?>"></script>


</body>

</html>
