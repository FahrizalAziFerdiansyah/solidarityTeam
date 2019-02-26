<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// *** LOAD SESSION
session_start();
// *** LOAD CONFIGURATION VARS
// *** DB CONNECTION
include "db_conn.php";
?>

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
    <title>Admin Beling</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>



    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header mt-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="assets/logo.png" alt="Logo">BELING</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div><br>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home.php"> <i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Administrator</a>
                         <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-puzzle-piece"></i><a href="tampil_montir.php">Data Montir</a></li>
                         <li><i class="fa fa-plus-circle"></i><a href="montir.php">Tambah Admin</a></li>
                         <li><i class="fa fa-plus-circle"></i><a href="montir.php">Tambah Montir</a></li>
                         </ul>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Data Perbaiki</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="rumah.php">Rumah</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="bengkel.php">Bengkel</a></li>
                            <li><i class="fa fa-bars"></i><a href="jalan.php">Jalan</a></li>
                        </ul>
                    </li>

                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Spare Part</a>
                         <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-puzzle-piece"></i><a href="part.php">Data Sparepart</a></li>
                         <li><i class="fa fa-plus-circle"></i><a href="tambah_part.php">Tambah Sparepart</a></li>
                         <li><i class="fa fa-plus-circle"></i><a href="transaksi_part.php">Transaksi Sparepart</a></li>
                         </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-th"></i>Tips dan Trik</a>
                         <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-puzzle-piece"></i><a href="trik.php">Data Tips & Trik</a></li>
                         <li><i class="fa fa-plus-circle"></i><a href="tambah_trik.php">Tambah Sparepart</a></li>
                     </ul>
                    </li>
                    <li class="">
                        <a href="orderan.php"> <i class="menu-icon fa fa-th"></i>Daftar Orderan</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-th"></i>Servis Berkala</a>
                         <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-puzzle-piece"></i><a href="jadwal.php">Daftar Servis Berkala</a></li>
                         <li><i class="fa fa-plus-circle"></i><a href="jadwal/crud_tabel.php">Buat Jadwal Servis</a></li>
                     </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
