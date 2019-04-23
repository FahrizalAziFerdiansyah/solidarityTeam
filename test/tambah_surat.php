
<?php
include'config.php';
session_start();
$nama=$_SESSION['username'];
$query=mysqli_query($config, "SELECT * FROM tbl_user where username='$nama'");

while ($rowcat=mysqli_fetch_array($query)){
$bidang=$rowcat['nama'];
$sub=$rowcat['sub_bidang'];
$nip=$rowcat['nip'];
	
	}

if (isset($_POST['kirim'])){
    $sql_add="INSERT INTO tbl_surat_keluar(asal_surat,asal_surat_sub,no_surat,isi,tgl_surat,kode,file,keterangan,nip) VALUES ("
    ."'".$_POST['asal_surat']."','".$_POST['asal_surat_sub']."','".$_POST['no_surat']."','".$_POST['isi']."','".$_POST['tgl_surat']."','".$_POST['kode']."','".$_POST['file']."','".$_POST['keterangan']."','".$_POST['nip']."') ";
    @mysqli_query($config,$sql_add);
    echo '
    <script>alert("Barang ditambahkan !!!");window.location="tambah_surat.php"</script>
    ';
}
$no=mysqli_query($config,"SELECT id_surat FROM tbl_surat_keluar ORDER BY id_surat ASC");
while ($counter= mysqli_fetch_array($no)) {

	$no_surat=$counter['id_surat'];
	}
	$hasil=$no_surat+1;
?>

<form action="tambah_surat.php" method="post">
	<label>No Agenda</label><br>
	<input type="number" name="" value="<?php echo $hasil; ?>"><br>
	<label>Asal Surat</label><br>
	<input type="text" name="asal_surat" readonly="" value="<?php echo $bidang ;?>">
	<input type="text" name="asal_surat_sub" readonly="" value="<?php echo $sub;?>"><br>
	<label>Tujuan Surat</label><br>
	<?php

	$query=mysqli_query($config, "SELECT * FROM tbl_user");
	?>
	<select name="nip" id="provinsi">
		<option value=""> Pilih Bidang & Sub Bidang</option>
		<?php
		while ($data =  mysqli_fetch_array($query)){ 
			?> 
			<option value="<?php echo $data['nip'];?>"> <?php echo $data ['nama'] ?> &nbsp; <?php echo $data['sub_bidang'];  ?>
		</option>
		<?php }?>

	</select> <br>
	<label>Tanggal Surat</label><br>
	<input type="date" name="tgl_surat"><br>
	<label>Isi Ringkas</label><br>
	<input type="text" name="isi"><br>
	<label>Kode Klasifikasi</label><br>
	<input type="number" name="kode"><br>
	<label>Nomor Surat</label><br>
	<input type="number" name="no_surat"><br>
	<label>Keterangan</label><br>
	<select name="keterangan">
		<option value="Rahasia">Rahasia</option>
		<option value="Penting">Penting</option>
		<option value="Biasah">Biasah</option>
	</select><br>
	<label>File</label><br>
	<input type="file" name="file"><br><br>
	<button type="submit" name="kirim">KIRIM</button>


</form>