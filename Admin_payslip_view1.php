<?php
	//check login
	include("admin_index.php");
    include("connection.php");
?>
<div class="pcoded-content">
    <!-- <div class="pcoded-inner-content"> -->

        <!-- Main-body start -->
        <!-- <div class="main-body"> --><br>

            <div class="page-body" style="margin-top:-50%;margin-right:0%;margin-left:0%;">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- HTML5 Export Buttons table start -->
                        <div class="card">
                            <div class="card-header table-card-header">
                                <h5>Employee Payslip Details</h5>
                                <br>
                                <hr>
                                <!-- <a href="/admin_add_payslip" class="btn btn-primary">Add User</a> -->

                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                 
                                    <form method="GET" action="admin_payslip1.php">
                                        
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label>Name</label>     
                                            <?php
                                                     
                                                       $s=mysqli_query($conn,"select * from user");
                                                       ?>
                                                        <select style="color:black;height: 45px;" name="username" class="form-control" required>
                                                        <option disabled="disabled" value="" selected>-- Select User --  </option>
                                                      <?php
                                                             while($r=mysqli_fetch_array($s))
                                                             {
                                                                echo"<option value='".$r['username']."'>".$r['username']."</option>";
                                                                ?>                                                   
                                                                <!-- <option valuestyle="color:black;"><?php echo $r['username'];?>
                                                                 
                                                                </option> -->
                                                                
                                                                <?php
                                                             }
                                                             ?>
                                                            </select>
                                        </div>
                                    </div>
                                                <!-- <input type="submit" name="submit" value="Find" class="btn btn-primary" > -->
                                     <button     class="btn btn-primary" type="submit" name="submit">
                                    <i class="icofont icofont-job-search m-r-5"></i>Create Payslip</button>
                                    
                                   
                                     </form>  
                                      <br>         

                                    <form method="GET">
                                        <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                            <thead>
                                              
                                                <tr>
                                                    
                                                    <th>Emp.No</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Basic</th>
                                                    
                                                    <th>HRA</th>
                                                    <th>Special Allowance </th>
                                                    <th>Total</th>
                                                    <th>Deduction</th>
                                                    <th>Netpay</th>
                                                    <th>View</th>
                                                    <th>Action</th>

                                                </tr>
                                              
                                            </thead>
                                            <tbody>
                                            <?php
                                                                   
                                                                //    $con=new mysqli("localhost","hrmshtge_Root","*eLfG9nR-MiU","hrmshtge_hrmstool");
                                                                   $result = mysqli_query($conn,"SELECT * FROM payslip_new");
                   
                                                                   while ($row = mysqli_fetch_assoc($result)) {
                                                                       ?>  
                                                <tr>

                                                <td> <?php echo $row['Employee_ID']; ?></td>  
                                                    
                                                    <td> <?php echo $row['Name']; ?></td>
                                                    
                                                    <td> <?php echo $row['Date']; ?></td>
                                                   
                                                    <td> <?php echo $row['basic']; ?></td>
                                                   
                                                   
                                                   
                                                    <td> <?php echo $row['hra']; ?></td>
                                                   
                                                    <td> <?php echo $row['Special_Allowance']; ?></td>
                                               
                                                    <td> <?php echo $row['earning_total']; ?></td>
                                                   
                                                    <td> <?php echo $row['dection_total']; ?></td>
                                                   
                                                    <td> <?php echo $row['netpay']; ?></td>
                                                                                                 
                                                  
                                                    <td>
                                                        <!-- <a href="payslip.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ti-arrow-down" style="font-size: 0.8em;"></i></a> -->
                                                        <a href="payslip1.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning waves-effect waves-light"><i class="ti-eye" style="font-size: 0.8em;"></i></a>

                                                    </td>
                                                   

                                                    <td>
                                                        <!-- leadedit -->
                                                        <!-- <a href="/admin_offer_edit/{{ p.id }}" class="btn btn-sm btn-primary waves-effect waves-light"><i class="ti-pencil" style="font-size: 1.8em;"></i></a> -->
                                                     
                                                        <a href="delete_payslip.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ti-trash" style="font-size: 1.8em;"></i></a>

                                                       

                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?> 
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Emp.No</th>
                                                    <th>Date</th>
                                                    <th>Basic</th>
                                                   
                                                    <th>HRA</th>
                                                    <th>Special Allowance </th>
                                                    <th>Total</th>
                                                    <th>Deduction</th>
                                                    <th>Netpay</th>
                                                    <th>View</th>
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

