<?php
    
    require_once "include/process_signup.php";

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wiseowl.dharansh.in/default/page-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 23:09:38 GMT -->
<head>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.html">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(assets/img/site-bg.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="col-10 ml-sm-auto col-sm-8 col-md-4 ml-md-auto login-center mx-auto">
            <div class="navbar-header text-center mt-2 mb-4">
                <a href="index-2.html">
                    <img alt="" src="assets/img/logo-light.png">
                </a>
            </div>
            <!-- /.navbar-header -->
            <h5><a href="javascript:void(0);">Sign Up</a></h5>
            <p>Signing up is easy. It only takes a few steps and you'll be up and running in no time.</p>


                <!-- Error box -->

                <?php

                    if ($signup->error == 1){

                ?>

                <div class="alert alert-info border-info" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span>
                    </button>
                    <p><strong>An Error Occured:</strong>
                    </p>
                    <ul class="mr-t-10"><?php echo $signup->error_list($signup->error_list);?></ul>
                </div>

                <?php } ?>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" required="" placeholder="Name" name="fname" required value="<?php $signup->returnInput('fname');?>">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" type="text" required="" placeholder="Name" name="lname" required value="<?php $signup->returnInput('lname');?>">
                </div>
                <div class="form-group">
                    <label for="selectpicker1" class="form-control-label">Account Type</label>
                    <select id="selectpicker1" class="form-control selectpicker" name="role">
                        <option value="tailor">Tailor</option>
                        <option value="client">Client</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" required="" placeholder="Email" name="email" required value="<?php $signup->returnInput('email');?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" required="" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" type="password" required="" placeholder="Confirm Password" name="confirm_password" required>
                </div>
                <div class="form-group no-gutters mb-3">
                    <div class="checkbox checkbox-primary">
                        <label>
                            <input type="checkbox" checked required name="agree"> <span class="label-text">I agree to all <a href="#">Terms &amp; Conditions</a></span>
                        </label>
                    </div>
                    <!-- /.checkbox -->
                </div>
                <!-- /.form-group -->
                <div class="form-group text-center no-gutters mb-4">
                    <input class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit" value="Sign Up" name="signup">
                </div>
                <hr class="mb-4">
                <div class="row btn-list">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-facebook ripple" data-toggle="tooltip" data-placement="top" title="Login with Facebook"><i class="social-icons list-icon">facebook</i> facebook</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-googleplus ripple" data-toggle="tooltip" data-placement="top" title="Login with Google"><i class="social-icons list-icon">googleplus</i> google</button>
                    </div>
                </div>
                <!-- /.btn-list -->
            </form>
            <!-- /.form-horzontal -->
            <footer class="col-sm-12 text-center">
                <hr>
                <p>Already have an account? <a href="page-login.html" class="text-primary m-l-5"><b>Log In</b></a>
                </p>
            </footer>
        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from wiseowl.dharansh.in/default/page-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 May 2018 23:09:38 GMT -->
</html>