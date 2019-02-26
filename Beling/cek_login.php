<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"SELECT * FROM users WHERE username='$username' and password='$password'");
$tes = mysqli_query($mysqli,"SELECT * FROM admin_web WHERE username='$username' and kata_sandi='$password'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$admin = mysqli_num_rows($tes);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
		    echo "<script>
		    alert('Anda berhasil login!');
		    </script>";
			echo '<script>window.location="index.php";</script>';
		
}else if ($admin>0) {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	header("location:admin/home.php");
	}
elseif ($username != $cek['username']&&$password != $cek['password']) {
	echo "<script>
    alert('username atau password salah!');
    </script>";
	echo '<script>window.location="login.php";</script>';
}
else{
    echo "<script>
    alert('Login anda gagal!');
    </script>";
    echo '<script>window.location="login.php";</script>';
}

?>