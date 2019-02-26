<?php
// include database connection file
include_once("config.php");
require'header-admin.php';

if(isset($_POST['update']))
{	
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$nama_montir=$_POST['nama_montir'];

		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pelanggan SET kondisi ='Sedang Diperbaiki', nama_montir='$nama_montir' WHERE id_pelanggan='$id_pelanggan'");
	
	// Redirect to homepage to display updated user in list
      echo "<script>
    		alert('Berhasil!');
    </script>";
    echo '<script>window.location="home.php";</script>';
        return mysqli_affected_rows($mysqli);
        	
	
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}

$id_pelanggan = $_GET['id_pelanggan'];
$result = mysqli_query($mysqli, "SELECT  * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
while($row = mysqli_fetch_array($result))
{	
	$id_pelanggan = $row['id_pelanggan'];
	$nama = $row['nama'];
	$nama_montir=$row['nama_montir'];
}
?>
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
        	<?php  $result ="SELECT * FROM montir  ";
            $ada =  mysqli_query($mysqli, $result);
            while ($row=mysqli_fetch_array($ada)) {
            echo '
    

             <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">'.$row['nama_montir'].'</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i>'.$row['no_hp'].', '.$row['email'].'</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>';}
                    ?>


                </div>

                 <div class="content">
                 	<div class="col-md-4">
                    <form method="post">
			        <div class="form-group">
			            <label>Nama Pelanggan</label>
			            <input type="text" class="form-control" name="nama" value=<?php echo $nama;?>>
			        </div>
			        <div class="form-group">
		            <label>Id Nama</label>
		           <select class="form-control" name="nama_montir">
	                    <?php
                                   
                        $query="SELECT * FROM montir ";
                        $rcat=mysqli_query($mysqli,$query);
                       while ($rowcat=mysqli_fetch_array($rcat)){
    	                echo ' <option value="'.$rowcat['nama_montir'].'">'.$rowcat['nama_montir'].'</option>';
                          }
                        ?>
		           </select>
			        </div>
			        <input type="hidden" name="id_pelanggan" value=<?php echo $_GET['id_pelanggan'];?>>
			        <center>
	                <button type="submit" class="btn btn-info " name="update" value="update">Bayar</button></center>
                    </form>
                    </div>
                    </div>