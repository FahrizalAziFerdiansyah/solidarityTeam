
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index ItemQ</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login</title>

  </head>
 
<body id="page-top" class="index">
<?php include"assets-admin/login.php";?>
<?php
include"hm2.php";
?>
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/css yok.png" style="width:300px; height:300px;">

                    <div class="intro-text">
                        <span class="name">Sarana prasarana</span>
                        <hr class="star-light">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Secti
	on -->
    <section id="databarang" style="background:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Data Barang</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" style="height:400px;">
			<div class="panel-body" style="background:#2C3E50;"></div>
			<div class="table-responsive">
			<table class="table table-responsive table-striped table-hover table-bordered" id="mytable2">

				<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Total Jumlah</th>
				<th>Stok</th>
				<th>Total Dipinjam</th>
				<th>Total Rusak</th>
				</tr>
				<?php
				include"koneksi.php";
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                $from = $page * 5 - 5;
				$q=mysqli_query($db,"SELECT * from barang order by id_barang desc LIMIT $from,5");
				
                $no=1 + $page * 5 - 5;
				while($data=mysqli_fetch_array($q)){
					
					echo"<tr>
					<td>$no</td>
					<td>$data[kode_barang]</td>
					<td>$data[nama_barang]</td>
					<td>$data[jml_total]</td>
					<td>$data[stok]</td>
					<td>$data[jml_dipinjam]</td>
					<td>$data[jml_rusak]</td>
					</tr>";
                    $no++;
				}
				?>

				</table>
				</div>
				<div class="pagination">
				<?php
				$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
				$from = $page * 5 - 5;
				$query = mysqli_query($db,"SELECT COUNT(*) as ttl FROM barang");
				$data = mysqli_fetch_array($query);
				$ttlPage = ceil($data['ttl'] / 5);
					for ($i = 1; $i <= $ttlPage ; $i++) {
				echo "<ul class='pagination'><li><a href='index.php?page=$i#barang'>$i</a></li></ul></div>";
					}
				?>
				</div>
            </div>
			</div>
    </section>
<hr>
    <!-- About Section -->
    <section id="datapeminjaman" style="background:#EAEAEA;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Data Peminjaman</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" style="height:400px;">
			<div class="panel-body" style="background:#2C3E50;"></div>
			   <div class="table-responsive">
			   <table class="table table-responsive table-striped table-hover table-bordered" id="mytable1">



	<tr>
	<th>No</th>
	<th>Nama Barang</th>
	<th>Jumlah</th>
	<th>Nama Siswa</th>
	<th>Guru Pengajar</th>
	<th>Status</th>
	<th>Tanggal Peminjaman</th>
	<th>Batas Pengembalian</th>
	<th>Tanggal Pengembalian</th>
	<th>Keterangan</th>
	
	</tr>



<?php

		include "koneksi.php";
		$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
		$from = $page * 5 - 5;
		
		$result = mysqli_query($db,"SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas join guru as g on p.id_guru=g.id_guru ORDER BY p.id_peminjaman DESC LIMIT $from,5");

		$no=1 + $page * 5 - 5;

		while($data=mysqli_fetch_array($result)){

			$tgl = explode (' ', $data['tgl_pinjam']);
			$date = $tgl[0];
			$jam = $tgl[1];
			$date = date_format(date_create($date), 'd-m-Y');

			$tgl_kembali = explode(' ', $data['tgl_kembali']);
			$tgl_kem = $tgl_kembali[0];
			$tgl_kem = strtotime($tgl_kem);

			date_default_timezone_set('Asia/Jakarta');
			$hari=date('Y-m-d');
			$har = strtotime($hari);

			$batas = date($data['bts_kembali']);
			$bat = strtotime($batas);

			if (empty($data['tgl_kembali']) && $hari > $batas) {
				/*$selisih = abs(strtotime($hari) - strtotime($batas));
				$years = floor($selisih / (365*60*60*24));
				$months = floor(($selisih - $years * 365*60*60*24) / (30*60*60*24));
				$days = floor(($selisih - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

				$denda = $days * 5000;*/
				mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
				//$ket = "Telat";
			}
			else if ($data['tgl_kembali'] == '' && $hari == $batas) {
				//$ket="Batas pengembalian";
				mysql_query("UPDATE peminjaman SET ket = 'Batas pengembalian' WHERE id_peminjaman = '$data[id_peminjaman]'");
			}
			elseif ($data['tgl_kembali'] != '' && $hari <= $batas) {
				//$ket = "Tepat waktu";
				mysql_query("UPDATE peminjaman SET ket = 'Tepat waktu' WHERE id_peminjaman = '$data[id_peminjaman]'");
			}
			elseif ($data['tgl_kembali'] != '' && $hari > $batas) {
				//$ket = "Telat";
				mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
			}
			elseif ($data['tgl_kembali'] == '' && $hari < $batas) {
				//$ket = "-";
				mysql_query("UPDATE peminjaman SET ket = '-' WHERE id_peminjaman = '$data[id_peminjaman]'");
			}
			echo "
				<tr>
				<td>$no</td>
				<td>$data[nama_barang]</td>
				<td>$data[jumlah]</td>
				<td>$data[nama_siswa]</td>
				<td>$data[guru]</td>
				<td>$data[status]</td>
				<td>$date $jam</td>
				<td>$data[bts_kembali]</td>
				<td>$data[tgl_kembali]</td>
				<td>$data[ket]</td>";


			echo "</tr>";
			$no++;
		}
?>
</table>

        </div> 		
		<div class="pagination">
<?php
		$query = mysql_query("SELECT COUNT(*) as ttl FROM peminjaman");
		$data = mysql_fetch_array($query);
		$ttlPage = ceil($data['ttl'] / 5);
		for($i = 1; $i <= $ttlPage; $i++) {
			echo "<ul class='pagination'><li><a href='index.php?page_p=$i'>$i</a></li>&nbsp;</ul>";
		}
	?>
	</div>
    </section>

    <!-- Contact Section -->

    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
	
</body>
</html>
<style>
table, tbody, tr, th{
	font-face:Aparajita;
}
</style>