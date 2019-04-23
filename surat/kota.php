<?php
include'config.php';
$prov_id= $_POST['prov_id'];
$sql_kota=mysqli_query($config,"SELECT * FROM tbl_sub INNER JOIN bidang ON bidang.id_bidang=tbl_sub.id_bidang where bidang.bidang='$prov_id' ");

echo '<option>Pilih Sub </option>';

while ($row_kota=mysqli_fetch_array($sql_kota)) {
	echo '<option value="'.$row_kota['sub'].'">'.$row_kota['sub'].'</option>';}
?>