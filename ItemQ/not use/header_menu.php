<?php
session_start();
error_reporting(0);
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	<a href="home.php" class="navbar-brand" ><span class="fa fa-heart" style="color:white;"></span>&nbsp;&nbsp;<font color="#E9E9E9"><b>ITEM-Q</font></a>
	<?php
	include"koneksi.php";
	if($_SESSION['level']=="admin"){
	?>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-left">
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Siswa<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tampil_siswa.php">Data Siswa</a></li>
          </ul>
        </li>
      </ul>
	<ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelas<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="tampil_kelas.php">Data Kelas</a></li>
		  </ul>
        </li>
      </ul>
	  	<ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jurusan<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="tampil_jurusan.php">Data Jurusan</a></li>
		  </ul>
        </li>
      </ul>
	  	  	<ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peminjaman<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="input_peminjaman.php">Input Peminjaman</a></li>
            <li><a href="tampil_peminjaman.php">Data Peminjaman</a></li>
		  </ul>
        </li>
      </ul>
	  	  	  	<ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Barang<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="input_barang.php">Input Barang</a></li>
            <li><a href="tampil_barang.php">Data Barang</a></li>
		  </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guru<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="input_guru.php">Input Guru</a></li>
            <li><a href="tampil_guru.php">Data Guru</a></li>
		  </ul>
        </li>
      </ul>
	   <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cari<span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="search_barang.php">Cari Data Peminjaman</a></li>
			<li><a href="searchbarang.php">Cari Data Barang</a></li>
		  </ul>
        </li>
      </ul>
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="input_petugas.php">Tambah Akun</a></li>
            <li><a href="tampil_petugas.php">Data Petugas</a></li>
			<li><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
	<?php
	}
	else if($_SESSION['level'] == "petugas"){
	?>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-left">
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Siswa<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="input_siswa.php">Input Siswa</a></li>
			<li><a href="tampil_siswa.php">Data Siswa</a></li>
          </ul>
        </li>
      </ul>
	<ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="input_kelas.php">Input Kelas</a></li>
			<li><a href="tampil_kelas.php">Data Kelas</a></li>
		  </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jurusan<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="input_jurusan.php">Input Jurusan</a></li>
			<li><a href="tampil_jurusan.php">Data Jurusan</a></li>
		  </ul>
        </li>
      </ul>
	  	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guru<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="input_guru.php">Input Guru</a></li>
			<li><a href="tampil_guru.php">Data Guru</a></li>
		  </ul>
        </li>
      </ul>
	  	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peminjaman<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="input_peminjaman.php">Input Peminjaman</a></li>
			<li><a href="tampil_peminjaman.php">Data Peminjaman</a></li>
		  </ul>
        </li>
      </ul>
			<ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Barang<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="input_barang.php">Input Barang</a></li>
            <li><a href="tampil_barang.php">Data Barang</a></li>
		  </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peminjaman<span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li><a href="tampil_peminjaman.php">Data Peminjaman</a></li>
		  </ul>
        </li>
      </ul>
	  <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cari<span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="search_barang.php">Cari Data Peminjaman</a></li>
			<li><a href="searchbarang.php">Cari Data Barang</a></li>
		  </ul>
        </li>
      </ul>
    <!-- Collect the nav links, forms, and other content for toggling -->

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?>  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
<?php
	}
	else if(empty($_SESSION['level']="")){
		?>
		<ul class="nav navbar-nav navbar-left">
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pemijaman<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user_peminjaman.php">Data Peminjaman</a></li>
		  </ul>
        </li>
      </ul>
		<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Index</a></li>
            <li><a data-toggle="modal" href="index.login.html#myModal">LogIn</a></li>
          </ul>
        </li>
      </ul>
	<?php
	}
	else{
		echo"<script>window.location.href='index.php'</script>";
	}
	?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

