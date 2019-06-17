<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
if (isset($_POST['kirim'])){


 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($config,"INSERT INTO user (username,password,no_hp) VALUES( "
    ."'".$_POST['username']."','".$_POST['password']."','".$_POST['no_hp']."')");

if ($data > 0) {


    echo '<script>alert("Registrasi Berhasil!");window.location="login.php"</script>';

	# code...
}
else{
	echo '<script>alert("Registrasi Gagal!");window.location="register.php"</script>';
}
}

?>