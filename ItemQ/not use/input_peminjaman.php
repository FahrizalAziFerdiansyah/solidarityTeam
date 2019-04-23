<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<head>
	<title>Input peminjaman</title>
	<script type="text/javascript">

			 /*window.onload = function() {
					 var barcode = document.getElementById('kd_barang');
					 barcode.addEventListener("keyup", function() {
							 alert("Please use Barcode Scanner!");
							 document.getElementById('kd_barang').value = "";
					 }, true);
			 };
*/
	 </script>
</head>
<div class="header">
<?php
include"header_menu.php";
?>
</div>
<body>
	<form action="tambah_peminjaman.php" method="POST" class="rule">
	<div class="col-md-6 col-md-offset-3" style="border:1px solid #E1E1E1;">
		<div class="form-group">
			<label for="disabledInputText">Kode Barang</label>
			<input type="text" id="kd_barang" maxlength="20" placeholder="masukkan kode" name="kd_barang" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="disabledInputText">Nama Barang</label>
			<input type="text" name="nama_barang" value="" class="form-control" id="nama_barang" readonly>
		</div>

		<div class="form-group">
			<label for="disabledInputText">Jumlah</label>
			<select name="jumlah" class="form-control" id='jumlah'>

			</select>
		</div>


		<div class="form-group">
			<label for="disabledInputText">NIS</label>
			<input type="text" id="nis" value="" placeholder="masukkan NIS" name="nis" class="form-control" required/>
		</div>

		<div class="form-group">
			<label for="disabledInputText">Nama Siswa</label>
			<input type="text" name="nama_siswa" value="" id="nama_siswa" class="form-control" readonly>
		</div>

		<div class="form-group">
			<label for="disabledInputText">Guru Pengajar</label>
			<select class="form-control" name="guru">
				<option></option>
				<?php
				include 'koneksi.php';
				$q=mysql_query("SELECT * FROM guru");
				while ($data=mysql_fetch_array($q)) {
					echo "<option value='$data[id_guru]'>$data[guru]</option>";
				}
				 ?>
			</select>
		</div>

		<div class="form-group">
			<label for="disabledInputText">Batas Pengembalian</label>
			<input type="date" name="bts_kembali" class="form-control">
		</div>

			<input type="hidden" name="kd_petugas" value="<?php echo $_SESSION['kd_petugas'];?>" class="form-control">

			<input type="submit" value="Simpan" class="btn btn-success">
			</div>
	</form>
</body>
<br>
<div class="footer">
<center>
<?php
include"footer.php";
?>
</center>
</div>

<script src='js/jquery.min.js'></script>
<script>
$(function() {
	$('#kd_barang').keyup(function() {
		var isi = $('#kd_barang').val();

		$.get('getBarang.php?kode=' + isi, function(data) {
			$('#nama_barang').val(data.nama_barang);

			//Tambah option
			for(var i = 1; i <= data.stok; i++) {
				$('#jumlah').append("<option value='" + i + "'>" + i + "</option>");
			}
		}, 'json')
	})
})
$(function(){
	$('#nis').keyup(function(){
		var isi = $('#nis').val();

		$.get('getSiswa.php?nis=' + isi, function(data) {
			$('#nama_siswa').val(data.nama_siswa);
		}, 'json')
	})
})

</script>
<style>
.footer{
	margin-top:550px;
	background:black;
	padding:15px;
}
form{
	margin-top:90px;
}
</style>
