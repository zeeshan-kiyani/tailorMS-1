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
    <link href="<?php echo base_url() ?>assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/master.css" rel="stylesheet">  

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
                <div class="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                        <div class="card-header">Order Details</div>
                                        <div class="card-body">
                                            <p class="card-title"></p>
                                            <table class="table table-hover" id="dataTables-example" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <!-- <th>Customer Name</th> -->
                                                        <th>Assigned to</th>
                                                        <th>Cost</th>
                                                        <th>Return Date</th>
                                                        <th>Contact</th>
                                                        <th>Suit Tag</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i=1;
                                                    foreach($orderData as $row)
                                                    {
                                                        if($row->status == 1){ $status = "Pending";}
                                                        else{ $status = "Completed"; }
                                                        echo "<tr>";
                                                        echo "<td>".$i."</td>";
                                                        // echo "<td>".$row->name."</td>";
                                                        echo "<td>".$row->name."</td>";
                                                        echo "<td>".$row->cost."</td>";
                                                        echo "<td>".$row->date."</td>";
                                                        echo "<td>".$row->contact."</td>";
                                                        echo "<td>".$row->tag_no."</td>";
                                                        echo "<td>".$status."</td>";
                                                        echo " <td class='text-right'>
                                                                <a  data-toggle='modal' data-target='#orderEditModal".$row->id."' class='btn btn-outline-info btn-rounded'><i class='fas fa-pen'></i></a>
                                                                <div id='orderEditModal".$row->id."' class='modal fade' role='dialog'>
                                                                <div class='modal-dialog'>
                                                                    <!-- Modal content-->
                                                                    <div class='modal-content'>
                                                                    <div class='modal-header'>
                                                                        <h4 class='modal-title'>Mark order complete</h4>
                                                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                                    </div>
                                                                    <div class='modal-body block-modal-body' style='text-align: justify'>
                                                                        <p>Mark this order as complete?</p>
                                                                    </div>
                                                                    <div class='modal-footer'>
                                                                        <a type='button' href='".base_url()."index.php/order/completeOrder/?id=".$row->id."' class='btn btn-success'  >Complete</a>
                                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                                    </div>
                                                                    <div></div>
                                                                    </div>
            
                                                                </div>
                                                                <a  data-toggle='modal' data-target='#tailorDeleteModal'  class='btn btn-outline-danger btn-rounded'><i class='fas fa-trash'></i></a>
                                                                <div id='tailorDeleteModal' class='modal fade' role='dialog'>
                                                                    <div class='modal-dialog'>
                                                                        <!-- Modal content-->
                                                                        <div class='modal-content'>
                                                                        <div class='modal-header'>
                                                                            <h4 class='modal-title'>Block Tailor</h4>
                                                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                                        </div>
                                                                        <div class='modal-body block-modal-body' style='text-align: justify'>
                                                                            <p>Are You sure your want to block this tailor?</p>
                                                                        </div>
                                                                        <div class='modal-footer'>
                                                                            <a type='button' href='".base_url()."index.php/dashboard/blockTailor?id=".$row->id."' class='btn btn-danger' data-dismiss='modal' >Block</a>
                                                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                                        </div>
                                                                        </div>
                
                                                                    </div>
                                                                </div>
                                                               
                                                                </div>
                                                            </td>";
                                                     
                                                        echo "</tr>";
                                                        $i++;
                                                        
                                                    }
                                                    
                                                    ?>
                                                </tbody>
                                                <!-- Modal -->
                                    
                                 
                                                <!--Modal close here -->
                                            </table>
                                            <small><?php echo @$order_update_msg ?></small>
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
    <script src="<?php echo base_url() ?>assets/vendor/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/initiate-datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>
</html>