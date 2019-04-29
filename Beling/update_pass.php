<?php
// include database connection file
include_once("config.php");


if(isset($_POST['kirim']))
{	
	
	$username = $_POST['username'];
	$password=$_POST['password'];
	$no_hp=$_POST['no_hp'];

		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET password='$password' WHERE username='$username'");
	
	// Redirect to homepage to display updated user in list
      echo "<script>
    		alert('Password anda diperbarui!');
    </script>";
    echo '<script>window.location="login.php";</script>';
        return mysqli_affected_rows($mysqli);
        	
	
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}?>