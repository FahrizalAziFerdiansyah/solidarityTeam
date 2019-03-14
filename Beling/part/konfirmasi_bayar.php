<?php
// *** LOAD PAGE HEADER
include "header.php";
include"right.php";
include "left.php";
?>
 <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        
        height: 50%;
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
   echo'<script>alert("Terima Kasih  Customer Service Kami Akan segera Menghubungi Saudara '.$_POST['nama_pemilik'].'");window.location ="index.php";</script>';
   
  // }
  // else{  echo'<script>alert("Kode Order Yang Anda Masukkan Salah");window.location ="konfirmasi.php";</script>';
 // }
}
}

?>
<?php  
            session_start();     
            $username=$_SESSION['username'];
            $result ="SELECT * FROM daftar_order WHERE namalengkap='$username' ";
            $ada =  mysqli_query($conn, $result);
            while ($row=mysqli_fetch_array($ada)) {
            $kode= $row['kode_order'];
            $bayar= $row['total'];

            }
?>
<?php
echo'
<div style="margin-top:100px">
           <div class="panel panel-success">
            <div class="panel-heading">
              <center><h3 class="panel-title">Detail Barang Dibeli</h3></center>
            </div>
            <div class="panel-body">

<div class="row">
<div class="col-md-6">
<form method="post" >

<label>Kode Order *</label><input  readonly="" name="kode_order" size="18" onKeyPress="return HanyaAngka(event)" type="text" class="form-control" maxlength="25" value="'.$kode.'">'.$err['kode_order'].'<br>
<input  name="kode_order" size="18" type="hidden" class="form-control" maxlength="25" value="'.$kode.'">
<label>Tanggal Transfer * </label><input name="tanggal" class="form-control"  type="date" value="'.$_POST['tanggal'].'">'.$err['tanggal'].'<br>
<label>Pemilik Rekening *</label><input name="nama_pemilik" class="form-control" type="text" value="'.$_SESSION['username'].'">'.$err['nama_pemilik'].'<br>
<label>Jumlah Tagihan *</label> (Belum Termasuk Ongkir)<input class="form-control" readonly="" type="text" value="'.$bayar.'">'.$err['nama_pemilik'].'<br>
<label>Nama Bank * </label>
<select name="nama_bank"   class="form-control" type="text" value="'.$_POST['nama_bank'].'">
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
<label>Bukti/Gambar *</label>
<input type="file" name="gambar" ><br>';?>
<div id="pac-container">
                            <label>Alamat Lengkap </label>
                            <textarea id="pac-input" auotofocus="" value="<?php echo $_POST['alamat'];?>" name="alamat" class="form-control" type="text" placeholder="Masukan Alamat"></textarea>
                            </div>
                            <div id="map"></div>
                            <div id="infowindow-content">
                            <img src="" width="16" height="16" id="place-icon">
                            <span id="place-name"  class="title"></span><br>
                            <span id="place-address"></span>
                            </div></div>
<?php
echo'

 <div class="cleared"></div>


   <input type="hidden" name="act" value="add">
    <input type="submit" value="Kirim" class="btn">
    

</form>
</div>
</div>
</div>';

?>
<?php

echo '&nbsp;<div class="cleared"></div>';

// *** LOAD PAGE FOOTER

?>
<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkE6oJvsyX4sRAw0QTt3R_gJClY0NtIFQ&libraries=places&callback=initMap"
        async defer></script>
