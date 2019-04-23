<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BKPM
        <small>Buku Kerja Praktek Mahasiswa - CRUD PHP Native</small>
      </h1>
    </section>
 

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Personal </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

        <a href="template.php?page=phpform&fr=add">Add New User</a><br/><br/>

            <table class="table table-bordered">
             <tr>
                <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
            </tr>
            <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['mobile']."</td>";
                echo "<td>".$user_data['email']."</td>";    
                echo "<td><a href='template.php?page=phpform&fr=edit&id=$user_data[id]'>Edit</a> | <a href='template.php?page=phpform&fr=delete&id=$user_data[id]'>Delete</a></td></tr>";        
            }
            ?>
            </table>

        </div>
       </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->




</body>
</html>