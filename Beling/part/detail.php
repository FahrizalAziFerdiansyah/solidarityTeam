<?php
// *** LOAD PAGE HEADER
include "header.php";
include"sidebar.php";

$query = "UPDATE produk SET views = views + 1  WHERE id_produk='".$_GET['id_barang']."'";
mysqli_query($conn,$query);

// QUERY TABLE php_shop_products n record per page
$sql = "SELECT * FROM produk WHERE id_produk='".$_GET['id_barang']."' ";
//echo $sql;
$result = mysqli_query($conn,$sql);



    // *** DISPLAY TABLE PRODUCTS
echo '<div id=bgproduct_detail>';

    while ($row = mysqli_fetch_array($result))
        {


echo'<div id="detail">';
 echo"<table><tr><td><a href='index.php'><i class='fa fa-home'></i> Home</a> &raquo; <a href=\"detail.php?id_barang=".$row['id_produk']."\" class=\"tbeli\">Detail Produk</a> &raquo; ".$row['category']." &raquo; ".$row['nama_produk']."</table></td></tr>";
   
echo"</div>";  
     
echo"<table id='desc_singkat' class='mt-5' style='border:5px'>";
	 echo"<tr><td><h4>&raquo;Nama Produk: ".$row['nama_produk']."</h4></td></tr>";
	 echo"<tr><td><h4>&raquo;Kategori: ".$row['category']."</h4></td></tr>";
	 echo"<tr><td><h4>&raquo;Harga:Rp.". ($row['harga'])."</h4></td></tr>";
     echo"<tr><td class='desc_long'><h3>Deskripsi Barang:</h3>".$row['deskripsi']."</td></tr>";

     echo "<tr><td><a style='margin-top:50px' href=\"checkout_fisrt.php?action=add&id=".$row['id_produk']."\"  class='btn btn-info'>Beli </a></td></tr>"; 
	 echo"</table>";	
     echo'<table>';   
     echo"<td >".$gambar."<a href=\"items/".$row['id_produk'].".jpg\" >
      <img src=\"../img/".$row['gambar']."\" width=400 height=400 style=margin:5px;border=none ></a>"; 
     echo"</td>";

     echo"</tr>";  
echo"</table>";
}

//include"produk_terkait.php";
echo '</div>';




echo '<div class="cleared"></div>';

// *** LOAD PAGE FOOTER
include "footer.php";

?>


