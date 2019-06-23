
<?php
session_start();
$name=$_SESSION['username'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- my CSS -->
	<style>
		section {
		min-height: 520px;
		}
	</style>
	
    <title>PETA JAWA TIMUR</title>
  </head>
  <body class="mt-5">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
		  <a class="navbar-brand" href="index.php">PETA JAWA TIMUR</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="data.php">Data</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link " href="https://www.google.com/fusiontables/DataSource?docid=10LN0DQGdSyHewWZ833FNtWNM5dAdf9e6vzYEXumD"> Map</a>
			  </li>
			  <li class="nav-item">
			  	<a class="nav-link " style="text-align: right;" href="login/logout.php" tabindex="-1" aria-disabled="true"> Logout <?php echo $name;?> ?</a>
			  </li>
			</ul>
		  </div>
		  </div>
		</nav>
		
		<!--tampilan profil -->
		<section id="portfolio" class="portfolio bg-light pb-4">
		<div class="jumbotron jumbotron-fluid">
		  <div class="container text-center">
			<img src="img/peta.jpg" width="30%" class="rounded-circle img-thumbnail">
			<h2 class="display-4">DAERAH RAWAN KECELAKAAN PROVINSI JAWA TIMUR</h2>
			<p class="lead">Selamat datang di website daerah rawan kecelakaan Provinsi Jawa Timur.</p>
		  </div>
		</div>
		</section>
	
	<footer class="bg-dark text-white">
		<div class="container">
			<div class="row text-center pt-3">
			<div class="col">	
				<p>KESEHATAN-POLIJE.</p>
			</div>
			</div>
		</div>
	</footer>
		
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>