
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Cari data peminjaman</title>
    <?php
				error_reporting(0);
				session_start();
				if(empty($_SESSION['username'])){
					echo"<script>alert('anda wajib login terlebih dahulu')
					window.location.href='login.php'</script>";
			}
		 
        include 'assets-admin/assets.php';
        include 'assets-admin/header-admin.php';
        include 'assets-admin/sidebar-admin.php';
        ?>
  </head>

  <body>
      <?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
  echo"<script>alert('anda wajib login terlebih dahulu')
  window.location.href='index.php'</script>";
}
  ?>
 <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <script type="text/javascript" language="JavaScript">
                        function konfirm(){
                          tanya = confirm("Anda yakin ingin menghapus ?");
                          if (tanya == true) return true;
                          else return false;
                        }
                        </script>
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Cari data peminjaman</h4>
                            <hr>
                              <thead>
                                <form action="" method="POST">
                                  <tr>
                                    <td>
                                      <input type="text" name="cari" class="form-control" placeholder="Cari data peminjaman berdasarkan nama barang & nama siswa">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      &nbsp;
                                         <button name="search" class="btn btn-success"><i class="fa fa-paper-plane"></i></button>
                                    </td>
                                  </tr>
                                </form>
                              </tbody>
                          </table>
                          </form>
                          <?php
                          if(isset($_POST['search']))
                          {
                          echo "<thead>
                          	<div class='table-responsive'>
                              <table  class='table table-striped table-advance table-hover'>
                                <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Nama Siswa</th>
                                <th>Guru Pengajar</th>
                                <th>Status</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Batas Pengembalian</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Keterangan</th>
                                <th>Nama Petugas</th>
                                <th colspan='3'>Aksi</th>
                                </tr>
                                </thead>";
                          
                               ?>
                              <script type="text/javascript" language="JavaScript">
                              function konfirm(){
                                tanya = confirm("Anda yakin ingin menghapus ?");
                                if (tanya == true) return true;
                                else return false;
                              }
                              </script>
                              <tbody>
                              <?php
                                  $cari = $_POST['cari'];
                                  include "koneksi.php";

                                  $result = mysql_query("SELECT * FROM peminjaman as p join barang as b on p.kode_barang=b.kode_barang join siswa as s on p.nis=s.nis join login as l on p.id_petugas=l.id_petugas join guru as g on p.id_guru=g.id_guru WHERE b.nama_barang like '%$cari%' or s.nama_siswa like '%$cari%'");
                                  $no = 1;
                                  while($data=mysql_fetch_array($result)){

                                    $tgl = explode (' ', $data['tgl_pinjam']);
                                    $date = $tgl[0];
                                    $jam = $tgl[1];
                                    $date = date_format(date_create($date), 'd-m-Y');

                                    $tgl_kembali = explode(' ', $data['tgl_kembali']);
                                    $tgl_kem = $tgl_kembali[0];
                                    $tgl_kem = strtotime($tgl_kem);

                                    date_default_timezone_set('Asia/Jakarta');
                                    $hari=date('Y-m-d');
                                    $har = strtotime($hari);

                                    $batas = date($data['bts_kembali']);
                                    $bat = strtotime($batas);

                                    if (empty($data['tgl_kembali']) && $hari > $batas) {
                                      /*$selisih = abs(strtotime($hari) - strtotime($batas));
                                      $years = floor($selisih / (365*60*60*24));
                                      $months = floor(($selisih - $years * 365*60*60*24) / (30*60*60*24));
                                      $days = floor(($selisih - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                      $denda = $days * 5000;*/
                                      mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                      //$ket = "Telat";
                                    }
                                    else if ($data['tgl_kembali'] == '' && $hari == $batas) {
                                      //$ket="Batas pengembalian";
                                      mysql_query("UPDATE peminjaman SET ket = 'Batas pengembalian' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                    }
                                    elseif ($data['tgl_kembali'] != '' && $hari <= $batas) {
                                      //$ket = "Tepat waktu";
                                      mysql_query("UPDATE peminjaman SET ket = 'Tepat waktu' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                    }
                                    elseif ($data['tgl_kembali'] != '' && $hari > $batas) {
                                      //$ket = "Telat";
                                      mysql_query("UPDATE peminjaman SET ket = 'Telat' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                    }
                                    elseif ($data['tgl_kembali'] == '' && $hari < $batas) {
                                      //$ket = "-";
                                      mysql_query("UPDATE peminjaman SET ket = '-' WHERE id_peminjaman = '$data[id_peminjaman]'");
                                    }
                                    echo "
                                      <tr>
                                      <td>$no</td>
                                      <td>$data[kode_barang]</td>
                                      <td>$data[nama_barang]</td>
                                      <td>$data[jumlah]</td>
                                      <td>$data[nama_siswa]</td>
                                      <td>$data[guru]</td>
                                      <td>$data[status]</td>
                                      <td>$date $jam</td>
                                      <td>$data[bts_kembali]</td>
                                      <td>$data[tgl_kembali]</td>
                                      <td>$data[ket]</td>
                                      <td>$data[nama_petugas]</td>";
                                      if ($data['tgl_kembali'] != '') {
                                      echo "<td style='width:50px'><button class='btn btn-warning'>Pengembalian</button></td>
                                      <td style='width:50px'><a href=edit_peminjaman.php?id_peminjaman=$data[id_peminjaman] class='btn btn-primary btn-block'>Edit</a></td>
                                        <td style='width:50px'><a onclick='return konfirm()' href=delete_peminjaman.php?id_peminjaman=$data[id_peminjaman] class='btn btn-danger btn-block'>Hapus</a></td>";
                                      }
                                      else {
                                      echo "  <td style='width:50px'><a href=pengembalian.php?id_peminjaman=$data[id_peminjaman] class='btn btn-warning btn-block'>Pengembalian</a></td>
                                        <td style='width:50px'><a href=edit_peminjaman.php?id_peminjaman=$data[id_peminjaman] class='btn btn-primary btn-block'>Edit</a></td>
                                        <td style='width:50px'><a onclick='return konfirm()' href=delete_peminjaman.php?id_peminjaman=$data[id_peminjaman] class='btn btn-danger btn-block'>Hapus</a></td>";
                                      }

                                    echo "</tr>";
                                    $no++;
                                  }
                                }
                                ?>
                                </tbody>
                          </table>
                  		</div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
  
    

    <
<br>
</body>

 </body>
      <?php 
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';?>
 
</html>
