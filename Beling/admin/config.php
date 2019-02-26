<?php
/**
 * using mysqli_connect for database connection
 */
 
 
$mysqli = mysqli_connect("localhost","root", "", "bengkel");
 



//Registrasi Admin//

function registrasiPelanggan($data){
	global $mysqli;

	$username=strtolower(stripslashes($data["username"]));
	$alamat=mysqli_real_escape_string($mysqli, $data["alamat"]);
	$password=mysqli_real_escape_string($mysqli, $data["password"]);
	$password2=mysqli_real_escape_string($mysqli, $data["password2"]);
	$no_hp=mysqli_real_escape_string($mysqli, $data["no_hp"]);
	$email=mysqli_real_escape_string($mysqli, $data["email"]);
	$merk=mysqli_real_escape_string($mysqli, $data["merk"]);
	$pilihan=mysqli_real_escape_string($mysqli, $data["pilihan"]);
	$jumlah=mysqli_real_escape_string($mysqli, $data["jumlah"]);
	$jumlah=mysqli_real_escape_string($mysqli, $data["tanggal"]);
	//user sudah ada
	$result= mysqli_query($mysqli, "SELECT username FROM users WHERE username ='$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('nama sudah terdaftar!')
		</script>";
		return false;
	}

	//cek konfimasi pss
	if($password!== $password2){
		echo "<script>
			alert('kata sandi harus sama!');
		</script>";
		return false;

	}
	//enksripsi password

	//$password= password_hash($password,PASSWORD_DEFAULT);

	//tambah user baru ke data base
	mysqli_query($mysqli, "INSERT INTO users VALUES('','$username','$alamat','$password','$no_hp','$email','$merk','$pilihan','$jumlah','$tanggal' )");

	return mysqli_affected_rows($mysqli);
}

function query($query){
	global $mysqli;
	$result= mysqli_query($mysqli,$query) ;
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	
	}
	return $rows;
}
function perbaikiJalan($data){
	global $mysqli;

        $nama = $_POST['nama'];
        $merk = $_POST['merk'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $keluhan = $_POST['keluhan'];
        $keluhan = $_POST['keluhan'];

        
        
        // include database connection file
            
        // Insert user data into table
        mysqli_query($mysqli, "INSERT INTO pelanggan VALUES('','$nama','$merk','$alamat','$no_hp','$keluhan','$kondisi','$to')");
 		return mysqli_affected_rows($mysqli);
      }


 function perbaikiRumah($data){
 	global $mysqli;

 	$nama=$_POST['nama'];
 	$merk=$_POST['merk'];
 	$alamat=$_POST['alamat'];
 	$no_hp=$_POST['no_hp'];
 	$tanggal=$_POST['tanggal'];
 	$jam=$_POST['jam'];
 	$keluhan=$_POST['keluhan'];

  mysqli_query($mysqli,"INSERT INTO rumah VALUES('','$nama','$merk','$alamat','$no_hp','$tanggal','$jam','$keluhan')");
  return mysqli_affected_rows($mysqli);



 }

  function perbaikiBengkel($data){
 	global $mysqli;

 	$nama=$_POST['nama'];
 	$merk=$_POST['merk'];
 	$alamat=$_POST['alamat'];
 	$no_hp=$_POST['no_hp'];
 	$tanggal=$_POST['tanggal'];
 	$jam=$_POST['jam'];
 	$keluhan=$_POST['keluhan'];
 	$kondisi="Belum Diperbaiki";

  mysqli_query($mysqli,"INSERT INTO bengkel VALUES('','$nama','$merk','$alamat','$no_hp','$tanggal','$jam','$keluhan','$kondisi')");
  return mysqli_affected_rows($mysqli);



 }




 function honda($data){
 	global $mysqli;
 	
 	$id_barang=$_POST['id_barang'];
 	$nama=$_POST['nama'];
 	$harga=$_POST['harga'];
 	$stok=$_POST['stok'];

 	$honda=mysqli_query($mysqli,"SELECT nama FROM honda WHERE nama='$nama'");
 	if (mysqli_fetch_assoc($honda)){		
 		echo "<script>
			alert('Id atau nama barang sudah ada!')
		</script>";
		return false;
 	}
 	
 	mysqli_query($mysqli, "INSERT INTO honda VALUES('$id_barang','$nama','$harga','$stok')");
 	return mysqli_affected_rows($mysqli);
 }

 function trik($data){
 	global $mysqli;
 	$judul=$_POST['judul'];
 	$gambar=$_POST['gambar'];
 	$deskripsi=$_POST['deskripsi'];
 	
	mysqli_query($mysqli,"INSERT INTO trik VALUES('','$judul','$gambar','$deskripsi')");
	return mysqli_affected_rows($mysqli);
 }

 function edit($data){
 	global $mysqli;

 	$id_barang=$_POST['id_barang'];
 	$nama=$_POST['nama'];
 	$harga=$_POST['harga'];
 	$stok=$_POST['stok'];

 	$result=mysqli_query($mysqli, "UPDATE part SET nama='$nama',harga='$harga',stok='$stok' WHERE id_barang='$id_barang'");
 	$honda=mysqli_query($mysqli, "UPDATE honda SET nama='$nama',harga='$harga',stok='$stok' WHERE id_barang='$id_barang'");
 	return mysqli_affected_rows($mysqli);
 }



?>

