<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">

<html>
  <head>
    <title>Login</title>
  </head>
  <body>
  <?php
  include"header_menu.php";
  ?>
  <img src="img/dop.png" class="img img-responsive center-block" width='150px' height='150px'></img>
	
	<center><form action="p_login.php" method = "POST" class="rule">
   
        <div class="form-group">
		<label for="disabledInputText">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
		<label for="disabledInputText">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
			<input type="submit" value="Login" class="btn btn-success">
     </div>
    </form></center>
	<div class="footer">
	<?php
	include"footer.php";
	?>
	</div>
  </body>
</html>
<style>
label{
	font-size:20px;
	text-align:left;
	color:;
}
form{
	margin-top:10px;
	width:500px;
	margin-right:auto;
	margin-left:auto;
}
.footer{
	margin-top:130px;
	background:black;
	padding:15px;
	text-align:center;
}
img{
	margin-top:120px;
}
body{
	background:none;
}
</style>