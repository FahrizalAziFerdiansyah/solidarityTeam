
<?php
include'config.php';
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
</script><form>
	<label>Provinsi</label><br>
	<?php
	$sql_provinsi=mysqli_query($config, "SELECT * FROM bidang");
	?>
	<select name="provinsi" id="provinsi">
		<option value=""> Pilih Provinsi</option>
		<?php
		while ($row_provinsi =  mysqli_fetch_array($sql_provinsi)){ 
			?> 
			<option value="<?php echo $row_provinsi['id_bidang'];?>"> <?php echo $row_provinsi ['bidang'] ?>
		</option>
		<?php }?>

	</select> </br>
	<label>Kota:</label>
	<select name="kota" id="kota">
		<option value="">pilih kota</option>
		<option></option>
	</select>
</form>

