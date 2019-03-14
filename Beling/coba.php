<?php

session_start(); 
include'config.php';

  $username=$_SESSION['username'];
  $query="SELECT * FROM users INNER JOIN user_servis ON users.username=user_servis.username WHERE user_servis.username='$username'";
$rcat=mysqli_query($mysqli,$query);
while ($rowcat=mysqli_fetch_array($rcat)){
   $nama=$rowcat['username'];

   
}

if ($username==$nama) {
	header("location:Jadwal/index.php");
} else{
			echo "<script>
		    alert('Daftar terlebih dahulu!');
		    </script>";
		    echo '<script>window.location="index.php";</script>';
}
 ?>

