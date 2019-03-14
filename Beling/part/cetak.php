<html>
<head>
    <title>NOTA PEMBELIAN SPARE PART</title>
</head>
<body>
    <?php 
    include 'db_conn.php';
    ?>
 
    <table border="1" style="width: 100%">
        <?php 
        $kode_order = $_GET['kode_order'];
        $no = 1;
        $sql = mysqli_query($conn,"select distinct * from daftar_order inner join pembeli on daftar_order.kode_order=pembeli.kode_order where daftar_order.kode_order='$kode_order'");
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            
            <td> Kode = <?php echo $data['kode_order']; ?><br>
                 Nama Pembeli = <?php echo $data['namalengkap']; ?><br>
                 Tanggal dan Jam Order = <?php echo $data['tanggal_order']; echo $data['jam_order'];  ?><br>
                 Alamat = <?php echo $data['alamat_pembeli']; ?><br>
                 Total bayar = <?php echo $data['total']; ?><br>


            </td>

        </tr>
        <?php 
        }
        ?>
    </table>
 
    <script>
        window.print();
    </script>
 
</body>
</html>