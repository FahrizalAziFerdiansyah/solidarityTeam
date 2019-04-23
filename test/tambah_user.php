<?php
include'config.php';
if (isset($_POST['tambah'])) {
	$tambah="INSERT INTO tbl_user(nip,username,password,nama,sub_bidang,level) VALUES ('".$_POST['nip']."','".$_POST['username']."','".$_POST['password']."','".$_POST['nama']."','".$_POST['sub_bidang']."','".$_POST['level']."')";
	mysqli_query($config,$tambah);
	
	echo '<script>alert("User baru ditambahkan");window.location="tambah_user.php"</script> ';
	
}
?>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#provinsi').change(function(){
			var provinsi_id=$(this).val();

		$.ajax({
			type:'POST',
			url:'kota.php',
			data:'prov_id='+provinsi_id,
			success:function(response){
				$('#kota').html(response);
			}
		});
	})
	});
</script>
<h1>Tambah User</h1>
<form method="post" action="tambah_user.php">
	<label>NIP</label><br>
	<input type="number" name="nip"><br>
	<label>Username</label><br>
	<input type="text" name="username"><br>
	<label>Password</label><br>
	<input type="password" name="password"><br>
	<?php
	$sql_provinsi=mysqli_query($config, "SELECT * FROM bidang");
	?>
	<label>Bidang</label><br>
	<select name="nama" id="provinsi">
		<option value=""> Pilih Bidang</option>
		<?php
		while ($row_provinsi =  mysqli_fetch_array($sql_provinsi)){ 
			?> 
			<option value="<?php echo $row_provinsi['bidang'];?>"> <?php echo $row_provinsi ['bidang'] ?>
		</option>
		<?php }?>

	</select>
	<select name="sub_bidang" id="kota">
		<option value="">Pilih Sub</option>
		<option></option>
	</select><br><br>
	<input type="text" hidden="" value="2" name="level">
	<button type="submit" name="tambah">Tambah</button>
</form>