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
    <div class="wrapper">
    <nav id="sidebar" class="">
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="<?php echo base_url() ?>index.php/dashboard"><i class="fas fa-chalkboard-teacher"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#uielementsmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-users"></i> Customer Management</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu1">
                        <li>
                            <a href="<?php echo base_url()?>index.php/customer/addCustomer"><i class="fas fa-angle-right"></i> Add Customer</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/customer/viewCustomer"><i class="fas fa-angle-right"></i>Manage Customer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#uielementsmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-users-cog"></i> Tailor Management</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu2">
                        <li>
                            <a href="<?php echo base_url()?>index.php/dashboard/addTailor"><i class="fas fa-angle-right"></i> Add Tailor</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/dashboard/viewTailor"><i class="fas fa-angle-right"></i>Manage Tailor</a>
                        </li>
                    </ul>
                </li><li>
                    <a href="#uielementsmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-tshirt"></i> Dress Management</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu3">
                        <li>
                            <a href="<?php echo base_url()?>index.php/dress/addDress"><i class="fas fa-angle-right"></i> Add Dress</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/dress/viewDress"><i class="fas fa-angle-right"></i>Manage Dress</a>
                        </li>
                    </ul>
                </li><li>
                    <a href="#uielementsmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-cart-plus"></i> Order Management</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu4">
                        <li>
                            <a href="<?php echo base_url()?>index.php/order/addOrder"><i class="fas fa-angle-right"></i> Add Order</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/order/viewOrder"><i class="fas fa-angle-right"></i>Manage Order</a>
                        </li>
                    </ul>
                </li><li>
                    <a href="#uielementsmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-comments"></i> Customer Review Analysis</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu5">
                        <li>
                            <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> Add Customer</a>
                        </li>
                        <li>
                            <a href="ui-badges.html"><i class="fas fa-angle-right"></i>Manage Customer</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="body" class="">
            <div class="content">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                       <div class="card">
                                <div class="card-header">Add Customer</div>
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Example form with inline field validations</h5> -->
                                    <form class="needs-validation" method="post" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                <small class="form-text text-muted">Enter a valid email address.</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                                <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers only.</small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="1234 Main St, Unit, Building, or Floor" required="">
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Contact</label>
                                            <input type="email" class="form-control" name="contact" placeholder="" required="">
                                            <small class="form-text text-muted">Enter a valid contact format(03xx-xxxxxxx)</small>
                                        </div>
                                        
                                        </div>
                                        <!--Hidden field for type -->
                                        <div class="form-group col-md-6">
                                                <input type="hidden" class="form-control" name="type"  value="2" />
                                        </div>
                                      
                                        <input type="submit" name="save" class="btn btn-primary"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>ssets/vendor/chartsjs/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard-charts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>
</html>