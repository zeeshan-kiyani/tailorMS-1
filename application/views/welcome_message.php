<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="<?php echo base_url() ?>assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/master.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">

</head>
<body>

<div class="">
        <div id="body" class="">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Access</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
         
        </div>
    </div>
	<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>ssets/vendor/chartsjs/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard-charts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>
</html>