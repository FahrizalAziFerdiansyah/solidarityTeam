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
                        <a href="../index"> <i class="menu-icon fa fa-laptop"></i>Beranda</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Perbaikan Pelanggan</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li class=""><a href="../jalan" > <i class="fa fa-table"></i>Dijalan</a> </li> 
                        <li class=""><a href="../bengkel" > <i class="fa fa-table"></i>Dibengkel</a> </li> 
                        </ul>
                    </li>
                    <li class="">
                    <a href="../sparepart" > <i class="menu-icon fa fa-th"></i>Sparepart</a>
                    </li>
                    <li class="">
                    <a href="../montir" > <i class="menu-icon fa fa-th"></i>Montir</a>
                    </li>
                    <li class="">
                    <a href="../tambah" > <i class="menu-icon fa fa-th"></i>Tambah Data</a>
                    </li>
                    <li class="">
                    <a href="../pelanggan" > <i class="menu-icon fa fa-th"></i>Pelanggan Mendaftar</a>
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
                                            
                                            
                                                <div class="col-lg-6">
                                                    <div class="card" >
                                                        <div class="card-header">Detail Perbaikan</div>
                                                        <div class="card-body card-block">
                                                        <?php foreach( $perbaikan as $u){ ?>
                                                            <form action="<?php echo base_url(). 'index.php/home/ubah_perbaikan'; ?>" method="post">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                                                        <input type="text" id="username" name="nama" placeholder="Username" value="<?php echo $u->nama ?>" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <h2 style="color: black;font-size: 20px;">Ulasan Perbaikan :</h2>
                                                                <p> <?php echo $u->ulasan?></p>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                                                        <input type="text" id="email" name="total_bayar" placeholder="Masukkan Total Bayar" value="" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                </div>
                
                                                                
                                                                
                                                                <div class="form-actions form-group"><input type="submit" value="Ubah" class="btn btn-success btn-sm"></div>
                                                            </form>
                                                        <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="<?php echo base_url('admin/vendors/jquery/dist/jquery.min.js')?>"></script>
                            <script src="<?php echo base_url('admin/vendors/popper.js/dist/umd/popper.min.js')?>"></script>

                            <script src="<?php echo base_url('admin/vendors/jquery-validation/dist/jquery.validate.min.js')?>"></script>
                            <script src="<?php echo base_url('admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')?>"></script>

                            <script src="<?php echo base_url('admin/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
                            <script src="<?php echo base_url('admin/assets/js/main.js')?>"></script>
</body>
</html>
