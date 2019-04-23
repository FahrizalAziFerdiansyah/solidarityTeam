
<?php

$username=$_POST['username'];
$password=$_POST['password'];

session_start();
include "koneksi.php";

$result = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$data=mysql_fetch_array($result);

if($username==$data['username'] && $password==$data['password']){

			$_SESSION['username'] = $data['username'];
			$_SESSION['level'] = $data['level'];
			$_SESSION['id_petugas'] = $data['id_petugas'];
			echo"<script>alert('Login Sukses')
	window.location='home_admin.php'</script>";

}else{
		echo"<script>alert('Gagal Login')
			window.location.href='index.php'</script>";

}

/*session_start();
include"koneksi.php";
$result = mysql_query("select * from login where username='$_POST[username]' AND password='$_POST[password]'");
if(mysql_num_rows($result)>0){
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['level'] =
	echo"<script>alert('login sukses')
	window.location.href=''</script>";
}
else{
	echo"<script>aler(login gagal);
	window.locaion.href=''</script>";
}
*/
?>
