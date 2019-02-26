<?php
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['pesan']))
{	
		global $mysqli;

        $nama = $_POST['nama'];
        $merk = $_POST['merk'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $keluhan = $_POST['keluhan'];
        $tanggal =$_POST['tanggal'];
        $jam=$_POST['jam'];
        $kondisi="Belum Diperbaiki";
        $total_bayar="0";
        $jenis_perbaiki =$_POST['jenis_perbaiki'];
        $nama_montir ="Custom";
        
        // include database connection file
            
        // Insert user data into table
        mysqli_query($mysqli, "INSERT INTO pelanggan VALUES('','$nama','$merk','$alamat','$no_hp','$tanggal','$jam','$keluhan','$total_bayar','$kondisi','$jenis_perbaiki','$nama_montir')");
         echo "<script>
    		alert('Berhasil!');
    </script>";
    echo '<script>window.location="index.php";</script>';
        return mysqli_affected_rows($mysqli);
        	
	die();
 		

      }



?>