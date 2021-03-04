<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.0
* Author: Alexis Luna
* Copyright 2020 Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | TMS</title>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper login-background">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-12">
                        <h3>Tailor Management System</h3>
                    </div>
                    <h6 class="mb-4 text-muted">Login to your account</h6>
                    <form  method="post">
                        <div class="form-group text-left">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                        </div>
                        <div class="form-group text-left">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" >
                        </div>
                        <div class="form-group text-left">
                            <label><?php echo @$error; ?></label>
                        </div>
                        <input type="submit" class='btn btn-primary' name="login" value="Login"/></td>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>