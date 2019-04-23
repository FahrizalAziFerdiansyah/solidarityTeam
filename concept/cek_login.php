<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"SELECT * FROM user WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

 
if($cek > 0){
	$a = mysqli_fetch_assoc($data);

	if ($a['level']=="pelanggan") {
		# code...
	
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "pelanggan";
	$_SESSION['satus'] = "login";
		    echo "<script>
		    alert('Anda berhasil login!');
		    </script>";
			echo '<script>window.location="wisata.php";</script>';
		
}else if ($a['level']=="admin") {
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "admin";
	$_SESSION['status'] = "login";
    echo "<script>
		    alert('Anda berhasil login admin!');
		    </script>";
	echo '<script>window.location="admin/index.html";</script>';
	}
}
else {
	echo "<script>
    alert('username atau password salah!');
    </script>";
	echo '<script>window.location="login.php";</script>';
}

?>