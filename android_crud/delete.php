<?php
include 'koneksi.php';

$NIM=$_POST['NIM'];
$getdata=mysqli_query($mysqli,"SELECT * FROM mahasiswa WHERE NIM='$NIM'");
$row=mysqli_num_rows($getdata);

$query=mysqli_query($mysqli,"DELETE FROM mahasiswa WHERE NIM='$NIM'");

$response=array();

if ($row > 0)  {
	# code...

if ($query) {
	$response['code']=1;
	$response['message']="Delete Success";

	# code...
}else{
	$response['code']=0;
	$response['message']="Failed Delete";

}
}
else{
	$response['code']=0;
	$response['message']="Failed Delete, data not found";
}

echo json_encode($response);
?>