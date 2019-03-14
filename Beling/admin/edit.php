<?php
include_once("config.php");
 require"header-admin.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_trik = $_POST['id_trik'];
	$judul=$_POST['judul'];
	$deskripsi=$_POST['deskripsi'];
	$gambar=$_POST['gambar'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE trik SET  judul='$judul', gambar='$gambar',deskripsi='$deskripsi' WHERE id_trik='$id_trik'");
	
	// Redirect to homepage to display updated user in list
	header("Location: trik.php");
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}

// Display selected user data based on id
// Getting id from url
$id_trik = $_GET['id_trik'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM trik WHERE id_trik='$id_trik'");
 
while($row = mysqli_fetch_array($result))
{	
	$id_trik = $row['id_trik'];
	$judul = $row['judul'];
	$gambar = $row['gambar'];
	$deskripsi = $row['deskripsi'];
}

//pembayaran
if(isset($_POST['bayar']))
{	
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$total_bayar=$_POST['total_bayar'];

		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pelanggan SET  total_bayar='$total_bayar', kondisi ='Perbaikan Selesai' WHERE id_pelanggan='$id_pelanggan'");
	
	// Redirect to homepage to display updated user in list
	      echo "<script>
            alert('Berhasil!');
    </script>";
    echo '<script>window.location="home.php";</script>';
        return mysqli_affected_rows($mysqli);
            
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}

// Display selected user data based on id
// Getting id from url
$id_pelanggan = $_GET['id_pelanggan'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
 
while($a = mysqli_fetch_array($result))
{	
	$id_pelanggan = $a['id_pelanggan'];
	$nama = $a['nama'];
	$total_bayar=$a['total_bayar'];
}


//part
if(isset($_POST['sikat']))
{	
	$id_produk = $_POST['id_produk'];
	$nama = $_POST['nama'];
	$category=$_POST['category'];
	$nama_produk=$_POST['nama_produk'];
	$gambar=$_POST['gambar'];
	$deskripsi=$_POST['deskripsi'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pelanggan SET  total_bayar='$total_bayar', kondisi ='Perbaikan Selesai' WHERE id_pelanggan='$id_pelanggan'");
	
	// Redirect to homepage to display updated user in list
	      echo "<script>
            alert('Berhasil!');
    </script>";
    echo '<script>window.location="home.php";</script>';
        return mysqli_affected_rows($mysqli);
            
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}

// Display selected user data based on id
// Getting id from url
$id_produk = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM produk WHERE id_produk='$id_produk'");
 
while($b = mysqli_fetch_array($result))
{	
	$id_produk = $b['id_produk'];
	$nama = $b['nama'];
	$category=$b['category'];
	$nama_produk=$b['nama_produk'];
	$gambar=$b['gambar'];
	$deskripsi=$b['deskripsi'];
	$harga=$b['harga'];
	$stok=$b['stok'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
<div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">

	 <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
     <div class="row">
  <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Eit Tips and trik</strong>
                            </div>
                            <div class="card-body">
                            	<form method="post">
				<a href="index.php">Go to Home</a>
				<div class="form-group">
		            <label>Id Trik</label>
		            <input type="text" class="form-control" name="id_trik" value='<?php echo $id_trik;?>'>
		        </div>
		        <div class="form-group">
		            <label>judul</label>
		            <input type="text" class="form-control" name="judul" value='<?php echo $judul;?>'>
		        </div>
		        <div class="form-group">
		            <label>gambar</label><br>
		            <input type="file" name="gambar" value='<?php echo $gambar;?>'>
		        </div>        
		        <div class="form-group">
		            <label>deskripsi</label>
		            <textarea type="text" class="form-control" name="id_trik" ><?php echo $deskripsi;?> </textarea>
		        </div> 	
	            <div class="box-footer">
	              	<input type="hidden" name="id_trik" value=<?php echo $_GET['id_trik'];?>>
	                <button type="submit" class="btn btn-info pull-right" name="update" value="update">Ubah</button>
	   
	            </div>
		    </form>    	
                            </div>
                        </div>
                    </div>


			
  <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Pembayaran</strong>
                            </div>
                            <div class="card-body">
			<form method="post">
				<div class="form-group">
		            <label>Id Nama</label>
		            <input type="text" class="form-control" name="id_pelanggan" value=<?php echo $id_pelanggan;?>>
		        </div>
		        <div class="form-group">
		            <label>Nama Pelanggan</label>
		            <input type="text" class="form-control" name="nama" value=<?php echo $nama;?>>
		        </div>
		        <div class="form-group">
		            <label>Total Bayar</label>
		            <input type="text" class="form-control" name="total_bayar" value=<?php echo $total_bayar;?>>
		        </div>	
	            <div class="box-footer">
	                <input type="hidden" name="id_pelanggan" value=<?php echo $_GET['id_pelanggan'];?>>
	                <button type="submit" class="btn btn-info pull-right" name="bayar" value="update">Bayar</button>
	   
	            </div>
		    </form>   	
                            </div>
                        </div>
                    </div>
</div>
<div class="row">

                     <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Pembayaran</strong>
                            </div>
                            <div class="card-body">
                            	<form method="post">
            <div class="col-md-6">
			
				<div class="form-group">
		            <label>Id Produk</label>
		            <input type="text" class="form-control" name="id_pelanggan" value=<?php echo $id_produk;?>>
		        </div>
		        <div class="form-group">
		            <label>Jenis Motor</label>
		            <input type="text" class="form-control" name="nama" value=<?php echo $nama;?>>
		        </div>
		        <div class="form-group">
		            <label>Kategori</label>
		            <input type="text" class="form-control" name="category" value=<?php echo $category;?>>
		        </div>
		        <div class="form-group">
		            <label>Nama Produk</label>
		            <input type="text" class="form-control" name="nama_produk" value=<?php echo $nama_produk;?>>
		        </div></div>
		        <div class="col-md-6">
		        <div class="form-group">
		            <label>Gambar</label> <br>
		            <input type="file" name="gambar" value=<?php echo $gambar;?>>
		        </div>
		        <div class="form-group">
		            <label>Deskripsi</label>
		            <textarea type="text" class="form-control" name="deskripsi" ><?php echo $deskripsi;?></textarea>
		        </div>
		        <div class="form-group">
		            <label>Harga</label>
		            <input type="text" class="form-control" name="harga" value=<?php echo $harga;?>>
		        </div>
		        <div class="form-group">
		            <label>Stok</label>
		            <input type="text" class="form-control" name="stok" value=<?php echo $stok;?>>
		        </div>
		        
	            <div class="box-footer">
	                <input type="hidden" name="id_pelanggan" value=<?php echo $_GET['id_pelanggan'];?>>
	                <button type="submit" class="btn btn-info pull-right" name="bayar" value="update">Ubah</button>
	   
	            </div>
	             </div>
		    </form>   	
                           
                        </div>
                    </div>
                </div>
            </div>

 
	</section>
</div>

</body>
</html>