<?php
  session_start();
  $nav = explode('/', $_SERVER['REQUEST_URI']);
  $nav = explode('?', $nav[count($nav) - 1])[0];
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!--sidebar start-->
      <?php
	  include"koneksi.php";
	  if($_SESSION['level']=='admin')
	  {
	  ?>
	  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/item.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Selamat Datang <?php echo $_SESSION['username']; ?> !</h5>
                    
                  <li class="mt">
                      <a class="<?php echo ($nav == 'home_admin.php' ? 'active' : '') ?>" href="home_admin.php">
                          <i class="glyphicon glyphicon-book"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_siswa.php' || $nav == 'add_siswa.php' ? 'active' : '') ?>">
                          <i class="fa fa-users"></i>
                          <span>Siswa</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="data_siswa.php">Data Siswa</a></li>
                          <li><a  href="add_siswa.php">Tambah Siswa</a></li>
                     </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_kelas.php' || $nav == 'add_kelas.php' ? 'active' : '') ?>">
                          <i class="fa fa-mortar-board "></i>
                          <span>Kelas</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_kelas.php">Tambah Kelas</a></li>
                          <li><a  href="data_kelas.php">Data Kelas</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_jurusan.php' || $nav == 'add_jurusan.php' ? 'active' : '') ?>">
                          <i class="fa fa-book"></i>
                          <span>Jurusan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_jurusan.php">Tambah Jurusan</a></li>
                          <li><a  href="data_jurusan.php">Data Jurusan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_guru.php' || $nav == 'add_guru.php' ? 'active' : '') ?>">
                          <i class="fa fa-user"></i>
                          <span>Guru</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_guru.php">Tambah Guru</a></li>
                          <li><a  href="data_guru.php">Data Guru</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_peminjaman.php' || $nav == 'add_peminjaman.php' ? 'active' : '') ?>">
                          <i class="fa fa-th"></i>
                          <span>Peminjaman</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_peminjaman.php">Tambah Peminjaman</a></li>
                          <li><a  href="data_peminjaman.php">Data Peminjaman</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'detail.php' || $nav == 'data_barang.php' || $nav == 'add_barang.php' ? 'active' : '') ?>">
                          <i class=" fa fa-list"></i>
                          <span>Barang</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_barang.php">Tambah Barang</a></li>
                          <li><a  href="data_barang.php">Data Barang</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'input_petugas.php' || $nav == 'tampil_hak_akses.php' ? 'active' : '') ?>">
                          <i class=" fa fa-lock"></i>
                          <span>Hak Akses</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="input_petugas.php">Tambah Petugas</a></li>
                          <li><a  href="tampil_hak_akses.php">Data Petugas</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'cari_peminjaman.php' || $nav == 'cari_barang.php' ? 'active' : '') ?>">
                          <i class=" fa fa-search"></i>
                          <span>Cari</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="cari_peminjaman.php">Cari Peminjam</a></li>
                          <li><a  href="cari_barang.php">Cari Barang</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  <?php
	  } 
	elseif($_SESSION['level'] == 'petugas')
	  {
	  ?>
	  	  <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/item.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Selamat Datang <?php echo $_SESSION['username']; ?> !</h5>
                    
                  <li class="mt">
                      <a class="<?php echo ($nav == 'home_admin.php' ? 'active' : '') ?>" href="home_admin.php">
                          <i class="glyphicon glyphicon-book"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_siswa.php' || $nav == 'add_siswa.php' ? 'active' : '') ?>">
                          <i class="fa fa-users"></i>
                          <span>Siswa</span>
                      </a>
                      <ul class="sub">
                          
                          <li><a  href="data_siswa.php">Data Siswa</a></li>
                     </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_kelas.php' || $nav == 'add_kelas.php' ? 'active' : '') ?>">
                          <i class="fa fa-mortar-board "></i>
                          <span>Kelas</span>
                      </a>
                      <ul class="sub">
                          
                          <li><a  href="data_kelas.php">Data Kelas</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_jurusan.php' || $nav == 'add_jurusan.php' ? 'active' : '') ?>">
                          <i class="fa fa-book"></i>
                          <span>Jurusan</span>
                      </a>
                      <ul class="sub">
                          
                          <li><a  href="data_jurusan.php">Data Jurusan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_guru.php' || $nav == 'add_guru.php' ? 'active' : '') ?>">
                          <i class="fa fa-user"></i>
                          <span>Guru</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="data_guru.php">Data Guru</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_peminjaman.php' || $nav == 'add_peminjaman.php' ? 'active' : '') ?>">
                          <i class="fa fa-th"></i>
                          <span>Peminjaman</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_peminjaman.php">Tambah Peminjaman</a></li>
                          <li><a  href="data_peminjaman.php">Data Peminjaman</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo ($nav == 'data_barang.php' || $nav == 'add_barang.php' ? 'active' : '') ?>">
                          <i class=" fa fa-list"></i>
                          <span>Barang</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_barang.php">Tambah Barang</a></li>
                          <li><a  href="data_barang.php">Data Barang</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-search"></i>
                          <span>Cari</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="cari_peminjaman.php">Cari Peminjam</a></li>
                          <li><a  href="cari_barang.php">Cari Barang</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  <?php } ?>
      <!--sidebar end-->
      
</body>
</html>
