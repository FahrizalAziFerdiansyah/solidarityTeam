<?php
include'../config.php';
include "header-admin.php";
if (isset($_POST['act'])){
  if (daftar($_POST)>0) {
    echo '
    <script>alert("Admin Baru Ditambahkan !!!");window.location="home.php"</script>
    ';
    # code...
  }else{
    echo mysqli_error($mysqli);
  }
}

if (isset($_POST['mntr'])){
    $sql_add="INSERT INTO montir(nama_montir,no_hp,email,foto) VALUES ("
    ."'".$_POST['nama_montir']."','".$_POST['no_hp']."','".$_POST['email']."','".$_POST['foto']."') ";
    @mysqli_query($conn,$sql_add);
    echo '
    <script>alert("Montir Baru Ditambahkan !!!");window.location="tampil_montir.php"</script>
    ';
}

if (isset($_POST["tambah"])) {
    if (trik($_POST>0)) {
   echo '
    <script>alert("Berhasil !!!");window.location="trik.php"</script>
    ';
    }
    else{
    echo "<script>
    alert('Tambah barang lagi!');
    </script>";
    }
    # code...
}

if (isset($_POST['part'])){
    $sql_add="INSERT INTO produk(nama,category,nama_produk,gambar,deskripsi,harga,stok) VALUES ("
    ."'".$_POST['nama']."','".$_POST['category']."','".$_POST['name']."','".$_POST['image']."','".$_POST['description']."','".$_POST['price']."','".$_POST['stok']."') ";
    @mysqli_query($conn,$sql_add);
    echo '
    <script>alert("Barang ditambahkan !!!");window.location="part.php"</script>
    ';
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
<div class="cleared"></div>
<div class="row">
<div class="col-md-6">
    <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Tambah Admin</strong>
                            </div>
                            <div class="card-body">
           <form method="post">
        <div  class="col-md-6">
              <label>Nama Admin:</label> <input name="username" class="form-control"><br>
              <label>Password :</label><input type="password" name="password" class="form-control"><br>
              <label>Samakan Password :</label><input type="password" name="password2" class="form-control"><br>
          </div>
              <div class="col-md-6">
              <label>No HP :</label> <input name="no_hp" type="number" class="form-control" ><br>
              <label>Email :</label><input type="email" id="file-input" name="email" class="form-control"><br>
              <input type="hidden" name="level" class="form-control" value="admin">
              <input type="submit" name="act" value="Tambah" style="margin-bottom: 50px" class="btn btn-info"><br>
          </div> 
            </form>     
        </div>
    </div>
</div>
  <div class="col-md-6">
            <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Tambah Montir</strong>
                            </div>
                <div class="card-body">
            <form method="post" style="margin-left: 35px" >
            <div class="col-lg-6">
              <label>Nama Montir:</label> <input name="nama_montir" class="form-control"><br>
              <label>No HP:</label> <input class="form-control" name="no_hp"></input><br></div>
              <div class="col-lg-6">
              <label>Email :</label> <input name="email" class="form-control" ><br>
              <label>Foto :</label><input type="file" id="file-input" name="foto" class="form-control-file"><br>
              <input type="submit" name="mntr" value="Tambah" style="margin-bottom: 50px" class="btn btn-info"><br></div>
          </form>     
                </div>
            </div>
        </div>
</div>
    <!--Modal Edit-->
    <div class="row">

                     <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Tambah Sparepart</strong>
                            </div>
                            <div class="card-body">

        <form method="post" style="margin-left: 35px" >
                <div class="col-md-6">
                <label> Jenis Motor :</label>
                <select name="nama" class="form-control">
                <?php
                $rcat=@mysqli_query($conn,"SELECT * FROM motor");
                while ($rowcat=@mysqli_fetch_array($rcat)){
                      echo ' <option value="'.$rowcat['nama'].'">'.$rowcat['nama'].'</option>';
                }
                echo'</td></tr>';
                ?>

                </select><br>
                <label> Kategori :</label>
                <select name="category"class="form-control">
                <?php
                $rcat=@mysqli_query($conn,"SELECT * FROM categories");
                while ($rowcat=@mysqli_fetch_array($rcat)){
                      echo ' <option value="'.$rowcat['nama'].'">'.$rowcat['nama'].'</option>';
                }
                echo'</td></tr>';
                ?>
                </select><br>

              <label>Nama Produk:</label> <input name="name" class="form-control"><br>
              <label>Deskripsi:</label> <textarea cols="80" class="form-control" name="description"></textarea><br></div>
              <div class="col-md-6">
              <label>Harga:</label> <input name="price" class="form-control" ><br>
              <label>Stok :</label> <input name="stok" class="form-control" ><br>
              <label>Gambar :</label><input type="file" id="file-input" name="image" class="form-control-file"><br>
              <input type="submit" name="part" value="Tambah" class="btn btn-info"><br></div>

            
    </form>     
                           
                        </div>
                    </div>
                </div>

                  <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Tambah Tips and Trik</strong>
                            </div>
                            <div class="card-body">
                     <form  action="" method="post">
                        <div class="form-group">
                        <label >Masukkan Judul:</label><br>
                        <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control">
                        </div>
                        <div class="form-group">
                        <label >Masukkan Deskripsi:</label><br>
                        <textarea name="deskripsi" rows="9" placeholder="Content..." class="form-control"></textarea>
                        </div>
                          <div class="form-group">
                        <label>Masukkan Gambar:</label>
                        <input type="file" name="gambar">
                        </div>

                        <div>
                        <input class="btn btn-info mb-4" type="submit" name="tambah" value="tambah">
                        </div>
                </form>   
                            </div>
                        </div>
                    </div>
            </div>
</div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>