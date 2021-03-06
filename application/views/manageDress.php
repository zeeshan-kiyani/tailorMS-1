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
                                        <div class="card-header">Dress Details</div>
                                        <div class="card-body">
                                            <p class="card-title"></p>
                                            <table class="table table-hover" id="dataTables-example" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Tag No</th>
                                                        <th>Chest</th>
                                                        <th>Waist</th>
                                                        <th>Hip</th>
                                                        <th>Instream</th>
                                                        <th>sleeve</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Contact</th>
                                                        <!-- <th>Edit</th> -->
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                     $i=1;
                                                    foreach($dress as $row)
                                                    {
                                                        echo "<tr>";
                                                        echo "<td>".$i."</td>";
                                                        echo "<td>".$row->tag_no."</td>";
                                                        echo "<td>".$row->chest."</td>";
                                                        echo "<td>".$row->waist."</td>";
                                                        echo "<td>".$row->hip."</td>";
                                                        echo "<td>".$row->insteam."</td>";
                                                        echo "<td>".$row->sleeve."</td>";
                                                        echo "<td>".$row->name."</td>";
                                                        echo "<td>".$row->contact."</td>";
                                                        // echo " <td class='text-right'>
                                                        //         <a  data-toggle='modal' data-target='#tailorEditModal' class='btn btn-outline-info btn-rounded'><i class='fas fa-pen'></i></a>
                                                        //     </td>";
                                                        echo " <td class='text-center'>
                                                            <a  data-toggle='modal' data-target='#dressDeleteModal".$row->id."'  class='btn btn-outline-danger btn-rounded'><i class='fas fa-trash'></i></a>
                                                            <div id='dressDeleteModal".$row->id."' class='modal fade' role='dialog'>
                                                                <div class='modal-dialog'>
                                                                    <!-- Modal content-->
                                                                    <div class='modal-content'>
                                                                    <div class='modal-header'>
                                                                        <h4 class='modal-title'>Delete Dress</h4>
                                                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                                    </div>
                                                                    <div class='modal-body block-modal-body' style='text-align: justify'>
                                                                        <p>Are You sure your want to delete this dress?</p>
                                                                    </div>
                                                                    <div class='modal-footer'>
                                                                        <a type='button' href='".base_url()."index.php/dress/deleteDress?id=".$row->id."' class='btn btn-danger'>Delete</a>
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
                                                        <h4 class="modal-title">Modify Dress</h4>

                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="needs-validation" method="post" novalidate="" accept-charset="utf-8">
                                                        <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="customer">Select Customer</label>
                                                            <select name="customer_id" class="form-control" required="">
                                                                <option value="" selected="true" disabled="disabled">Choose...</option>
                                                                <?php
                                                                foreach($customer as $row){
                                                                    echo "<option value=".$row->id.">".$row->name."</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="tag_no">Tag No</label>
                                                                <input type="text" class="form-control" name="tag_no" placeholder="Tag No" required="">
                                                        </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="chest">Chest</label>
                                                                <input type="text" class="form-control" name="chest" placeholder="Chest" required="">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="waist">Waist</label>
                                                                <input type="text" class="form-control" name="waist" placeholder="Waist" required="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                                <label for="hip">Hip</label>
                                                                <input type="text" class="form-control" name="hip" placeholder="Hip" required="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="sleeve">Sleeve</label>
                                                            <input type="text" class="form-control" name="sleeve" placeholder="Sleeve" required="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="insteam">Instream</label>
                                                            <input type="text" class="form-control" name="insteam" placeholder="Instream" required="">
                                                        </div>
                                                        <!-- date time here -->
                                                        <!-- <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" data-date-end-date="0d">

                                                        </div> -->
                                                        
                                                        </div>
                                                        <!--Hidden field for type -->
                                                        <!-- <input type="submit" name="save" class="btn btn-primary"/> -->
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