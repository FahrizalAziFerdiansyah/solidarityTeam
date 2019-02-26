<?php
include_once("config.php");
require"header-admin.php";

session_start();
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['kirim']))
{   
    $id_konsul = $_POST['id_konsul'];
    $username = $_POST['username'];
    $kategori=$_POST['kategori'];
    $jawaban=$_POST['jawaban'];
    $admin=$_POST['admin'];

        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE konsultasi SET  jawaban='$jawaban', admin='$admin' WHERE id_konsul='$id_konsul'");
    
    // Redirect to homepage to display updated user in list
    echo "<script>
            alert('Jawaban Terkirim!');
    </script>";
    echo '<script>window.location="konsul.php";</script>';
    die();
    // echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}

// Display selected user data based on id
// Getting id from url
$id_konsul = $_GET['id_konsul'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM konsultasi WHERE id_konsul='$id_konsul'");
 
while($row = mysqli_fetch_array($result))
{   
    $id_konsul = $row['id_konsul'];
    $username = $row['username'];
    $kategori=$row['kategori'];
    $deskripsi = $row['deskripsi'];
    
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

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
    <div class="col-md-6 col-lg-6">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="text-align: center;" >JAWAB KONSULTASI  </h3><hr><br>


          <div class="box-body">
            <form method="post">
                <div class="form-group">
                    <label>Nama Pelanggan :</label>
                    <input type="text" readonly="" class="form-control" name="username" value=<?php echo $username;?>>
                    <input type="hidden" class="form-control" name="username" value=<?php echo $username;?>>
                </div>
                <div class="form-group">
                    <label>Kategori:</label>
                    <input type="text" readonly="" class="form-control" name="kategori" value=<?php echo $kategori;?>>
                    <input type="hidden"  class="form-control" name="kategori" value=<?php echo $kategori;?>>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="textarea" readonly="" class="form-control" name="deskripsi" value=<?php echo $deskripsi;?>>
                    <input type="hidden"  class="form-control" name="deskripsi" value=<?php echo $deskripsi;?>>
                </div>
                <div class="form-group">
                    <label>Jawab: </label>
                    <textarea type="text" class="form-control" name="jawaban" ></textarea>
                </div>  
                <div class="form-group">
                    <label>Dijawab Oleh: </label>
                    <input type="text" readonly="" class="form-control" name="admin" value=<?php echo $_SESSION['username'];?>>
                    <input type="hidden" class="form-control" name="admin" value=<?php echo $_SESSION['username'];?>>
                </div>  
                <div class="box-footer">
                    <input type="hidden" name="id_konsul" value=<?php echo $_GET['id_konsul'];?>>
                    <center><button type="submit" class="btn btn-info" name="kirim" value="update">Kirim Jawaban</button></center><br>
                </div>
            </form>     
          </div>
        </div>      
      </div>
    </div>


</div>

</html>