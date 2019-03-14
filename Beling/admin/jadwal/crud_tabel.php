<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Admin Beling</title>
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            
        <!-- css dibawah ini hanya untuk demo-->
        <style>
            body {
                padding-top: 70px;
            }
            footer {
                padding: 30px 0;
            }
        </style>
        
    </head>
    
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../home.php">BELING</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../home.php">Home</a></li>
                        <li><a href="crud_tabel.php">Agenda</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
        
            <div class="container">
                
                <div class="row row-offcanvas row-offcanvas-right">
                    
                <div class="col-xs-12 col-sm-8">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div>
                        <p>
                            <a href="crud_add.php" class="btn btn-primary">Tambah</a>                            
                        </p>
                        <table class="table table-bordered" style="margin-bottom:0px">
                            <tr>
                                <th>No</th>
                                <th>Tanggal Perbaiki</th>
                                <th>Jenis</th>
                                <th>Deskripsi</th>
                                <th>Nama Pelanggan</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            include '../config.php';
                            include 'pagination.php';
                            
                            $query = "SELECT * FROM jadwalku ORDER BY username DESC";
                            $result = mysqli_query($mysqli, $query);
                            
                            //pagination config start
                            $rpp = 5; // jumlah record per halaman
                            $reload = "crud_tabel.php?pagination=true";
                            $page = intval(isset($_GET["page"])?$_GET["page"]:0);
                            if($page<=0) $page = 1;  
                            $tcount = mysqli_num_rows($result);
                            $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
                            $count = 0;
                            $i = ($page-1)*$rpp;
                            $no_urut = ($page-1)*$rpp;
                            //pagination config end

                            while(($count<$rpp) && ($i<$tcount)) {
                                mysqli_data_seek($result,$i);
                                $row = mysqli_fetch_array($result);
                                ?>
                            <tr>
                                <td><?php echo ++$no_urut ?></td>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td>
                                    <a href="crud_edit.php?id=<?php echo $row['jadwal_id'] ?>">Edit</a> | 
                                    <a href="crud_delete.php?id=<?php echo $row['jadwal_id'] ?>" onclick="javascript: return confirm('Delete ?')">Delete</a>
                                </td>
                            </tr>
                            <?php
                                    $i++; 
                                $count++;
                            }
                            ?>
                        </table>
                        <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                    </div>
                </div><!--/.col-xs-12.col-sm-9-->
                
                <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Daftar Pelanggan</a><br>
                            <?php
                            $kondisi="Lunas";
                            $query="SELECT * FROM trans_servis INNER JOIN user_servis ON user_servis.username= trans_servis.username WHERE trans_servis.kondisi='$kondisi'";
                            $rcat=mysqli_query($mysqli,$query);
                            while ($rowcat=mysqli_fetch_array($rcat)){
                                  echo ' <p><strong>'.$rowcat['username']. '</strong>&nbsp;'.$rowcat['tanggal'].'<br>' .$rowcat['pilihan'].'&nbsp;'. $rowcat['jumlah'].'</p><hr>';
                            }
                            echo'</td></tr>';
                            ?>
                         
                    </div>
                </div><!--/.sidebar-offcanvas-->
            </div><!--/row-->
            
            <hr>
            
            <footer>
                <p>&copy; 2016 Company, Inc.</p>
            </footer>
            
        </div><!--/.container-->
        
    </body>
</html>