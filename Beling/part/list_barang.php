<?php
// *** LOAD PAGE HEADER
include "header.php";
include"sidebar.php";

// *** MENGHAPUS SESSION SEARCH / RESETING
if ($_POST['clear']=="y"){ unset($_SESSION['scari']); unset($_SESSION['scategory']);
unset($_POST['cari']); unset($_POST['category']);}
if ($_GET['clear']=="y"){ unset($_SESSION['scari']); unset($_SESSION['scategory']);
}

// ***  DEKLARASI VARIABLE
if (!empty($_GET['page'])) $_SESSION['page']=$_GET['page'];
if (!empty($_SESSION['page'])) $_GET['page']=$_SESSION['page'];
if (!empty($_POST['category'])) $_SESSION['scategory']=$_POST['category'];
if (!empty($_GET['category'])) $_SESSION['scategory']=$_GET['category'];
if (!empty($_POST['cari'])) $_SESSION['scari']=$_POST['cari'];



// *** DEFAULT VARIABLE SETTING
$line_cost=0; // *** CART - SUBTOTAL COST
$total_cost=0; // *** CART - TOTAL COST
$line_quantity=0; // *** CART - SUBTOTAL QUANTITY
$total_quantity=0; // *** CART - TOTAL QUANTITY

// *** Query Pencarian
$qry_0 = "SELECT id_produk FROM produk ";
$qry_t="WHERE  category LIKE '%".$_SESSION['scategory']."%' AND ";
$qry_t.="( nama_produk LIKE '%".$_SESSION['scari']."%' ";
$qry_t.="OR nama LIKE '%".$_SESSION['scari']."%' ";
$qry_t.="OR category LIKE '%".$_SESSION['scari']."%' ";
$qry_t.="OR deskripsi LIKE '%".$_SESSION['scari']."%') ";
 

//echo "[ $qry_0.$qry_t ]";
$total_rec=@mysqli_num_rows(mysqli_query($conn,$qry_0.$qry_t)); // *** TOTAL RECORD PRODUCT

$rowperpage=12; // *** DISPLAY NUM RECORD PER PAGE

// ** predefine record number
if (!empty($_GET['page'])) $recno=($_GET['page']-1)*$rowperpage; else $recno=0;

// QUERY TABLE php_shop_products n record per page
$sql = "SELECT * FROM produk ".$qry_t." ORDER BY id_produk DESC LIMIT $recno,$rowperpage;";

//echo $sql;
$result = mysqli_query($conn,$sql);
$ada = @mysqli_num_rows($result);
$no=0;

if ($ada>0){ // ** IF RECORD EXISTS

    // ** PAGING NAVIGATION
    if ($total_rec>$rowperpage){ // *** IF TOTAL RECORD GREATER THAN RECORD PER PAGE => SHOW PAGING
    $paging_html.= '<div id="paging">';
    if (empty($_GET['page'])) $_GET['page']=1; // ** SET DEFAULT PAGE = 1
    // *** PREV RECORD LINK
    if ($_GET['page']>1) $paging_html.= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($_GET['page']-1).'">&laquo;prev</a>';
    // *** PAGING NUMBERS LINK
    for ($i=1; $i<= ceil($total_rec/$rowperpage); $i++){
        $paging_html.= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'"';
        if ($_GET['page']==$i) $paging_html.= ' class="paging_cur" ';
        $paging_html.= '>'.$i.'</a>';
    }
    // *** NEXT RECORD LINK
    if ($_GET['page']<ceil($total_rec/$rowperpage)) $paging_html.= '<a href="'.$_SERVER['PHP_SELF'].'?page='.($_GET['page']+1).'">next&raquo;</a> ';
    $paging_html.= '</div><!-- id="paging" -->';
    } // *** end if ($total_rec>$rowperpage)

?>
<!--data barang-->
    
<div id="keranjang">
<div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Data barang</h3>
            </div>
            <div class="panel-body">
<div class="row">
<?php
    while ($row = mysqli_fetch_array($result))
        { 
                    echo '
                    <div style="border: 10px">
                    <a href="detail.php?id_barang='.$row['id_produk'].'" class="tbeli"> </a>
                    <div class="col-sm-3">
                    <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="../img/'.$row['gambar'].'" alt="" width=190 height=250 />
                        <h3>Rp.'.$row['harga'].'</h3>
                        <h4>'.$row['nama_produk'].'</h2>
                        <p>'.$row['nama'].'</p>
                        <a href="'.$_SERVER[PHP_SELF].'?action=add&id='.$row['id_produk'].'" class="btn btn-default add-to-cart" style="color:gray"><i class="fa fa-shopping-cart"></i> <input type="hidden" name="beli">Tambah</a>
                        <a href="detail.php?id_barang='.$row['id_produk'].'" class="btn btn-default add-to-cart" style="color:gray"><i class="fa fa-search-plus"></i>
                       </a>
                      </div><br><br>
                      
                    </div>
                  </div>
                  </div>
                  </div>
                 ';

          
}


echo '</div>';

} else {
     echo"<br>";
     echo "<h3 align='center' style=margin-top:75px>Barang Kosong!</h3><hr>";
 

}
// *** LOAD PAGE FOOTER

?>
</div>
