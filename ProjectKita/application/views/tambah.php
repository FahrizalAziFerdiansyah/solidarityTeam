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
                    <li class="">
                    <a href="pelanggan" > <i class="menu-icon fa fa-th"></i>Pelanggan Mendaftar</a>
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
                                            
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">Tambah Montir</div>
                                                        <div class="card-body card-block">
                                                        <?php echo form_open_multipart('home/add_montir'); ?>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="username" name="nama_montir" placeholder="Username" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                        <input type="text" id="email" name="password" placeholder="Buat Password Montir" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                        <input type="text" id="password" name="no" placeholder="No Hp" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                        <input type="email" id="password" name="email" placeholder="Email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Gambar</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="foto" class="form-control-file"></div>
                                                                </div>
                                                                <div class="form-actions form-group"><input type="submit" value="Tambah" class="btn btn-success btn-sm"></div>
                                                            <?php echo form_close();?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">Tambah Sparepart</div>
                                                        <div class="card-body card-block">
                                                        <?php echo form_open_multipart('home/add_part'); ?>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                                        <input type="text" id="username" name="nama" placeholder="Username" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                        <input type="text" id="email" name="harga" placeholder="Harga" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                        <input type="text" id="password" name="deskripsi" placeholder="Deskripsi" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                        <select name="stok" id="select" class="form-control">
                                                                            <option value="0">Pilih Stok</option>
                                                                            <option value="Ada">Ada</option>
                                                                            <option value="Kosong">Kosong</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Gambar</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="foto" class="form-control-file"></div>
                                                                </div>
                                                                <div class="form-actions form-group"><input type="submit" value="Tambah" class="btn btn-success btn-sm"></div>
                                                                <?php echo form_close();?>
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
