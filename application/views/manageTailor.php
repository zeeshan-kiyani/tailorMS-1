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
                <div class="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                        <div class="card-header">Tailor Details</div>
                                        <div class="card-body">
                                            <p class="card-title"></p>
                                            <table class="table table-hover" id="dataTables-example" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Contact</th>
                                                        <th>Address</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i=1;
                                                    foreach($data as $row)
                                                    {
                                                        echo "<tr>";
                                                        echo "<td>".$i."</td>";
                                                        echo "<td>".$row->name."</td>";
                                                        echo "<td>".$row->email."</td>";
                                                        echo "<td>".$row->password."</td>";
                                                        echo "<td>".$row->contact."</td>";
                                                        echo "<td>".$row->address."</td>";
                                                        echo " <td class='text-right'>
                                                                <a  data-toggle='modal' data-target='#tailorEditModal' class='btn btn-outline-info btn-rounded'><i class='fas fa-pen'></i></a>
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
                                                            </td>";
                                                     
                                                        echo "</tr>";
                                                        $i++;
                                                        
                                                    }
                                                    
                                                    ?>
                                                </tbody>
                                                <!-- Modal -->
                                                <div id="tailorEditModal" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Modify Tailor</h4>

                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="needs-validation" method="post" novalidate="" accept-charset="utf-8">
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="password">Password</label>
                                                                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
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
                                                            </div>
                                                            
                                                            </div>
                                                            <!--Hidden field for type -->
                                                            <div class="form-group col-md-6">
                                                                    <input type="hidden" class="form-control" name="type"  value="1" />
                                                            </div>
                                                        
                                                        </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="submit" name="save" class="btn btn-primary"/>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>

                                                    </div>
                                                </div>
                                 
                                                <!--Modal close here -->
                                            </table>
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