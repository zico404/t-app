<?php

    require "include/classes/classVerifyEmail.php";

    $user_id = $_GET["u"];

    $verify = new verify($user_id);

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wiseowl.dharansh.in/default/page-email-confirm.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 23:09:38 GMT -->
<head>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.html">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Confirm Email</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="../../cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/img/site-bg.jpg)">
    <div id="wrapper" class="wrapper">
        <div class="row container-min-full-height align-items-center">
            <div class="col-10 ml-sm-auto col-sm-6 col-md-4 ml-md-auto login-center login-center-mini mx-auto">
                <div class="navbar-header text-center mt-2 mb-4">
                    <a href="index-2.html">
                        <img alt="" src="assets/img/logo-light.png">
                    </a>
                </div>
                <!-- /.navbar-header -->
                <div class="text-center mr-b-20">
                    <img src="assets/demo/users/user7.jpg" class="rounded-circle img-thumbnail thumb-lg" alt="">
                </div>
                <p class="text-center text-muted">A email has been send to youremail@domain.com. Please check for an email from company and click on the included link to reset your password.</p><a href="index-2.html" class="btn btn-block btn-lg btn-primary mr-tb-30 text-uppercase fs-12 fw-600">Back to Home</a>
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrapper -->
    <!-- Scripts -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>


<!-- Mirrored from wiseowl.dharansh.in/default/page-email-confirm.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 23:09:38 GMT -->
</html>