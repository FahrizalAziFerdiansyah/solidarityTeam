<table border="1">
 <tr>
  <th>No</th>
  <th>ID Film</th>
  <th>Nama Film</th>
  <th>Tempat</th>
 </tr>

<?php  
 include 'koneksi.php';
 $no_urut = 0;
 $search = $_POST['search'];
 $query = "SELECT * FROM jasaweb WHERE nama_perusahaan LIKE '%$search%'";
 $result = mysqli_query($mysqli,$query);
 while($data = mysqli_fetch_array($result)) {
  $no_urut++;
  echo "<tr>
     <td>$no_urut</td>
     <td>".$data['id_perusahaan']."</td>
     <td>".$data['nama_perusahaan']."</td>
     <td>".$data['kategori']."</td>
  <tr>";
 }
?>
</table>