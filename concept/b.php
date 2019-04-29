<?php
include 'koneksi.php';
 $kt='Bojonegoro';
$R = mysqli_query($mysqli,"SELECT * FROM jasaweb where kota='$kt'")or die(mysqli_error());
if($R){
 $posts = array();
      if(mysqli_num_rows($R))
      {
             while($post = mysqli_fetch_assoc($R)){
                     $posts[] = $post;
             }
      }  
      $a = json_encode(array('results'=>$posts));
      echo $a;                     
}
?>