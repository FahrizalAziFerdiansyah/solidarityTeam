<?php
// *** LOAD PAGE HEADER
include "header.php";
include"right.php";
include "left.php";
session_start();
?>
<script type="text/javascript">
function HanyaAngka(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</script>

<?php
if ($_POST['act']=="add"){


$cek = mysqli_query($conn,"SELECT * FROM daftar_order WHERE kode_order ='".$_POST['kode_order']."'");

$num_row = mysqli_num_rows($cek);
if (empty($_POST['kode_order'])) $err['kode_order']="<span class=\"err\">Kode Order Tidak Boleh Kosong</span>\n";
elseif ($num_row ==0){
     echo'<script>alert("Kode Order Yang Anda Masukkan Salah");window.location ="konfirmasi.php";</script>';
}

    if (empty($_POST['tanggal'])) $err['tanggal']="<span class=\"err\">Tanggal Tidak Boleh Kosong</span>\n";
    if (empty($_POST['nama_pemilik'])) $err['nama_pemilik']="<span class=\"err\">Nama Pemilik Rekening Tidak Boleh Kosong.</span>\n";
    if($_POST['nama_bank']=='pilih') $err['nama_bank']="<span class=\"err\">Nama Bank Harus Dipilih</span>\n";
    if (empty($_POST['jumlah_transfer'])) $err['jumlah_transfer']="<span class=\"err\">Jumlah Transfer Tidak Boleh Kosong.</span>\n";
    if (empty($_POST['alamat'])) $err['alamat']="<span class=\"err\">Silahkan Lengkapi Alamat pengiriman barang Anda.</span>\n";
     if (empty($_FILES['gambar']['name'])) $err['gambar']="<span class=\"err\">Gambar Tidak Boleh Kososng</span>\n";
    

    if(count($err)>0){ // *** if submit error
        echo "<div id='notif2'>Data Yang Anda Masukkan Masih Ada Yang Salah, Silahkan Perbaiki, Terima Kasih</div>";
    }

else{
    $sql_add="INSERT INTO konfirmasi (kode_order,tanggal,nama_pemilik,nama_bank,jumlah_transfer,alamat_kirim,gambar) VALUES ("
    ."'".$_POST['kode_order']."',
    '".$_POST['tanggal']."',
    '".$_POST['nama_pemilik']."',
    '".$_POST['nama_bank']."',
     '".$_POST['jumlah_transfer']."',
    '".$_POST['alamat']."',
    '".$_POST['gambar']."') ";
    @mysqli_query($conn,$sql_add);

if( !empty($_FILES['gambar']['name']) )
    {
    $path = "gambar/";
    $lastid=@mysqli_fetch_array(@mysqli_query($conn,"SELECT id_konfirmasi FROM konfirmasi ORDER BY id_konfirmasi DESC LIMIT 0,1"),0,0);
    $new_image_name = $lastid.".jpg";
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, $path.$new_image_name);
    }

   echo'<script>alert("Terima Kasih  Customer Service Kami Akan segera Menghubungi Saudara '.$_POST['nama_pemilik'].'");window.location ="index.php";</script>';
   
  // }
  // else{  echo'<script>alert("Kode Order Yang Anda Masukkan Salah");window.location ="konfirmasi.php";</script>';
 // }
}
}

?>
<?php
$nama=$_SESSION['username'];
$query="SELECT * FROM daftar_order WHERE namalengkap='$nama'";
$tes=mysqli_query($conn,$query);
while ($rowcat=mysqli_fetch_array($tes)) {
  $kode=$rowcat['kode_order'];
  $total=$rowcat['total'];


}
echo'
<div id="" style="margin-top:100px">
<h2 align="center" style="color:white">Konfirmasi Pembayaran</h2><hr>
<div class="row">
<div class="col-md-6">
<form method="post" enctype="multipart/form-data" onsubmit="return validasi_input(this)">
<input type="hidden" value="'.$kode.'">
<label>Kode Order *</label><input  name="kode_order" size="18" onKeyPress="return HanyaAngka(event)" type="text" readonly="" class="form-control" maxlength="25" value="'.$kode.'">'.$err['kode_order'].'<br>
<label>Tanggal Transfer * </label><input name="tanggal" class="form-control"  type="date" value="'.$_POST['tanggal'].'">'.$err['tanggal'].'<br>
<label>Pemilik Rekening *</label><input name="nama_pemilik" class="form-control" type="text" value="'.$nama.'">'.$err['nama_pemilik'].'<br>
<label>Jumlah Tagihan :</label>
<input name="jumlah_transfer" class="form-control" type="text" readonly="" maxlength="12" value="'.$total.'">'.$err['jumlah_transfer'].'<br>
<label>Nama Bank * </label>
<select name="nama_bank" class="form-control" type="text" value="'.$_POST['nama_bank'].'">
<option value="pilih">-- PILIH --</option>'.$err['nama_bank'].'
<option value="BCA">BCA</option>
<option value="MANDIRI">MANDIRI</option>
<option value="BRI">BRI</option>
<option value="BNI">BNI</option>
</select>'.$err['nama_bank'].'<br>


</div>
<div class="col-md-6">
<label>Jumlah Transfer * Rp.</label>
<input name="jumlah_transfer" onKeyPress="return HanyaAngka(event)" class="form-control" type="text" maxlength="12" value="'.$_POST['jumlah_transfer'].'">'.$err['jumlah_transfer'].'<br>
<label>Alamat Pengiriman *</label>
<textarea class="form-control" placeholder="[ex: jl.xxxx N0.xx kec.xxx Kode Pos, Kota]" type="textarea" name="alamat" cols="50" rows="7" value="'.$_POST['alamat'].'"></textarea>'.$err['alamat'].'<span class="err2"></span><br>

<label>Bukti/Gambar *</label><input type="file" name="gambar" value="'.$_FILES['gambar'].'">'.$err['gambar'].'<br>
 <div class="cleared"></div>


    <tr><td><input type="hidden" name="act" value="add">
    <input type="submit" value="Kirim" class="btn">
    </td></tr>



<p>&raquo;Field yang pake tanda (*) tidak boleh kosong !!</p>
</div>
</div>
</div>';

?>
<?php

echo '&nbsp;<div class="cleared"></div>';

// *** LOAD PAGE FOOTER
include "footer.php";

?>
