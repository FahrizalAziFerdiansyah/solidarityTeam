
<div id="left">
<div class="kiri">
  <div id="hightlight2" style="margin-top: 6px" align="center">Kategori Sparepart</div><hr>
<?php
 //$idbarang = "SELECT id FROM php_shop_products WHERE id=".$_GET['id']"";
echo"<form method='post' action='list_barang.php'>";
$rcat=@mysqli_query($conn,"SELECT * FROM categories");

    
while ($rowcat = @mysqli_fetch_array($rcat)) {

      echo"<div id='kategori'>";
         echo"<ul id=''>";
           echo "<li><i class='fa fa-check-square'></i>
           <a href=\"list_barang.php?category=".$rowcat['nama']."\">".$rowcat['nama']. " </a>";
           ?>

           <?php
           $idkat = "SELECT id categories";

           $jumlahkategori = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM produk WHERE id = $idkat"));
           ?> <?php echo"".$jumlahkategori.""?> </li>

<?php

         echo"</ul>";
       echo"</div>";
}
echo"</form>";
echo"</div>";
echo"<br>";
?>
</div>
</div>