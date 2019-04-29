<?php
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: template.php?page=phpform&fr=index");
	die();
	// echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View Users</a>";
}

// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
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
          <h3 class="box-title">Edit Users </h3>
 

	      <div class="box-body">
			<form action="template.php?page=phpform&fr=edit" method="post" >
				<a href="index.php">Go to Home</a>
		        <div class="form-group">
		            <label>Name</label>
		            <input type="text" class="form-control" name="name" value=<?php echo $name;?>>
		        </div>
		        <div class="form-group">
		            <label>Email</label>
		            <input type="text" class="form-control" name="email" value=<?php echo $email;?>>
		        </div>        
		        <div class="form-group">
		            <label>Mobile</label>
		            <input type="text" class="form-control" name="mobile" value=<?php echo $mobile;?>>
		        </div> 	
	            <div class="box-footer">
	              	<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
	                <button type="submit" class="btn btn-info pull-right" name="update" value="update">Ubah</button>
	            </div>
		    </form>    	
		  </div>
		</div>  	
      </div>
 
	</section>

</body>
</html>