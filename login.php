<?php
    
    require_once "include/process_login.php";

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wiseowl.dharansh.in/default/page-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 23:09:37 GMT -->
<head>
    <script src="cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.html">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login || T-App</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/img/site-bg.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">
                <div class="navbar-header text-center mt-2 mb-4">
                    <a href="index-2.html">
                        <img alt="" src="assets/img/logo-light.png">
                    </a>
                </div>
                <!-- Error box -->

                <?php

                    if ($login->error == 1){

                ?>

                <div class="alert alert-info border-info" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <p><strong>An Error Occured:</strong>
                    </p>
                    <ul class="mr-t-10"><?php echo $login->error_list($login->error_list);?></ul>
                </div>

                <?php } ?>
                <!-- /.navbar-header -->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="form-group">
                        <label for="example-email">Email</label>
                        <input name="email" type="email" placeholder="johndoe@site.com" class="form-control form-control-line" id="example-email" value="
                        <?php 
                            if (isset($_COOKIE['user_id'])){
                            echo $_COOKIE['user_id'];
                        } else{$login->returnInput('email');} ?>">
                    </div>
                    <div class="form-group">
                        <label for="example-password">Password</label>
                        <input name="password" type="password" placeholder="password" id="example-password" class="form-control form-control-line" >
                    </div>
                    <div class="form-group">
                        <input class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit" name="login" value="login">
                    </div>
                    <div class="form-group no-gutters mb-0">
                        <div class="col-md-12 d-flex">
                            <div class="checkbox checkbox-primary mr-auto mr-0-rtl ml-auto-rtl">
                                <label class="d-flex">
                                    <input type="checkbox" name="remember"> <span class="label-text">Remember me</span>
                                </label>
                            </div><a href="javascript:void(0)" id="to-recover" class="my-auto pb-2 text-right"><i class="material-icons mr-2 fs-18">lock</i> Forgot Password?</a>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.form-group -->
                </form>
                <!-- /.form-material -->
                <hr>
                <div class="row btn-list">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-facebook ripple" data-toggle="tooltip" data-placement="top" title="Login with Facebook"><i class="social-icons list-icon">facebook</i> facebook</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-googleplus ripple" data-toggle="tooltip" data-placement="top" title="Login with Google"><i class="social-icons list-icon">googleplus</i> google</button>
                    </div>
                </div>
                <!-- /.btn-list -->
                <footer class="col-sm-12 text-center">
                    <hr>
                    <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </p>
                </footer>
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.d-flex -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/material-design.js"></script>
</body>

</html>