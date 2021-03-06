<?php
/* CandralabGIS v 1.0
 * @author Candra adi putra 
 *  <candraadiputra@gmail.com>
 * http://www.candra.web.id
 * last edit: 27 Oktober 2013
 */
	include ('inc/config.php');
	$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
		$sql = "select * from rumahsakit where idrumahsakit='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$data = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>

<style type="text/css">#map img {
		max-width: none;
	}
	#map label {
		width: auto;
		display: inline;
	}
	div#map {
		margin: 10px;
		width: 100%;
		height: 500px;
		float: left;
		padding: 10px;
	}
	
</style>

<script type="text/javascript">$(document).ready(function() {
		$("#idprovinsi").change(function() {
			var idprovinsi = $("#idprovinsi").val();
			$.ajax({
				url : "inc/get_kabupaten.php",
				data : "idprovinsi=" + idprovinsi,
				success : function(data) {
					// jika data sukses diambil dari server, tampilkan di <select id=kota>
					$("#idkabupaten").html(data);
				}
			});
		});
	});
</script>
<div class="span4">
	
	<div id="map"></div>

</div>
	<!--kolom kiri-->
	<div class='span4'>
		<h2 style="margin-left: 30px"> Form Rumah sakit</h2>
		
<form  class="form-horizontal" method="POST" id="form1"  enctype="multipart/form-data"
action="rumahsakit/rumahsakit_action.php">
	
		<?php		$id = $_GET['id'];?>
		<input type='hidden' name='id' value="<?=$id?>">
	
		<div class="control-group">
			<label class="control-label" for="nama">Nama</label>
			<div class="controls">
				<input type="text" name='nama' value='<?=$data->nama?>'class='required'
				>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="no_telp">No Telp</label>
			<div class="controls">
				<input type="text" name='no_telp' value='<?=$data->no_telp?>' class='required'
				>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="jenis">Jenis</label>
			<div class="controls">
				<select id='jenis' name='jenis'   class="required " >
					<?php
combo_jenis_rs($data->jenis);?>
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="foto">Foto</label>
			<div class="controls">
				<input type="file" name='foto' 
				>
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="nama">Alamat</label>
			<div class="controls">
				<textarea  name='alamat'><?=$data->alamat;?></textarea>
			</div>
		</div>
	

	
			<div class="control-group">
			<label class="control-label" for="idprovinsi">Propinsi</label>
			<div class="controls">
				<select id='idprovinsi' name='idprovinsi' class="required " >
					<?php
combo_provinsi(null);?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="idkabupaten">Kabupaten</label>
			<div class="controls">
				<select id='idkabupaten' name='idkabupaten' class="required " ></select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="lat">latitude</label>
			<div class="controls">
				<input type="text" name='lat' id='lat' value='<?=$data->lat?>' class='required'
				>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="lon">Longitude</label>
			<div class="controls">
				<input type="text" name='lng' id='lng' value='<?=$data->lng?>' class='required'
				>
			</div>
		</div>


		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-success" name='aksi'value='<?=$aksi?>'>
				<?=$aksi?>
				</button>
			</div>
		</div>
	</div>
</form>


<script src="assets/js/lokasi.js"></script>
