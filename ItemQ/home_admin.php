<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Selamat Datang</title>
  </head>
  <body>

  <section id="container" >
      <?php 
        include 'assets-admin/assets.php';
        include 'assets-admin/header-admin.php';
        include 'assets-admin/sidebar-admin.php';
        include 'assets-admin/konten.php';
        include 'assets-admin/footer.php';
        include 'assets-admin/script.php';
      ?>
  </section>
<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Selamat Datang di ItemQ!',
            // (string | mandatory) the text inside the notification
            text: 'Jika Mempunyai Masalah dengan aplikasi kami, mohon hubungi kami dengan email berikut <a href="" target="_blank" style="color:#ffd777">itemq@gmail.com</a> atau kunjungi website kami <a href="http://itemq.com" target="_blank" style="color:#ffd777">ItemQ.com</a>'  ,
            // (string | optional) the image to display on the left
            
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>
  </body>
</html>
