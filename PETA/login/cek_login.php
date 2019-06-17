<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($config,"SELECT * FROM user WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

 
if($cek > 0){
	$a = mysqli_fetch_assoc($data);

	if ($a > 0) {
		# code...
	
	$_SESSION['username'] = $username;
	$_SESSION['satus'] = "login";
		    echo "<script>
		    alert('Anda Berhasil Login!');
		    </script>";
			echo '<script>window.location="../index.php";</script>';}
		

}
else {
	echo "<script>
    alert('username atau password salah!');
    </script>";
	echo '<script>window.location="login.php";</script>';
}

?>