<?php
/* CandralabGIS v 1.0
 * @author Candra adi putra 
 *  <candraadiputra@gmail.com>
 * http://www.candra.web.id
 * last edit: 27 Oktober 2013
 */
 
include ('../inc/config.php');
include('../inc/function.php');
//data dari rumahsakit
//$p = arrayToObject($_POST);
$nama=$_POST['nama'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
$jenis=$_POST['jenis'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$foto=$_POST['foto'];
$idkabupaten=$_POST['idkabupaten'];
$latlng= explode(",", $idkabupaten);
$idkabupaten=get_idkabupaten($latlng[0],$latlng[1]);

$aksi = $_POST['aksi'];
$id = $_POST['id'];

$lokasi_file = $_FILES['foto']['tmp_name'];
$foto_file = $_FILES['foto']['name'];
$tipe_file = $_FILES['foto']['type'];
$ukuran_file = $_FILES['foto']['size'];
$direktori = "../upload/rumahsakit/$foto_file";
$sql = null;
$MAX_FILE_SIZE = 1000000;
//100kb
if($ukuran_file > $MAX_FILE_SIZE) {
	header("Location:../index.php?mod=rumahsakit&pg=rumahsakit_form&status=1");
	exit();
}
$sql = null;
if($ukuran_file > 0) {
	move_uploaded_file($lokasi_file, $direktori);
}

if($aksi == 'tambah') {
	$sql = "INSERT INTO rumahsakit(nama,jenis,lat,lng,no_telp,alamat,foto,idkabupaten)
		VALUES('$nama','$jenis','$lat','$lng',
		'$no_telp','$alamat','$foto_file','$idkabupaten')";
}else if($aksi== 'edit') {
	if(!empty($foto)){
	$sql = "update rumahsakit set nama='$nama',jenis='$jenis',
	lat='$lat',lng='$lng',no_telp='$no_telp' ,alamat='$alamat',
	foto='$foto_file',idkabupaten='$idkabupaten'
	where idrumahsakit='$id'";
	}else{
		$sql = "update rumahsakit set nama='$nama',jenis='$jenis',
	lat='$lat',lng='$lng',no_telp='$no_telp',alamat='$alamat',
	idkabupaten='$idkabupaten'
	where idrumahsakit='$id'";
	}
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if($result) {
	header('location:../index.php?mod=rumahsakit&pg=rumahsakit_view&status=0');
} else {
	header('location:../index.php?mod=rumahsakit&pg=rumahsakit_view&status=1');
}
?>
