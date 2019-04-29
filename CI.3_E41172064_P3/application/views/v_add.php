<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<center>
    <form action="<?php echo base_url(). 'crud/add_action'; ?>" method="post">
        <table>
        <tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
            </tr>
            <tr>
				<td>Password</td>
				<td><input type="password" name="sandi"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
        </table>
    </form>
	</center>
</body>
</html>