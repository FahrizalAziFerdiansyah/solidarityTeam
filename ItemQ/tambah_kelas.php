<?php
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='index.php'</script>";
}

include"koneksi.php";

$sql = mysql_query("select count(*) ttl from kelas where kelas = '$_POST[kelas]' and id_jurusan = '$_POST[jurusan]'");
$data = mysql_fetch_array($sql);
if($data['ttl']>0)
{
	echo"<script>alert('Kelas sudah ada !')
	window.location.href='data_kelas.php'</script>";
}
else
{
	if($_POST['rombel'] > 1) {
		for($a=1;$a<=$_POST['rombel'];$a++)
		{
			mysql_query("insert into kelas values ('','$_POST[kelas]','$_POST[jurusan]','$a')");
		}
	}
	else
	{
			mysql_query("insert into kelas values ('','$_POST[kelas]','$_POST[jurusan]','0')");
	}
}
//mysql_query("insert into kelas(kelas)values('$kelas')");
?>
<script>
window.location.href="data_kelas.php";
</script>
