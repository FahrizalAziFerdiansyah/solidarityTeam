<?php
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['level']);
  unset($_SESSION['id_petugas']);
  echo "<script>alert('Logout Sukses !')
        window.location='index.php'</script>
  ";
 ?>
