<html>
<head>
	<title>Import Data</title>
</head>

<body>
    
	<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php
	include "koneksi.php";
	
	if(isset($_POST["submit"]))
	{
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 1;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$kode_barang = $filesop[0];
			$nama_barang = $filesop[1];
			$stok = $filesop[2];
			
			$sql = mysql_query("INSERT INTO barang (id_barang,kode_barang, nama_barang,jml_total,stok,jml_dipinjam,jml_rusak) 
											VALUES (null,'$kode_barang','$nama_barang','0','$stok','0','0')");
			$c = $c + 1;
		}
		
			if($sql){
				echo "Kamu Memasukkan ". $c ." recoreds";
			}else{
				echo "Ada Kesalahan Dalam Import";
			}

	}
?>
    
    </div>

</body>
</html>