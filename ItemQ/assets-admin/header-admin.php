<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>ItemQ</b></a>
            <!--logo end-->
            
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a onclick='return keluar()' class="logout glyphicon glyphicon-off" href="logout.php" title="Logout"></a></li>
                </ul>
                <ul class="nav pull-right top-menu">
                    <li><a onclick='return tutor()' class="logout glyphicon glyphicon-exclamation-sign" href="guide/" title="User Guide"></a></li>
                </ul>
            </div>
        </header>
      <!--header end-->
</body>
</html>
<script type="text/javascript" language="JavaScript">
function tutor()
{
tanya = confirm("(User Guide) ingin dilanjutkan ?");
if (tanya == true) return true;
else return false;
}
function keluar()
{
tanya = confirm("Apakah anda ingin keluar ?");
if (tanya == true) return true;
else return false;
}
</script>