<?php
include "koneksi.php";
$k='Wisata Air';
$Q = mysqli_query($mysqli,"SELECT * FROM jasaweb where kategori='$k'")or die(mysqli_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}

?>