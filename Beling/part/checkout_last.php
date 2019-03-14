
<?php
// *** LOAD PAGE HEADER
include "header.php";
include"sidebar.php";
?>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
        width: 400px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
       
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
    </style>
<div id="keranjang">
           <div class="panel panel-success">
            <div class="panel-heading">
              <center><h3 class="panel-title">Detail Barang Dibeli</h3></center>
            </div>
            <div class="panel-body">


<script type="text/javascript">
function HanyaAngka(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</script>
<?

?>

<?php

//function getLastTrans() { $querycount="SELECT MAX(kode_order) AS LastID FROM daftar_pesanan";
//$result=mysql_query($querycount) or die(mysql_error());
//$row=mysql_fetch_array($result, MYSQL_ASSOC); return $row['LastID']; }
//function FormatNoTrans($num) { $num=$num+1;
 //switch (strlen($num)) {
 //   case 1 : $NoTrans = "0000".$num; break;
  //  case 2 : $NoTrans = "000".$num; break;
   // case 3 : $NoTrans = "00".$num; break;
    //case 4 : $NoTrans = "0".$num; break;
      // default: $NoTrans = $num; }
       //        return $NoTrans; }

//$LastID=FormatNoTrans(getLastTrans());
$LastID=date("Ymd").date("his");

//unset ($err);
$status="Belum Lunas";
if ($_POST['act']=="order"){

    mysqli_query($conn,"UPDATE produk SET produk.stok=produk.stok-daftar_order.jumbel WHERE produk.id_produk='$_POST[id_produk]'");
     //$kode= '/^[a-z]/';
    if (empty($_POST['info_belanja'])) $err['info_belanja']="<span class=\"err\">Your Cart still empty.</span>\n";
    if (empty($_POST['namalengkap'])) $err['namalengkap']="<span class=\"err\">Silahkan Isi Nama Anda</span>\n";
    if (empty($_POST['email'])) $err['email']="<span class=\"err\">Silahkan lengkapi Email Anda.</span>\n";
    if (!preg_match("/^[a-z0-9\_\.\-]+\@[a-z0-9\_\.\-]+$/i",$_POST['email'])) $err['email']="<span class=\"err\">Email &quot;".$_POST['email']."&quot; Anda Tidak valid.</span>\n";
    if (empty($_POST['telphp'])) $err['telphp']="<span class=\"err\">Silahkan lengkapi No telepon Anda.</span>\n";
    if (empty($_POST['alamat'])) $err['alamat']="<span class=\"err\">Silahkan Lengkapi Alamat Anda.</span>\n";
  
    if(count($err)>0){ // *** if submit error
    } else { // *** if submit OK
        $mode="order_send_ok";
        // *** WRITE DATABASE
        $sql_insert="INSERT INTO daftar_order (kode_order,namalengkap,tanggal_order,jam_order,nama_produk,jumbel,total,status) "
        ."VALUES ('".$_POST['kode_order']."','".$_POST['namalengkap']."','".date("Y-m-d")."','".date("h:i:s")."','".$_POST['info_belanja']."','".$_POST['jumbel']."','".$_POST['total']."','".$_POST['status']."')";
        @mysqli_query($conn,$sql_insert);
        
        $sql_insert2="INSERT INTO pembeli(kode_order,nama_pembeli,email_pembeli,telepon_pembeli,alamat_pembeli) "
        ."VALUES ('".$_POST['kode_order']."','".$_POST['namalengkap']."','".$_POST['email']."','".$_POST['telphp']."', "
        ."'".$_POST['alamat']."')";
        @mysqli_query($conn,$sql_insert2);
   unset ($_SESSION['cart']);
                                     
    //$sql_edit="UPDATE produk SET
    //"."stok= '".$stok."' - '".$_POST['jumbel']."' "."WHERE id_produk='".$product_id."' ";
          $kode=$_POST['kode_order'];
          $query = "SELECT * FROM daftar_order WHERE kode_order='$kode'"; // Tampilkan tahun sesuai di tabel daftar_order
          $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
          while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
          $tgl=$data['tanggal_order'];
            
     
      
       echo '
       <div class="panel-body">
       Kode Order = '.$_POST['kode_order'].' <br>
       Nama Pembeli = '.$_POST['namalengkap'].'<br>
       Tanggal Order='.$tgl.'<br>
       Alamat = '.$_POST['alamat'].'<br>
       Barang='.$_POST['info_belanja'].'<br>
       Total Bayar = Rp.'.$_POST['total'].' (Belum Termasuk ongkos Kirim)<br></div>
       ';
       ?>
       <a class='btn btn-info' href='cetak.php?kode_order=<?=$_POST[kode_order];?>'>CETAK</a> 


    <?php
    }

  ?>
  </div>
</div>


 <?php  
}
 }

 
 

if ($mode!="order_send_ok"){ // *** DISPLAY FORM IF NO ORDERS TO BE SENT

$no=0;
$checkout_cnt="";

// JIKA KERANJANG TIDAK KOSONG
if($_SESSION['cart']) {
    // TAMPILKAN TABEL KERANJANG

    $checkout_cnt.= 
    "<table  id='example1' class='table table-bordered table-striped'";	// format tampilan menggunakan HTML table
     $checkout_cnt.= "<tr><td><b>NO</td>
                     <td><b>Kode Barang</td>
                     <td><b>Nama </td>
                     <td><b>Harga</b></td>
                     <td><b>Jumlah Beli</b></td>
                     <td><b>Subtotal</b></td>

                     </tr>";
        // LOOPING / PENGULANGAN : UNTUK MENDEFINISIKAN ISI KERANJANG
        // $product_id sebagai key DAN $quantity sebagai value
        foreach($_SESSION['cart'] as $product_id => $quantity) {
             $gambar ="<a href=\"items/".$product_id.".jpg\">
        <img src=\"items/".$product_id.".jpg\" width=80 height=80 align=center border=1px </a>";
               //$ukuran='<select name="ukuran">
              // <option>L</option>
               // <option>L</option>
                // <option>L</option>';
                //if (!empty($_POST['ukuran']))$_SESSION['sukuran']=$_POST['ukuran'];
                //if ($_SESSION['sukuran']==$_POST['ukuran']) echo "selected";
                
                
            // MENDAPATKAN name, description, price DARI database - INI TERGANTUNG penamaan implementation database anda .
            // GUNAKAN FUNCTION sprintf AGAR/SUPAYA $product_id MASUK KE DALAM query SEBAGAI SEBUAH number - UNTUK MENGHINDARI SQL injection (HACKING)
            $sql = sprintf("SELECT id_produk, nama_produk, deskripsi, harga FROM produk WHERE id_produk = %d;",
                            $product_id);

               $result = mysqli_query($conn,$sql);

            // HANYA MENAMPILKAN JIKA PRODUCT NYA ADA / TIDAK KOSONG
            if(mysqli_num_rows($result) > 0) {
                $no++;

                list($kode, $name, $description, $price,$stok) = mysqli_fetch_row($result);


                // MENGHITUNG SUBTOTAL ($line_cost) DARI HARGA ($price) * JUMLAH ($quantity)
                $line_cost = $price * $quantity;

                // MENGHITUNG TOTAL JUMLAH ($quantity)
                 $total_quantity += $quantity;





                // MENGHITUNG TOTAL DENGAN MENAMBAHKAN SUBTOTAL ($line_cost) MASING2 PRODUCT
                //$total = $total + $line_cost;
                $totalx += $line_cost;


                $checkout_cnt.="<tr>";
                    // MENAMPILKAN DATA KE DALAM table cells
                    $checkout_cnt.="<td>$no.</td><td>BR$kode</td><td>$name</td>";
                    $checkout_cnt.="<td>Rp.".$price."</td>";
                    //$checkout_cnt.="<td>".$ukuran."</td>";
                    $checkout_cnt.="<td>".$quantity."[Items]</td>";
                    $checkout_cnt.="<td>Rp.".$line_cost."</td>";

                    $info_belanja.="$kode | $name | $price | $quantity | $line_cost \n";


                $checkout_cnt.="</tr>";

            }

        }

        //show the total
        $checkout_cnt.="<tr>";
            $checkout_cnt.="<td colspan=\"5\"  class=\"num\">TOTAL BAYAR</td>";
            $checkout_cnt.="<td>Rp.".$totalx."</td>";
        $checkout_cnt.="</tr>";
                    $info_belanja.="TOTAL=  $total\n";



    $checkout_cnt.="</table><hr><br>";
 

    echo $checkout_cnt;

//COBA-------------------------------------------------------------------
$nama=$_SESSION['username'];
$query="SELECT * FROM users WHERE username='$nama'";
$tes=mysqli_query($conn,$query);
while ($rowcat=mysqli_fetch_array($tes)) {
  $coba=$rowcat['email'];
  $hp=$rowcat['no_hp'];
  $alamat=$rowcat['alamat'];
}
     echo '</div>';
   echo '</div>';
//TUTUP

echo'


               <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Data Pembeli</h3>
            </div>
            <div class="panel-body">
    <div class="row">
    <div class="col-md-6">
    <form method="post" style="border:10px">
    <input type="hidden" name="info_belanja" value="'.$name.'">
    <input type="hidden" name="jumbel" value="'.$quantity.'">
    <input type="hidden" name="total" value="'.$totalx.'">
    <label > No Sales Order* </label><input name="kode_order" size="40" class="form-control" value= '.$LastID.'  readonly><br>
    <label>Nama Lengkap* </label><input name="namalengkap" size="40"  class="form-control"  value="'.$_SESSION['username'].'">'.$err['namalengkap'].'<br>
    <label> Email*  </label><input name="email" class="form-control" size="40"   value="'.$coba.'">'.$err['email'].'<br><br>
    </div>
    <div class="col-md-6">
    <label> No. Handphone*</label><input name="telphp" size="40" maxlength="12" onKeyPress="return HanyaAngka(event)" class="form-control" value="'.$hp.'">'.$err['telphp'].'<br>
        <label>Alamat: </label>
        <textarea id="pac-input" auotofocus=""  name="alamat" class="form-control" type="text" placeholder="Masukan Alamat">'.$alamat.'</textarea>
        '.$err['alamat'].'
     <input type="hidden"  name="status" value="'.($status).'"><br>
        <div>';

echo'<div class="cleared"></div>
        <center>
    <input type="hidden" name="act" value="order">
    <input  type="submit" value="Kirim" class="btn btn-info"><br><br>
    </center>
    </div>
    </div>

    </div>
    ';


}

else{
    //tampilan jika keranjang kosong
echo'
  <marquee>Keranjang Anda Masih Kosong,Silahkan berbelanja terlebih dahulu</marquee>
  <hr>
  ';

//include"else_checkout.php";
}


}// *** END if ($mode!="order_send_ok") // *** DISPLAY FORM IF NO ORDERS TO BE SENT
?>
</div>

<?php

echo '&nbsp;<div class="cleared"></div>';

// *** LOAD PAGE FOOTER
include "footer.php";

?>

<body>
  

  </body>