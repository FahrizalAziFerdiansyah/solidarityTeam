<?php
/* CandralabGIS v 1.0
 * @author Candra adi putra 
 *  <candraadiputra@gmail.com>
 * http://www.candra.web.id
 * last edit: 27 Oktober 2013
 */
 ?>
<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 

  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
          <style type="text/css">
          	#map img { 
  max-width: none;
}

#map label { 
  width: auto; display:inline; 
} 
          	
          </style>
</head> 
<body>
		<h2 id="headings"> Rumah sakit</h2>
<a href='index.php?mod=rumahsakit&pg=rumahsakit_view'><i class="icon-list"></i>List View</a>
  <div id="map" style="width: 800px; height: 400px;"></div>

  <script type="text/javascript">
    var locations = [
   <?php
   $id=$_GET['id'];
            include('inc/config.php');
            	$sql_lokasi="select *
            	from rumahsakit where idrumahsakit='$id' ";
            	$result=query($sql_lokasi);
            	while($data=mysql_fetch_object($result)){
            		$content="'<div id=\"content\">'+
    '<div id=\"siteNotice\">'+
    '</div>'+
    '<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>'+
    '<div id=\"bodyContent\"><p>'+
    '<img src=\"upload/rumahsakit/$data->foto\" ' +
    '<ul>'+
    '<li> No telp: $data->no_telp '+
    '<li> Jenis :$data->jenis '+
    '<li> $data->alamat' +
    '</div></div>'"; ?>
            		    ['<?=$data->nama;?>', <?=$data->lat;?>, <?=$data->lng;?>],
       <?
				}
		?>
		
    
    ];
 var latLng= new google.maps.LatLng(-7.785153, 110.366567);
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: latLng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
	var content=<?=$content?>;
    
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon:'assets/ico/rumahsakit.png'
      });
	
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>