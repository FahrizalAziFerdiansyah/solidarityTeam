<?php
include"koneksi.php";
mysql_query("delete from login where id_petugas='$_GET[id_petugas]'");
?>
<script>
window.location.href="update_hak_akses.php";
</script>