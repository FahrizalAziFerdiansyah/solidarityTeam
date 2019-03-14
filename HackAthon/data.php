<?php 
$title = "Daftar Penyedia Jasa Web";
include_once "header.php";
include_once "koneksi.php"; 
$data = mysqli_query($mysqli,"SELECT * FROM jasaweb");?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="30%">Nama Perusahaan</th>
                  <th width="10%">Kategori</th>
                  <th width="13%">Kota</th>
                  <th width="20%">Website</th>
                  <th width="27%">Aksi</th>
                </tr>
              </thead>
              <tbody>
            <?php $i=1; ?>
            <?php foreach ($data as $row):  ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_perusahaan"]; ?></td>
                <td><?= $row["kategori"]; ?></td>
                 <td><?= $row["kota"]; ?></td>
                <td><?=  $row["website"]; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="detail.php?id_perusahaan=<?=$row[id_perusahaan]; ?>" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
            <?php $i++;?>
            <?php endforeach;?>
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>