<?php
	//check login
	include("admin_index.php");
    include('connection.php');
    
    // $con=new mysqli("localhost","hrmshtge_Root","*eLfG9nR-MiU","hrmshtge_hrmstool");
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE salary_detail set id='" . $_POST['id'] . "',bank_name ='" . $_POST['bank_name'] . "',
    bank_ac='" . $_POST['bank_ac'] . "' 
     ,pan='" . $_POST['pan'] . "',basic='" . $_POST['basic'] . "',hra='" . $_POST['hra'] . "'
     ,telephone='" . $_POST['telephone'] . "'
     ,bonus='" . $_POST['bonus'] . "',lta='" . $_POST['lta'] . "'
     ,incometax='" . $_POST['incometax'] . "'
     ,pf='" . $_POST['pf'] . "',proftax='" . $_POST['proftax'] . "',total='" . $_POST['total'] . "',Employee_ID='" . $_POST['Employee_ID'] . "'
     ,username='" . $_POST['username'] . "'
     ,OfficialEmail='" . $_POST['OfficialEmail'] . "',Reporting_Manager='" . $_POST['Reporting_Manager'] . "'
     
     WHERE id='" . $_POST['id'] . "'");
     
    
        echo '<script type="text/javascript"> alert("Data Updated  Successfully!")
        document.location.href="salary_view.php";
        
        </script>';
    
    }

    $result = mysqli_query($conn,"SELECT * FROM salary_detail WHERE Employee_ID='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);  
?>
<style>
    .required-field::before {
        content: "*";
        color: red;
        float: right;
    }
</style>
<div class="pcoded-content">
    <!-- <div class="pcoded-inner-content">
        <div class="main-body"> -->
            <div class="page-wrapper">
                <div class="page-body" style="margin-top:-52%;">
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <form method="POST" action="">
                                       
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2 class="sub-title">Add Salary Details</h2>
                                               
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label class="required-field">User Name</label>
                                                        <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" readonly>
                                                        <input type="hidden" class="form-control" name="Reporting_Manager" value="<?php echo $row['Reporting_Manager'];?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label class="required-field">OfficialEmail</label>
                                                        <input type="email" class="form-control" name="OfficialEmail" value="<?php echo $row['OfficialEmail'];?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label for="Login_File">Basic</label><br>
                                                        <input type="text" class="form-control" name="basic" id="Text1" value="<?php echo $row['basic'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label class="required-field">HRA</label>
                                                        <input type="text" class="form-control" name="hra" id="Text2" value="<?php echo $row['hra'];?>" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Telephone</label>
                                                        <input type="text" class="form-control" name="telephone" id="Text3" value="<?php echo $row['telephone'];?>" required>
                                                    </div>
                                                   
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-8">

<label>Bonus

</label>
<input type="text" class="form-control" name="bonus" id="Text4" value="<?php echo $row['bonus'];?>">
</div>
                                                   
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label for="Login_File">LTA</label><br>
                                                        <input type="text" class="form-control" name="lta" id="Text5" value="<?php echo $row['lta'];?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-8">

<label>Total

</label>
<input type="text" class="form-control" name="total" id="txtresult" onclick="add_number();"readonly>
</div>
                                                </div>

                                            </div>
                                            <div class="col-sm-6 mobile-inputs">
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <br>
                                                        <br>
                                                        <label for="Login_File">Employee ID</label><br>
                                                        <input type="text" class="form-control" name="Employee_ID" value="<?php echo $row['Employee_ID'];?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label for="Login_File">Bank Name</label><br>
                                                        <input type="text" class="form-control" name="bank_name" value="<?php echo $row['bank_name'];?>"  required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-sm-8">
                                                        <label class="required-field">Bank Accno</label>
                                                        <input type="text" class="form-control" name="bank_ac" value="<?php echo $row['bank_ac'];?>"  required>
                                                    </div>
                                                    </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label class="required-field">PAN</label>
                                                        <input type="text" class="form-control" name="pan" value="<?php echo $row['pan'];?>"  required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label class="required-field">incometax</label>
                                                        <input type="text" class="form-control" name="incometax" value="<?php echo $row['incometax'];?>"  required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <label for="Login_File">PF</label><br>
                                                        <input type="text" class="form-control" name="pf" value="<?php echo $row['pf'];?>"  required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">

                                                        <label>proftax

                                                        </label>
                                                        <input type="text" class="form-control" name="proftax" value="<?php echo $row['proftax'];?>" >
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="id"  value="<?php echo $row['id']; ?>" >
                                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        <a href="Admin_userview.php" class="btn btn-primary">Back</a>
                                                    </div>
                                                </div>


                                            </div>
                                          
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
</div>
<script>
    function check1() {

        var mobile1 = document.getElementById('mobile1');


        var message = document.getElementById('message1');

        var goodColor = "#0C6 ";
        var badColor = "#FF9B37 ";

        if (mobile1.value.length != 10) {

            mobile1.style.backgroundColor = badColor;
            message1.style.color = badColor;
            message1.innerHTML = "required 10 digits "
        }
    }
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;


    document.getElementById('theDate').value = today;
</script>
<script>
    function add_number() {

var first_number = parseInt(document.getElementById("Text1").value);
var second_number = parseInt(document.getElementById("Text2").value);
var Thrid_number = parseInt(document.getElementById("Text3").value);
var Fourth_number = parseInt(document.getElementById("Text4").value);
var Fifth_number = parseInt(document.getElementById("Text5").value);
var result = first_number + second_number + Thrid_number + Fourth_number+Fifth_number;

document.getElementById("txtresult").value = result;

    }
    </script>


