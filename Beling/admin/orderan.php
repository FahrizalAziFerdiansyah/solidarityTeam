<?php
include "header-admin.php";
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
<?php
// *** LOAD ADMIN PAGE HEADER


// ***  (start) TAMPILAN FORM CARI / SEARCH
            //echo '<div class="formcari">';

           // echo'<form method="post" action="cari_order.php">';

            //echo'<input type="hidden" name="act" value="search">';
           // echo '<input class="texbox" name="cari" placeholder="Search Here" size="50">';
            // echo'<input class="btn" type="submit" value="CARI" title="cari">';
           // echo'</form>';
           // echo'</div>';

// *** set last current page by session


if (!empty($_GET['page'])) $_SESSION['page']=$_GET['page'];
if (!empty($_SESSION['page'])) $_GET['page']=$_SESSION['page'];


if ( ($_GET['act']=="delete") && !empty($_GET[id]) ){
    @mysqli_query($conn,"DELETE FROM daftar_order WHERE kode_order='".$_GET[id]."'");
    //echo"Data Berhasil Dihapus";
}

if (($_GET['act']=="update") && !empty($_GET[id])) {
    $status="Lunas";
    # code...
@mysqli_query($conn,"UPDATE produk INNER JOIN daftar_order ON produk.nama_produk=daftar_order.nama_produk SET produk.stok=produk.stok-daftar_order.jumbel, daftar_order.status='".$status."' WHERE daftar_order.kode_order='".$_GET['id']."'");
}

$status=$_POST['status'];
echo"<center>
<div class='row'>";
echo "<div class='col-sm-6 col-offset-sm-2'  style=' padding:10px; margin-left:300px; background: white '>";
echo '<h2 style="color: white;background: black;margin-bottom:15px" align="center">DAFTAR ORDERAN</h2>'.$msg;


$total=mysqli_num_rows(mysqli_query($conn,"SELECT kode_order FROM daftar_order;"));

$rowperpage=1;
// QUERY TABLE php_shop_products
if (!empty($_GET['page'])) $recno=($_GET['page']-1)*$rowperpage; else $recno=0;
$sql = "SELECT * FROM daftar_order ORDER BY kode_order DESC LIMIT $recno,$rowperpage;";
$result = mysqli_query($conn,$sql);
$ada = mysqli_num_rows($result);
$no=0;
if ( ($total>0) && ($ada == 0) ) echo '<script>window.location="'.$_SERVER['PHP_SELF'].'?page=1";</script>';

if ($ada>0){
    if ($total>$rowperpage){ // *** IF TOTAL RECORD GREATER THAN RECORD PER PAGE => SHOW PAGING

    if (empty($_GET['page'])) $_GET['page']=1;

if ($_GET['page']>1) echo '<a type="button" class="btn btn-secondary" href="'.$_SERVER['PHP_SELF'].'?page='.($_GET['page']-1).'">&laquo; </a> | ';
    for ($i=1; $i<= ceil($total/$rowperpage); $i++){
        echo '<a type="button" class="btn btn-secondary" href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> | ';
    }
    if ($_GET['page']<ceil($total/$rowperpage)) echo '<a type="button" class="btn btn-secondary" href="'.$_SERVER['PHP_SELF'].'?page='.($_GET['page']+1).'">&raquo; </a> ';

    } // *** END if ($total>$rowperpage)



$status="LUNAS";
while ($row = mysqli_fetch_array($result)){

$cek = mysqli_query($conn,"SELECT * FROM konfirmasi WHERE kode_order ='".$row['kode_order']."'");


$num_row = mysqli_num_rows($cek);
if ($num_row ==0){
    $konfirmasi="Belum";
}
else{
    $konfirmasi="<s>Sudah</s>";
}
$sql="SELECT * FROM pembeli WHERE kode_order= '".$row['kode_order']."' ";
$hasil = mysqli_query($conn,$sql);

if ($data = mysqli_fetch_array($hasil))
       {
           $nama=$data['nama_pembeli'];
           $email=$data['email_pembeli'];
           $telepon=$data['telepon_pembeli'];
           $alamat=$data['alamat_pembeli'];
        
     }
$a="SELECT * FROM konfirmasi WHERE kode_order= '".$row['kode_order']."' ";
$b = mysqli_query($conn,$a);

if ($c = mysqli_fetch_array($b))
       {
          $d=$c['gambar'];
        
     }


         echo"<table border-right='5px'>";
            



         echo"<a onclick=\"return confirm('Apakah pembayaran sudah lunas?');\" class='btn btn-info' href=\"".$_SERVER['PHP_SELF']."?id=".$row['kode_order']."&amp;act=update\">Lunas</a> ";
         echo " &nbsp;";
            echo "<a onclick=\"return confirm('Are you sure to Delete?');\" class='btn btn-info' href=\"".$_SERVER['PHP_SELF']."?id=".$row['kode_order']."&amp;act=delete\"> Hapus</a>";




                 $no++;
                echo "<tr><td>&raquo; Status   : ".$row['status']."</del></td></tr>";
                 echo "<tr><td>&raquo; Status Konfirmasi : ".$konfirmasi."</td></tr>";
                echo "<tr><td>&raquo; Kode Order  : ".$row['kode_order']."</td></tr>";
                echo "<tr><td>&raquo; Tanggal Order  : ".$row['tanggal_order']."</td></tr>";
                echo "<tr><td>&raquo; Jam Order  : ".$row['jam_order']."</td></tr>";
                echo "<tr><td>&raquo; Info belanja : ".$row['total']."</td></tr>";
                echo '<td> Bukti TF : <img src="img/'.$d.'" width="400px" height="150px" margin-top="100px"></td>';

         
          
           
            //if ( ($_GET['act']=="view") && ($_GET['id']==$row['id_order']) ){
            //$sql="SELECT * FROM pembeli WHERE kode_order= '".$row['kode_order']."' ";
           // $result = mysql_query($sql);

//if ($row = mysql_fetch_array($result))
       // {


             echo'<tr><td><h4>ALAMAT PEMBELI</h4></td></tr>';
    echo "<tr><td>&raquo; Nama  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;     : ".$nama."</td></tr>";
                echo "<tr><td>&raquo; Email &nbsp;&nbsp; &nbsp; &nbsp;   &nbsp;&nbsp;   : ".$email."</td></tr>";
                echo "<tr><td>&raquo; Telepon &nbsp;&nbsp; &nbsp;&nbsp;  : ".$telepon."</td></tr>";
                echo "<tr><td>&raquo; Alamat &nbsp;&nbsp; &nbsp; &nbsp;     : ".$alamat."</td></tr>";
                
      echo "</tr>";

        //}

}
  echo"</table>";
  echo"</div></div>";
  //echo'</form>';

}


else{
 echo "<h3 style='margin:150px'>Orderan Kosong!</h3>";
}


echo"</center><br>";
?>

<div class="row">
        <div class="col-md-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Cek Ongkos Kirim</h3><hr>
            </div>
            <div class="panel-body">
                <div>
                  <?php
                  //Get Data Kabupaten
                  $curl = curl_init();
                  curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                      "key: e63e39232ce5884798e9e5f87929908c"
                    ),
                  ));

                  $response = curl_exec($curl);
                  $err = curl_error($curl);

                  curl_close($curl);
                  echo "
                  <div class= \"form-group\">
                  <label for=\"asal\">Kota Asal</label>
                  <select class=\"form-control\" name='asal' id='asal'>";
                  $data = json_decode($response, true);
                  if ($i=85) {
                    echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
                  }
                  echo "</select>
                  </div>";
                  //Get Data Kabupaten
                  //-----------------------------------------------------------------------------

                  //Get Data Provinsi
                  $curl = curl_init();

                  curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                    "key:e63e39232ce5884798e9e5f87929908c"
                    ),
                    ));

                    $response = curl_exec($curl);
                    $err = curl_error($curl);

                    echo "
                    <div class= \"form-group\">
                      <label for=\"provinsi\">Provinsi Tujuan </label>
                      <select class=\"form-control\" name='provinsi' id='provinsi'>";
                        echo "<option>Pilih Provinsi Tujuan</option>";
                        $data = json_decode($response, true);
                        for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
                          echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
                        }
                        echo "</select>
                      </div>";
                      //Get Data Provinsi
                      ?>

                      <div class="form-group">
                        <label for="kabupaten">Kota/Kabupaten Tujuan</label><br>
                        <select class="form-control" id="kabupaten" name="kabupaten"></select>
                      </div>
                      <div class="form-group">
                        <label for="kurir">Kurir</label><br>
                        <select class="form-control" id="kurir" name="kurir">
                          <option value="jne">JNE</option>
                          <option value="tiki">TIKI</option>
                          <option value="pos">POS INDONESIA</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="berat">Berat (gram)</label><br>
                        <input class="form-control" id="berat" type="text" name="berat" value="500" />
                      </div>
                      <button class="btn btn-success" id="cek" type="submit" name="button">Cek Ongkir</button>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Hasil</h3><hr>
                </div>
                <div class="panel-body">
                  <ol>
                    <div id="ongkir"></div>
                </ol>
                </div>
              </div>
            </div>
      </div>
</div>

</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
    $('#provinsi').change(function(){

      //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
      var prov = $('#provinsi').val();

          $.ajax({
              type : 'GET',
              url : 'http://localhost/Beling/admin/ongkir/cek_kabupaten.php',
              data :  'prov_id=' + prov,
          success: function (data) {

          //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
          $("#kabupaten").html(data);
        }
            });
    });

    $("#cek").click(function(){
      //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax
      var asal = $('#asal').val();
      var kab = $('#kabupaten').val();
      var kurir = $('#kurir').val();
      var berat = $('#berat').val();

          $.ajax({
              type : 'POST',
              url : 'http://localhost/Beling/admin/ongkir/cek_ongkir.php',
              data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
          success: function (data) {

          //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
          $("#ongkir").html(data);
        }
            });
    });
  });
</script>


