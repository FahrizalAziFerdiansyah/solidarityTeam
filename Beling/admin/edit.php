<?php
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_trik = $_POST['id_trik'];
	$judul=$_POST['judul'];
	$deskripsi=$_POST['deskripsi'];
	$gambar=$_POST['gambar'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE trik SET  judul='$judul', gambar='$gambar',deskripsi='$deskripsi' WHERE id_trik='$id_trik'");
	
	// Redirect to homepage to display updated user in list
	header("Location: trik.php");
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View trik</a>";
}

// Display selected user data based on id
// Getting id from url
$id_trik = $_GET['id_trik'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT  * FROM trik WHERE id_trik='$id_trik'");
 
while($row = mysqli_fetch_array($result))
{	
	$id_trik = $row['id_trik'];
	$judul = $row['judul'];
	$gambar = $row['gambar'];
	$deskripsi = $row['deskripsi'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>

	 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BKPM
        <small>Buku Kerja Praktek Mahasiswa - Praktek 2</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit trik </h3>
 

	      <div class="box-body">
			<form method="post">
				<a href="index.php">Go to Home</a>
				<div class="form-group">
		            <label>Id Trik</label>
		            <input type="text" class="form-control" name="id_trik" value=<?php echo $id_trik;?>>
		        </div>
		        <div class="form-group">
		            <label>judul</label>
		            <input type="text" class="form-control" name="judul" value=<?php echo $judul;?>>
		        </div>
		        <div class="form-group">
		            <label>gambar</label>
		            <input type="file" class="form-control" name="gambar" value=<?php echo $gambar;?>>
		        </div>        
		        <div class="form-group">
		            <label>deskripsi</label>
		            <input type="text" class="form-control" name="deskripsi" value=<?php echo $deskripsi;?>>
		        </div> 	
	            <div class="box-footer">
	              	<input type="hidden" name="id_trik" value=<?php echo $_GET['id_trik'];?>>
	                <button type="submit" class="btn btn-info pull-right" name="update" value="update">Ubah</button>
	   
	            </div>
		    </form>    	
		  </div>
		</div>  	
      </div>
 
	</section>

</body>
</html>