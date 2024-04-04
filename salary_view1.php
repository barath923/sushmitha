<?php
	//check login
	include("admin_index.php");
	 include('connection.php');
?>
<div class="pcoded-content">
    <!-- <div class="pcoded-inner-content"> -->

        <!-- Main-body start -->
        <!-- <div class="main-body"> --><br>

            <div class="page-body" style="margin-top:-52%;margin-right:0%;margin-left:0%;">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- HTML5 Export Buttons table start -->
                        <div class="card">
                            <div class="card-header table-card-header">
                                <h5>Employee Salary Details</h5>
                                <br>
                                <hr>
                                <!-- <a href="/admin_add_payslip" class="btn btn-primary">Add User</a> -->

                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                 
                                   
                                           

                                    <form method="GET">
                                        <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                            <thead>
                                              
                                                <tr>
                                                    
                                                    <th>Employee_ID</th>
                                                    <th>username</th>
                                                    <th>OfficialEmail</th>
                                                    <th>Bank Name</th>
                                                    <th>Bank Acc</th>
                                                    <th>HRA</th>
                                                    <th>Basic</th>
                                                    <th>Total</th>
                                                    <th>Action</th>

                                                </tr>
                                              
                                            </thead>
                                            <tbody>
                                            <?php
                                                                   
                                                                  
                                                                   $result = mysqli_query($conn,"SELECT * FROM salary_detail");
                   
                                                                   while ($row = mysqli_fetch_assoc($result)) {
                                                                       ?>  
                                                <tr>

                                                <td> <?php echo $row['Employee_ID']; ?></td>  
                                                    
                                                    <td> <?php echo $row['username']; ?></td>
                                                    
                                                    <td> <?php echo $row['OfficialEmail']; ?></td>
                                                   
                                                    <td> <?php echo $row['bank_name']; ?></td>
                                                   
                                                    <td> <?php echo $row['bank_ac']; ?></td>
                                                   
                                                    <td> <?php echo $row['hra']; ?></td>
                                                   
                                                    <td> <?php echo $row['basic']; ?></td>
                                               
                                                    <td> <?php echo $row['total']; ?></td>
                                                   
                                                    
                                                                                                 
                                                
                                                   

                                                    <td>
                                                        <!-- leadedit -->
                                                        <a href="salary_edit1.php?id=<?php echo $row['Employee_ID']; ?>" class="btn btn-sm btn-primary waves-effect waves-light"><i class="ti-pencil" style="font-size: 1.8em;"></i></a>
                                                     
                                                        <a href="salary_delete1.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ti-trash" style="font-size: 1.8em;"></i></a>

                                                       

                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?> 
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    
                                                <th>Employee_ID</th>
                                                    <th>username</th>
                                                    <th>OfficialEmail</th>
                                                    <th>Bank Name</th>
                                                    <th>Bank Acc</th>
                                                    <th>HRA</th>
                                                    <th>Basic</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- HTML5 Export Buttons end -->
<!-- Column Selectors table start -->
<!-- <script type="text/javascript" src="{% static 'bower_components/jquery/js/jquery.min.js"></script> -->

