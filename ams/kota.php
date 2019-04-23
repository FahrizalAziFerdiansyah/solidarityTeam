<?php
include'include/config.php';
$prov_id= $_POST['prov_id'];
$sql_kota=mysqli_query($config,"SELECT * FROM tbl_sub where id_bidang='$prov_id'");

echo '<option>Pilih kota </option>';

while ($row_kota=mysqli_fetch_array($sql_kota)) {
	echo '<option value="'.$row_kota['id_sub'].'">'.$row_kota['sub'].'</option>';}
?>