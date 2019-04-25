<?php
include 'koneksi.php';

$NIM=$_POST['NIM'];
$Nama_mahasiswa=$_POST['Nama_mahasiswa'];
$Jenis_kel=$_POST['Jenis_kel'];
$Alamat=$_POST['Alamat'];

$getdata=mysqli_query($mysqli,"SELECT * FROM mahasiswa WHERE NIM='$NIM'");
$rows=mysqli_num_rows($getdata);


$respose=array();
if ($rows > 0) {

	$query=mysqli_query($mysqli,"UPDATE mahasiswa SET NIM='$NIM',Nama_mahasiswa='$Nama_mahasiswa',Jenis_kel='$Jenis_kel',Alamat='$Alamat' WHERE NIM='$NIM'");

	if ($query) {
	$respose['code']=1;
	$respose['message']="Update berhasil";
	# code...
}
else{
	$respose['code']=0;
	$respose['message']="Update gagal";
}
}else{
	$respose['code']=0;
	$respose['message']="Update gagal, data not found";	
}


echo json_encode($respose);
?>