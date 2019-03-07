<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/add','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No Hp</th>
			<th>Action</th>
			
		</tr>
		<?php 
		$no = 1;
		foreach($pelanggan as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->no_hp ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id_user,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id_user,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>