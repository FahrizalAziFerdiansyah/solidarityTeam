<?php
include "koneksi.php";
$Q = mysqli_query($mysqli,"SELECT * FROM jasaweb where id_perusahaan='$id'");
if($Q){
 $posts = array();
      if(mysql_num_rows($Q))
      {
             while($post = mysql_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}

?>