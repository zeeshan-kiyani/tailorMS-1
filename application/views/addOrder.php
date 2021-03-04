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
    <link href="<?php echo base_url() ?>assets/vendor/airdatepicker/dist/css/datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/mdtimepicker/mdtimepicker.min.css" rel="stylesheet">
    <style>
        /* inline style for mdtimepicker demo */
        .mdtp__wrapper.inline {display: block !important;position: relative;box-shadow: none;border: 1px solid #E0E0E0;max-width: 300px;margin: 0 !important;padding: 0 !important;transform: inherit;left: 0;top: 0;}
        .mdtp__wrapper.inline .mdtp__time_holder {width: auto;}
    </style>
</head>
<body>
    <div class="wrapper">
    <nav id="sidebar" class="">
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="<?php echo base_url() ?>index.php/dashboard/dashboardStats"><i class="fas fa-chalkboard-teacher"></i> Dashboard</a>
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
                </li>
            </ul>
        </nav>
        <div id="body" class="">
            <div class="content">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                       <div class="card">
                                <div class="card-header">Book Order</div>
                                <div class="card-body">
                                    <!-- <h5 class="card-title">Example form with inline field validations</h5> -->
                                    <form class="needs-validation" method="post" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="dress">Select Dress</label>
                                                <select name="dress" class="form-control" required="">
                                                    <option value="" selected="true" disabled="disabled">Choose...</option>
                                                    <?php
                                                    foreach($dress as $row){
                                                        echo "<option value=".$row->id.">".$row->tag_no."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="customer">Select Customer</label>
                                                <select name="customer" class="form-control" required="">
                                                    <option value="" selected="true" disabled="disabled">Choose...</option>
                                                    <?php
                                                    foreach($customer as $row){
                                                        echo "<option value=".$row->id.">".$row->name."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="tailor">Select Tailor</label>
                                                <select name="tailor" class="form-control" required="">
                                                    <option value="" selected="">Choose...</option>
                                                    <?php
                                                    foreach($tailor as $row){
                                                        echo "<option value=".$row->id.">".$row->name."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        <div class="form-group col-md-6">
                                                <label for="date">Return Date</label>
                                                <input type="text"  name="date" class="form-control datepicker-here" data-language="en" aria-describedby="datepicker" placeholder="Date picker">
                                                <!-- <input type='text' class='datepicker-here'  data-language='en' /> -->
                                                <!-- <input type="text" class="form-control" name="date" placeholder="Name" required=""> -->
                                        </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cost">Cost</label>
                                            <input type="cost" class="form-control" name="cost" placeholder="" required="">
                                        </div>
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
    <script src="<?php echo base_url() ?>assets/vendor/airdatepicker/dist/js/datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/airdatepicker/dist/js/i18n/datepicker.en.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/mdtimepicker/mdtimepicker.min.js"></script>
    <script type="text/javascript">
    // Initiate time picker
    mdtimepicker('.timepicker', { format: 'h:mm tt', hourPadding: 'true' });
    </script>
</body>
</html>