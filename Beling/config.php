<?php
/**
 * using mysqli_connect for database connection
 */
 
 
$mysqli = mysqli_connect("localhost","root", "", "bengkel");
 



//Registrasi Admin//



function daftar($data){
	global $mysqli;

	$username=strtolower(stripslashes($data["username"]));
	$password=mysqli_real_escape_string($mysqli, $data["password"]);
	$password2=mysqli_real_escape_string($mysqli, $data["password2"]);
	$email=mysqli_real_escape_string($mysqli, $data["email"]);
	/*$no_hp=mysqli_real_escape_string($mysqli, $data["no_hp"]);
	$alamat=mysqli_real_escape_string($mysqli, $data["alamat"]);
	/*$merk=mysqli_real_escape_string($mysqli, $data["merk"]);
	$pilihan=mysqli_real_escape_string($mysqli, $data["pilihan"]);
	$jumlah=mysqli_real_escape_string($mysqli, $data["jumlah"]);
	$tanggal=mysqli_real_escape_string($mysqli, $data["tanggal"]);*/
	//user sudah ada
	$kondisi="Kosong";
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

	mysqli_query($mysqli, "INSERT INTO users VALUES('','$username','$password','$email','$kondisi' )");
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





function berkala($data){
	global $mysqli;

    $username = strtolower(stripslashes($data["username"]));
	$no_hp=mysqli_real_escape_string($mysqli, $data["no_hp"]);
	$alamat=mysqli_real_escape_string($mysqli, $data["alamat"]);
	$merk=mysqli_real_escape_string($mysqli, $data["merk"]);
	//$model=mysqli_real_escape_string($mysqli, $data["model"]);
	$pilihan=mysqli_real_escape_string($mysqli, $data["pilihan"]);
	$jumlah=mysqli_real_escape_string($mysqli, $data["jumlah"]);
	$tanggal=mysqli_real_escape_string($mysqli, $data["tanggal"]);			
        
        
        // include database connection file
            
        // Insert user data into table
        mysqli_query($mysqli, "INSERT INTO user_servis VALUES('','$username','$no_hp','$alamat','$merk','$pilihan','$jumlah','$tanggal')");
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

 function bayar($data){
	global $mysqli;

        $username = $_POST['username'];
        $total_bayar = $_POST['total_bayar'];
        $jum_tf = $_POST['jum_tf'];
        $bukti_tf = $_POST['bukti_tf'];
        $kondisi="Baru";
        mysqli_query($mysqli, "INSERT INTO trans_servis VALUES('','$username','$total_bayar','$jum_tf','$bukti_tf','$kondisi')");
 		return mysqli_affected_rows($mysqli);
      }


?>

