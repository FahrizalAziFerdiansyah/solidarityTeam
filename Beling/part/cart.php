<a href='checkout_fisrt.php'>
<?php
// *** SWITCH ACTION

/*
foreach ($_GET AS $K=>$V) echo "<li>$K=>$V";
echo "###";
foreach ($_POST AS $K=>$V) echo "<li>$K=>$V";
*/

$product_id = $_GET[id];	 //the product id from the URL
$action 	= $_GET[action]; //the action from the URL


switch($action) {

    case "add":
        // TAMBAH 1 UNTUK NILAI PRODUCT ID -> $product_id

 $sql = mysqli_query($conn,"SELECT stok FROM produk WHERE id_produk='".$product_id."'");
	while($row=mysqli_fetch_array($sql))

if ( $row['stok']==0){
       echo "<script>
            alert('Maaf, Stok Habis!')
        </script>";
    }
  else{

   $_SESSION['cart'][$product_id]++;
  }
    break;

    case "remove":
        // KURANG 1 UNTUK NILAI PRODUCT ID -> $product_id
       unset ($_SESSION['cart'][$product_id]);
        // JIKA SETELAH DIKURANGI NILAI == 0, VARIABLE SESSION PRODUCT ID -> $product_id DI HAPUS DENGAN fucntion "unset"
        // Karena jika tidak di- "unset" nilai nya menjadi -1 , -2, dst ketika user terus mengurangi item cart
        //if($_SESSION['cart'][$product_id] == 0) unset($_SESSION['cart'][$product_id]);
    break;

    case "empty":
        // MENGKOSONGKAN CART (KERANJANG) memakai function unset SELURUH ITEM PRODUCT AKAN DIKOSONGKAN
        unset($_SESSION['cart']);
    break;
    

    case "update":

    $sql = mysqli_query($conn,"SELECT stok FROM produk WHERE id_produk='".$product_id."'");
	while($r=mysqli_fetch_array($sql)){
   if ($_GET['jumbel'] > $r['stok']){
     echo "<script>
            alert('Jumlah Barang Yang Anda Minta Melebihi Stok Yang Ada!')
        </script>";
    }
    elseif ($_GET['jumbel'] == 0){
        echo "<script>window.alert('Jumlah Beli Tidak Boleh Dikosongkan!');
        window.location=('info_belanja.php')</script>";
    }

    else{
      $_SESSION['cart'][$product_id] = $_GET['jumbel'];
      mysqli_query($conn,"UPDATE produk SET produk.stok=produk.stok-daftar_order.jumbel WHERE produk.id_produk='$_POST[id_produk]'");
   }
}
  //  }
		break;

    
}





if($_SESSION['cart']) {	// *** JIKA KERANJANG ADA ISI NYA / TIDAK KOSONG


    // TAMPILKAN TABEL KERANJANG
    	// format tampilan menggunakan HTML table




        // LOOPING / PENGULANGAN : UNTUK MENDEFINISIKAN ISI KERANJANG
        // $product_id sebagai key DAN $quantity sebagai value
        foreach($_SESSION['cart'] as $product_id => $quantity) {

            // MENDAPATKAN name, description, price DARI database - INI TERGANTUNG penamaan implementation database anda .
            // GUNAKAN FUNCTION sprintf AGAR/SUPAYA $product_id MASUK KE DALAM query SEBAGAI SEBUAH number - UNTUK MENGHINDARI SQL injection (HACKING)
            $sql = sprintf("SELECT id_produk, nama_produk, harga,stok FROM produk WHERE id_produk = %d;",
                            $product_id);

            $result = mysqli_query($conn,$sql);

            // HANYA MENAMPILKAN JIKA PRODUCT NYA ADA / TIDAK KOSONG
            if(mysqli_num_rows($result) > 0) {

                list($kode, $name, $price) = mysqli_fetch_row($result);

                // MENGHITUNG SUBTOTAL ($line_cost) DARI HARGA ($price) * JUMLAH ($quantity)
                $line_cost = $price * $quantity;

                // MENGHITUNG TOTAL DENGAN MENAMBAHKAN SUBTOTAL ($line_cost) MASING2 PRODUCT
                $total_cost += $line_cost;
                $total_quantity += $quantity;

            }

        }

        //TAMPILKAN TOTAL
            echo ' <div class="pull-right">
            <div class=" for-notification" style="margin-top: 50px;">
                            <button class="btn btn-secondary" style="size: 50px" type="button" id="notification" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="count">'.number_format($total_quantity,0,"",".").'</span>
                            </button>
               </div>
            </div>';
        // LINK empty cart - YANG MANA LINK KE HALAMAN INI JUGA, TAPI DENGAN action = empty.
        // SERTA javascript KETIKA onlick event MENANYAKAN user UNTUK KONFIRMASI



}
else
{  // JIKA KERANJANG KOSONG -> TAMPILKAN PESAN INI

    	// format tampilan menggunakan HTML table
    //TAMPILKAN TOTAL

            echo ' <div class="pull-right">
            <div class=" for-notification" style="margin-top: 50px;">
                            <button class="btn btn-secondary" style="size: 50px" type="button" id="notification" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="count">'.number_format($total_quantity,0,"",".").'</span>
                            </button>
           </div>
      </div>';
}
?>
</a>