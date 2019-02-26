<?php
require '../config.php';
include "header-admin.php";
if (isset($_POST["act"])) {
    if (part($_POST>0)) {
       echo "<script>
    alert('berhasil!');
    </script>";
    }
    else{
    echo "<script>
    alert('Tambah barang lagi!');
    </script>";
    }
    # code...
}
// Fetch all users data from database


?> 



<div id="bgkonten">
<td><a href="admin_product.php"><i class="fa fa-arrow-circle-o-left"></i> Back</a></td>
<h1 align="center">Tambah Produk</h1>
<form method="post" enctype="multipart/form-data">
<table>
<tr><td>&laquo;&nbsp;Jenis Motor</td><td>:</td><td>
<select name="nama" class="texbox">

<?php
$rcat=@mysqli_query($conn,"SELECT * FROM motor");
while ($rowcat=@mysqli_fetch_array($rcat)){
      echo ' <option value="'.$rowcat['nama'].'">'.$rowcat['nama'].'</option>';
}
echo'</td></tr>';
?>

</select><br>
<tr><td>&laquo;&nbsp;Kategori</td><td>:</td><td>
<select name="category" class="texbox">

<?php
$rcat=@mysqli_query($conn,"SELECT * FROM categories");
while ($rowcat=@mysqli_fetch_array($rcat)){
      echo ' <option value="'.$rowcat['nama'].'">'.$rowcat['nama'].'</option>';
}
echo'</td></tr>';
?>

</select><br>

<tr><td>&laquo;&nbsp;Nama Produk</td><td>:</td><td><input name="name" size="50" class="texbox"></td></tr>
<tr><td>&laquo;&nbsp;Deskripsi</td><td>:</td><td><textarea class="ckeditor" cols="80" rows="7" name="description"></textarea></td></tr>
<tr><td>&laquo;&nbsp;Harga</td><td>:</td><td><input name="price" size="30" class="texbox"></td></tr>
<tr><td>&laquo;&nbsp;Stok</td><td>:</td><td><input name="stok" size="30" class="texbox"></td></tr>

<tr><td>&laquo;&nbsp;<input type="file" name="gambar" ></td></tr>
<tr>
<td><input type="submit" value="SIMPAN" class="btn_submit">
    <input type="hidden" name="act" value="add"></td></tr>
    </table>
    </form>
</div>
<div class="cleared"></div>
<?php
include"footer.php";
?>
<