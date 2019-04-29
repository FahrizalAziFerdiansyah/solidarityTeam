<?php
error_reporting(0);
session_start();
if(empty($_SESSION['username'])){
	echo"<script>alert('anda wajib login terlebih dahulu')
	window.location.href='login.php'</script>";
}
	?>
<head>
	<title>Tambah siswa</title>
</head>
<body>
 <section id="main-content">
          <section class="wrapper">
            <!-- row -->

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                     <form action="tambah_jurusan.php" method="post" class="rule">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Tambah Jurusan</h4>
                            <hr>
                              <thead>
                                <tr>
                                  <td>
                                    <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <button name="ok" class="btn btn-success"><i class="fa fa-paper-plane"></i></button>
                                  </td>
                                </tr>
     

                              </tbody>
                          </table>
                          </form>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section>
  
    

    <
<br>
</body>
