<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li class="active"><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>
                          <section id="unseen" class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Nama Siswa</th>
                                <th>Guru Pengajar</th>
                                <th>Status</th>
                                <th>Rusak</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Batas Pengembalian</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Keterangan</th>
                                <th>Nama Petugas</th>
                                <th colspan="2">Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                    <?php

                                include "koneksi.php";
                                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

                                $from = $page * 10 - 10;

                                $s = mysql_query("SELECT * FROM peminjaman");
                                while ($z = mysql_fetch_array($s)) {
                                  $tgl1 = explode (' ', $z['tgl_pinjam']);
                                  $date1 = $tgl1[0];
                                  $jam1 = $tgl1[1];

                                  $tgl_kembali = explode(' ', $z['tgl_kembali']);
                                  $tgl_kem = $tgl_kembali[0];
                                  $tgl_kem = strtotime($tgl_kem);

                                  date_default_timezone_set('Asia/Jakarta');
                                  $hari=date('Y-m-d');
                                  $har = strtotime($hari);

                                  $batas = date($z['bts_kembali']);
                                  $bat = strtotime($batas);

                                  if (empty($z['tgl_kembali']) && $hari > $batas) {
                                          /*$selisih = abs(strtotime($hari) - strtotime($batas));
                                          $years = floor($selisih / (365*60*60*24));
                                          $months = floor(($selisih - $years * 365*60*60*24) / (30*60*60*24));
                                          $days = floor(($selisih - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                          $denda = $days * 5000;*/
                                          mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                          //$ket = "Telat";
                                  }
                                  else if ($z['tgl_kembali'] == '' && $hari == $batas) {
                                          //$ket="Batas pengembalian";
                                          mysql_query("UPDATE peminjaman SET ket = 'Batas pengembalian' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                  }
                                  elseif ($z['tgl_kembali'] != '' && $hari <= $batas) {
                                          //$ket = "Tepat waktu";
                                          mysql_query("UPDATE peminjaman SET ket = 'Tepat waktu' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                  }
                                        /*elseif ($data['tgl_kembali'] != '' && $hari > $batas) {
                                          //$ket = "Telat";
                                          mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                        }*/
                                  elseif ($z['tgl_kembali'] == '' && $hari < $batas) {
                                          //$ket = "-";
                                          mysql_query("UPDATE peminjaman SET ket = '-' WHERE id_peminjaman = '$z[id_peminjaman]'");
                                  }

                                }


                                if (isset($_GET['filter'])) {
                                  $filter = $_GET['filter'];
                                  $awal = $_GET['awal'];
                                  $akhir = $_GET['akhir'];

                                  echo "Data peminjaman dari tanggal ".$awal." sampai tanggal ".$akhir;
                                  echo"<br>";
                                  echo"<br>";
                                  echo"<a href='export_peminjaman.php?awal=$awal&akhir=$akhir&filter=$filter' class='btn btn-primary'>Export ke Excel</a>";
                                  echo"<br> <br>";

                                  $result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas join guru as g on p.id_guru=g.id_guru  WHERE tgl_pinjam between '$awal 00:00' and '$akhir 23:59' ORDER BY p.id_peminjaman ASC");
                                }
                                else {
                                    $result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas join guru as g on p.id_guru=g.id_guru ORDER BY p.id_peminjaman ASC LIMIT $from,10");
                                }


                                $no=1 + $page * 10 - 10;

                                while($data=mysql_fetch_array($result)){

                                  $tgl = explode (' ', $data['tgl_pinjam']);
                                  $date = $tgl[0];
                                  $jam = $tgl[1];
                                  $date = date_format(date_create($date), 'd-m-Y');

                                  echo "
                                    <tr>
                                    <td>$no</td>
                                    <td>$data[nama_barang]</td>
                                    <td>$data[jumlah]</td>
                                    <td>$data[nama_siswa]</td>
                                    <td>$data[guru]</td>
                                    <td>$data[status]</td>
                                    <td>$data[br_rusak]</td>
                                    <td>$date $jam</td>
                                    <td>$data[bts_kembali]</td>
                                    <td>$data[tgl_kembali]</td>
                                    <td>$data[ket]</td>
                                    <td>$data[nama_petugas]</td>";
                                    if ($data['tgl_kembali'] != '') {
                                    echo "<td><button class='btn btn-success btn-xs'><i class='fa fa-check'></button></td>
                                    <td><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></button></td>";
                                    }
                                    else {
                                    echo " <td><a href=pengembalian.php?id_peminjaman=$data[id_peminjaman] class='btn btn-success btn-xs'><i class='fa fa-check'></i></a>
                                      <a href=edit_peminjaman.php?id_peminjaman=$data[id_peminjaman] class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></a></td>";
                                    }

                                  echo "</tr>";
                                  $no++;
                                }
                                ?>
                               
                              </tr>
                              
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
						  <h4><i class="fa fa-angle-right"></i> No More Table</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>Code</th>
                                      <th>Company</th>
                                      <th class="numeric">Price</th>
                                      <th class="numeric">Change</th>
                                      <th class="numeric">Change %</th>
                                      <th class="numeric">Open</th>
                                      <th class="numeric">High</th>
                                      <th class="numeric">Low</th>
                                      <th class="numeric">Volume</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td data-title="Code">AAC</td>
                                      <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                      <td class="numeric" data-title="Price">$1.38</td>
                                      <td class="numeric" data-title="Change">-0.01</td>
                                      <td class="numeric" data-title="Change %">-0.36%</td>
                                      <td class="numeric" data-title="Open">$1.39</td>
                                      <td class="numeric" data-title="High">$1.39</td>
                                      <td class="numeric" data-title="Low">$1.38</td>
                                      <td class="numeric" data-title="Volume">9,395</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AAD</td>
                                      <td data-title="Company">ARDENT LEISURE GROUP</td>
                                      <td class="numeric" data-title="Price">$1.15</td>
                                      <td class="numeric" data-title="Change">  +0.02</td>
                                      <td class="numeric" data-title="Change %">1.32%</td>
                                      <td class="numeric" data-title="Open">$1.14</td>
                                      <td class="numeric" data-title="High">$1.15</td>
                                      <td class="numeric" data-title="Low">$1.13</td>
                                      <td class="numeric" data-title="Volume">56,431</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AAX</td>
                                      <td data-title="Company">AUSENCO LIMITED</td>
                                      <td class="numeric" data-title="Price">$4.00</td>
                                      <td class="numeric" data-title="Change">-0.04</td>
                                      <td class="numeric" data-title="Change %">-0.99%</td>
                                      <td class="numeric" data-title="Open">$4.01</td>
                                      <td class="numeric" data-title="High">$4.05</td>
                                      <td class="numeric" data-title="Low">$4.00</td>
                                      <td class="numeric" data-title="Volume">90,641</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ABC</td>
                                      <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
                                      <td class="numeric" data-title="Price">$3.00</td>
                                      <td class="numeric" data-title="Change">  +0.06</td>
                                      <td class="numeric" data-title="Change %">2.04%</td>
                                      <td class="numeric" data-title="Open">$2.98</td>
                                      <td class="numeric" data-title="High">$3.00</td>
                                      <td class="numeric" data-title="Low">$2.96</td>
                                      <td class="numeric" data-title="Volume">862,518</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ABP</td>
                                      <td data-title="Company">ABACUS PROPERTY GROUP</td>
                                      <td class="numeric" data-title="Price">$1.91</td>
                                      <td class="numeric" data-title="Change">0.00</td>
                                      <td class="numeric" data-title="Change %">0.00%</td>
                                      <td class="numeric" data-title="Open">$1.92</td>
                                      <td class="numeric" data-title="High">$1.93</td>
                                      <td class="numeric" data-title="Low">$1.90</td>
                                      <td class="numeric" data-title="Volume">595,701</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ABY</td>
                                      <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
                                      <td class="numeric" data-title="Price">$0.77</td>
                                      <td class="numeric" data-title="Change">  +0.02</td>
                                      <td class="numeric" data-title="Change %">2.00%</td>
                                      <td class="numeric" data-title="Open">$0.76</td>
                                      <td class="numeric" data-title="High">$0.77</td>
                                      <td class="numeric" data-title="Low">$0.76</td>
                                      <td class="numeric" data-title="Volume">54,567</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ACR</td>
                                      <td data-title="Company">ACRUX LIMITED</td>
                                      <td class="numeric" data-title="Price">$3.71</td>
                                      <td class="numeric" data-title="Change">  +0.01</td>
                                      <td class="numeric" data-title="Change %">0.14%</td>
                                      <td class="numeric" data-title="Open">$3.70</td>
                                      <td class="numeric" data-title="High">$3.72</td>
                                      <td class="numeric" data-title="Low">$3.68</td>
                                      <td class="numeric" data-title="Volume">191,373</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">ADU</td>
                                      <td data-title="Company">ADAMUS RESOURCES LIMITED</td>
                                      <td class="numeric" data-title="Price">$0.72</td>
                                      <td class="numeric" data-title="Change">0.00</td>
                                      <td class="numeric" data-title="Change %">0.00%</td>
                                      <td class="numeric" data-title="Open">$0.73</td>
                                      <td class="numeric" data-title="High">$0.74</td>
                                      <td class="numeric" data-title="Low">$0.72</td>
                                      <td class="numeric" data-title="Volume">8,602,291</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AGG</td>
                                      <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
                                      <td class="numeric" data-title="Price">$7.81</td>
                                      <td class="numeric" data-title="Change">-0.22</td>
                                      <td class="numeric" data-title="Change %">-2.74%</td>
                                      <td class="numeric" data-title="Open">$7.82</td>
                                      <td class="numeric" data-title="High">$7.82</td>
                                      <td class="numeric" data-title="Low">$7.81</td>
                                      <td class="numeric" data-title="Volume">148</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AGK</td>
                                      <td data-title="Company">AGL ENERGY LIMITED</td>
                                      <td class="numeric" data-title="Price">$13.82</td>
                                      <td class="numeric" data-title="Change">  +0.02</td>
                                      <td class="numeric" data-title="Change %">0.14%</td>
                                      <td class="numeric" data-title="Open">$13.83</td>
                                      <td class="numeric" data-title="High">$13.83</td>
                                      <td class="numeric" data-title="Low">$13.67</td>
                                      <td class="numeric" data-title="Volume">846,403</td>
                                  </tr>
                                  <tr>
                                      <td data-title="Code">AGO</td>
                                      <td data-title="Company">ATLAS IRON LIMITED</td>
                                      <td class="numeric" data-title="Price">$3.17</td>
                                      <td class="numeric" data-title="Change">-0.02</td>
                                      <td class="numeric" data-title="Change %">-0.47%</td>
                                      <td class="numeric" data-title="Open">$3.11</td>
                                      <td class="numeric" data-title="High">$3.22</td>
                                      <td class="numeric" data-title="Low">$3.10</td>
                                      <td class="numeric" data-title="Volume">5,416,303</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="responsive_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
