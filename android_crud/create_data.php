<?php
include_once 'koneksi.php';

$nim=$_POST['NIM'];
$nama=$_POST['Nama_mahasiswa'];
$jenis_kel=$_POST['Jenis_kel'];
$alamat=$_POST['Alamat'];

$query=mysqli_query($mysqli,"INSERT INTO mahasiswa(NIM,Nama_mahasiswa,Jenis_kel,Alamat) VALUES('$nim','$nama','$jenis_kel','$alamat')");

$response=array();
if ($query)
{
	$response['code']=1;
	$resposne['message']="Success! Data ditambahkan";	
}
else{
	$response['code']=0;
	$response['message']="Gagal! Data gagal ditambahkan";
}

echo json_encode($response);
?>
