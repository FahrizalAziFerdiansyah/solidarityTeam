
<?php
// *** LOAD ADMIN PAGE HEADER
include "header-admin.php";
echo"<div id='bgkonten'>";


$total=mysqli_num_rows(mysqli_query($conn,"SELECT id_konfirmasi FROM konfirmasi;"));

$rowperpage=2;
// QUERY TABLE php_shop_products
if (!empty($_GET['page'])) $recno=($_GET['page']-1)*$rowperpage; else $recno=0;
$sql = "SELECT * FROM konfirmasi ORDER BY tanggal DESC LIMIT $recno,$rowperpage;";
$result = mysqli_query($conn,$sql);
$ada = mysqli_num_rows($result);
$no=0;
if ($ada>0){
    if (empty($_GET['page'])) $_GET['page']=1;
    ;
    if ($_GET['page']>1) echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.($_GET['page']-1).'">&laquo; </a> | ';
    for ($i=1; $i<= ceil($total/$rowperpage); $i++){
        echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> | ';
    }
    if ($_GET['page']<ceil($total/$rowperpage)) echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.($_GET['page']+1).'">&raquo; </a> ';
    echo"<center>";
    echo '
    <table border="1">
    <tr>
    <td><b>NO</td>
    <td align="center"><b>KODE_ORDER</td>
    <td align="center"><b>TANGGAL TRANSFER</td>
    <td align="center"><b>PEMILIK REKENING</td>
    <td align="center"><b>BANK AKUN</td>
    <td align="center"><b>JUMLAH TRANSFER</td>
     <td align="center"><b>ALAMAT</td>
     <td align="center"><b>BUKTI</td>
    <td colspan="4" align="center"> <b>AKSI</td>
    </tr>
    ';
        while ($row = mysqli_fetch_array($result)){
            $no++;
   echo "<tr><td>".($recno+$no)."</td>";
			if (file_exists("../gambar/".$row['id_konfirmasi'].".jpg"))
                $gambar="<a href=\"../gambar/".$row['id_konfirmasi'].".jpg\" width=20 height=30 target='_blank'>
                <img src=\"../gambar/".$row['id_konfirmasi'].".jpg\" width=60 height=60 target='_blank'></br>Lihat Bukti</a>";
            else
                $gambar="";
				echo "<td>".$row['kode_order']."</td>";
                echo "<td>".$row['tanggal']."</td>";
				echo "<td>".$row['nama_pemilik']."</td>";
				echo "<td>".$row['nama_bank']."</td>";
                 echo "<td>".$row['jumlah_transfer']."</td>";
				echo "<td>".$row['alamat_kirim']."</td>";
                 echo"<td>" .$gambar."</td>";
				//echo "<td><a href=\"admin_product_edit.php?id=".$row['id']."\">[EDIT]</a><td>";
                //echo"<td><a href=\"hapus_konfirmasi.php?id=".$row['id_konfirmasi']."\">[DELETE]</a></td>";
				echo"<td><a href=\"hapus_konfirmasi.php?id=".$row['id_konfirmasi']."\"><i class='fa fa-eraser' style='font-size: 20px;'></i></a></td>";

			echo "</tr>";
		}
    echo'
    </table>
    ';
} else {
    echo "Data Yang Diminta Tidak Tersedia";
}

echo"</center>";
//echo "<a href=\"admin_product_add.php\">[<input type='button' value='TAMBAH' class='btn'>]</a> ";

echo"</div>";
?>
<div class="cleared"></div>

<?php
include"footer.php";
?>

