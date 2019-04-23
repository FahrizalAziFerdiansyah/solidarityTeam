<html>
<head>
	<title>Add Users</title>
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
          <h3 class="box-title">Data Users </h3>
 

	      <div class="box-body">
			<form action="template.php?page=phpform&fr=add" method="post" >
				<a href="index.php">Go to Home</a>
		        <div class="form-group">
		            <label>Name</label>
		            <input type="text" class="form-control" placeholder="Enter ..." name="name">
		        </div>
		         <div class="form-group">
		            <label>Email</label>
		            <input type="text" class="form-control" placeholder="Enter ..." name="email">
		        </div>        <div class="form-group">
		            <label>Mobile</label>
		            <input type="text" class="form-control" placeholder="Enter ..." name="mobile">
		        </div> 	
	              <div class="box-footer">
	                <button type="submit" class="btn btn-info pull-right" name="Submit" value="Add">Tambah</button>
	              </div>
		    </form>    	
		   </div>	
 			<?php
		   // Check If form submitted, insert form data into users table.
			if(isset($_POST['Submit'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				
				// include database connection file
				include_once("config.php");
						
				// Insert user data into table
				$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
				
				// Show message when user added
				echo "User added successfully. <a href='template.php?page=phpform&fr=index'>View Users</a>";
				// header("template.php?page=phpform&fr=index");
			}
			?>
      </div>
      </div>
	</section>
</body>
</html>