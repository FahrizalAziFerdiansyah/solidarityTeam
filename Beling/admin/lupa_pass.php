<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <h1 style="color: white"><img align="content" src="img/intro-carousel/logo.png" style="margin-bottom: 5px">BELING</h1>
                    </a>
                </div>
                <div class="login-form">
                    <form action="update_pass.php" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username" placeholder="User Name">
                        </div>
                          <div class="form-group">
                                <label>No Hp</label>
                                <input type="number" class="form-control" name="no_hp" placeholder="Email">
                        </div>
                            <div class="form-group">
                                    <label>Passwordn Baru</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                                    <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                                    </div>
                                    <button type="submit" name="kirim" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button><hr>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="login.php"> Sign in</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
