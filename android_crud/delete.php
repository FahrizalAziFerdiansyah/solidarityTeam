<?php
include 'koneksi.php';

$NIM=$_GET['NIM'];
$getdata=mysqli_query($mysqli,"SELECT * FROM mahasiswa WHERE NIM='$NIM'");
$row=mysqli_num_rows($getdata);
$query=mysqli_query($mysqli,"DELETE FROM mahasiswa WHERE NIM='$NIM'");

$respose=array();

if ($row > 0)  {
	# code...

if ($query) {
	$respose['code']=1;
	$respose['message']="Delete Success";

	# code...
}else{
	$respose['code']=0;
	$respose['message']="Failed Delete";

}
}
else{
	$respose['code']=0;
	$respose['message']="Failed Delete, data not found";
}

echo json_encode($respose);
?>