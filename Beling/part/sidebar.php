
<div id="left">
<div class="kiri">
             <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Kategori Sparepart</h3>
            </div>
            <div class="panel-body">
<?php
 //$idbarang = "SELECT id FROM php_shop_products WHERE id=".$_GET['id']"";
echo"<form method='post' action='list_barang.php'>";
$rcat=@mysqli_query($conn,"SELECT * FROM categories");

 //Nampilin kategori   
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
</div>
</div>