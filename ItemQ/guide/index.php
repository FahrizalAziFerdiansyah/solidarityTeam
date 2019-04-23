<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>ITEMQ</title>
		<meta name="description" content="Wobbly slideshow effect using Snap.svg" />
		<meta name="keywords" content="slideshow, wobbly, jelly, effect, svg, snap.svg, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
		<script src="js/snap.svg-min.js"></script>
		<script src="js/modernizr.custom.js"></script>

		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>
	<body>
		<div class="container">
			<div id="slideshow" class="slideshow">
				<ul>
					<li>
						<div class="slide">
							<div class="codrops-links">
								<img src="img/halamanawal.png" width="1000" class="img-responsive">
								<p><font size="4">Selamat Datang di ItemQ , ini adalah halaman awal admin<br>Mari kita pelajari fitur-fitur yang ada di itemq </font></p>
						</div>
					</li>
					<li>
						<div class="slide">
								<p><font size="4">Pertama inputan yg ada pada ItemQ,</font></p>
								<p><font size="4">Terdapat 7 inputan pada ItemQ yaitu</font></p><br><br><br>
								<p><font size="4">1.Menambahkan Jurusan</font></p>
								<img src="img/tambahjurusan.png" width="750" class="img-responsive">
								<p><font size="4">2.Menambahkan Kelas</font></p>
								<img src="img/tambahkelas.png" width="750" class="img-responsive">
						</div>
						</li>
						<li>
						<div class="slide">
								<p><font size="4">3.Menambahkan Siswa</font></p>
								<img src="img/tambahsiswa.png" width="750" class="img-responsive">
								<p><font size="4">4.Menambahkan Guru</font></p>
								<img src="img/tambahguru.png" width="750" class="img-responsive">
								<p><font size="4">5.Menambahkan Akun</font></p>
								<img src="img/tambhaakun.png" width="750" class="img-responsive">
						</div>
					</li>
					<li>
						<div class="slide">
								<p><font size="4">6.Menambahkan Barang</font></p>
								<img src="img/tambahbarang.png" width="750" class="img-responsive">
								<p><font size="4">7.Menambahkan Peminjaman barang</font></p>
								<img src="img/tambhapeminjam.png" width="750" class="img-responsive center-block">
						</div>
					</li>
					<li>
						<div class="slide">
								<p><font size="4">Dan yang kedua adalah menu-menu pada ItemQ</font></p>
								<img src="img/menu.PNG" height="80%" class="img-responsive center-block">
						</div>
					</li>
					<li>
						<div class="slide">
								<p><font size="4">Dan yg ketiga adalah tombol-tombol pada ItemQ</font></p>
							<img src="img/editdanhapus.PNG" width="130" height="80" class="img-responsive center-block">
								<p><font size="4">Icon di atas memiliki fungsi untuk mengedit dan menghapus data</font></p>
							<img src="img/exspor.PNG" width="100" height="100" class="img-responsive center-block">
								<p><font size="4">Icon ini memiliki fungsi untuk mencetak data kedalam bentuk Excel</font></p>
							<img src="img/kirim.PNG" width="100" height="100" class="img-responsive center-block">
								<p><font size="4">Dan icon ini berfungsi untuk mengirim data</font></p>
						</div>
					</li>
					<li>
						<div class="slide">
							<img src="img/edb.PNG" width="350" height="450" class="img-responsive center-block">
								<p><font size="4">Dan di atas dari sebelah kiri yaitu (edit,detail,barcode)</font></p>
						</div>
					</li>
					<li>
						<div class="slide">
								<p><font size="4">Dan Selanjutnya adalah tombol pengembalian dan edit </font></p>
							<img src="img/pengem.PNG" width="150" height="80" class="img-responsive center-block">
								<p><font size="4">Kemudian tombol filter berdasarkan tanggal</font></p>
								<img src="img/filter.PNG" width="500" height="80" class="img-responsive center-block">
								<p><font size="4">Dan juga tombol filter berdasarkan status barang</font></p>
								<img src="img/filterbarang.PNG" width="550" height="80" class="img-responsive center-block">
						
						</div>
					</li>
					<li>
						<div class="slide">
							<img src="img/caribarang.PNG" width="500" height="80" class="img-responsive center-block">
								<p><font size="4">Kemudian tombol cari barang</font></p>
							<img src="img/caripeminjaman.PNG" width="500" height="80" class="img-responsive center-block">
								<p><font size="4">Dan juga tombol cari peminjaman</font></p>
									<br><a onclick='return selesai()' href="../home_admin.php" class="btn btn-danger">Back</a>
	
						</div>
					</li>
					
				</ul>
			</div>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/sliderFx.js"></script>
		<script>
			(function() {
				new SliderFx( document.getElementById('slideshow'), {
					easing : 'cubic-bezier(.8,0,.2,1)'
				} );
			})();
		</script>
	</body>
</html>
<script type="text/javascript" language="JavaScript">
function selesai()
{
tanya = confirm("Keluar dari User Guide ?");
if (tanya == true) return true;
else return false;
}
</script>