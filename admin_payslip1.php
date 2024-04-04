<?php
	//check login
	include("admin_index.php");
    include('connection.php');
   
   
   $result_p = mysqli_query($conn,"SELECT * FROM salary_detail WHERE username='" . $_GET['username'] . "'");
$row= mysqli_fetch_array($result_p);
$name=$row['username'];


$current_month = date('m');
$current_year = date('Y');
if ($current_month >= 1 && $current_month <= 4) {
$quarter_start_month = 1;
} else if ($current_month >= 4 && $current_month <= 7) {
$quarter_start_month = 4;
} else if ($current_month >= 7 && $current_month <= 10) {
$quarter_start_month = 7;
} else {
$quarter_start_month = 10;
}
$quarter_start_day = 25;
$current_quarter_start = date('Y-m-d', strtotime($current_year . '-' . $quarter_start_month . '-' . $quarter_start_day));
$current_quarter_end = date('Y-m-d', strtotime($current_quarter_start . ' +3 months'));
$sql = "SELECT SUM(DATEDIFF(tdate, fdate) + 1) AS total_planned_leaves FROM leavetable WHERE Leavetype = 'LOP' AND fdate >= '$current_quarter_start' AND tdate <= '$current_quarter_end' and username='$name'";
$result = mysqli_query($conn, $sql);
$row_p = mysqli_fetch_assoc($result);
$total_lop = $row_p['total_planned_leaves'];

$sql_h = "SELECT SUM(DATEDIFF(tdate, fdate) + 1) AS total_half_day FROM leavetable WHERE Leavetype = 'Half Day' AND fdate >= '$current_quarter_start' AND tdate <= '$current_quarter_end' and username='$name'";
$result_h = mysqli_query($conn, $sql_h);
$row_h = mysqli_fetch_assoc($result_h);
$total_half = $row_h['total_half_day'];   
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
            <!-- <div class="page-wrapper"> -->
                <div class="page-body" style="margin-top:-52%;">
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <form method="POST" action=" ">
                                       
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h2 class="sub-title">Payslip Form</h2>
                                               
                                                   <div class="form-group row">
                                                        <div class="col-sm-4">
                                                         <label class="required-field">emp_no</label>  
                                                        <input type="text" class="form-control" name="Employee_ID"  value="<?php echo $row['Employee_ID']; ?>"  readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <label class="required-field">Name</label>
                                                            <input type="Text" class="form-control " name="Name"  value="<?php echo $row['username']; ?>" required readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <label class="required-field">Email</label>
                                                        <input type="email" class="form-control" name="email"   value="<?php echo $row['OfficialEmail']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                         <label class="required-field">Designation</label>  
                                                        <input type="text" class="form-control" name="designation"  required >
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <label class="required-field">Department</label>
                                                            <input type="Text" class="form-control " name="department"   required >
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <label class="required-field">Location</label>
                                                        <input type="text" class="form-control" name="location"  required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                         <label class="required-field">Bank Name</label>  
                                                        <input type="text" class="form-control" name="bank_name"  value="<?php echo $row['bank_name']; ?>"  readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <label class="required-field">Bank Acc No</label>
                                                            <input type="Text" class="form-control " name="bank_ac"  value="<?php echo $row['bank_ac']; ?>" required readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <label class="required-field">PAN</label>
                                                        <input type="email" class="form-control" name="pan"   value="<?php echo $row['pan']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                <!-- Complany Related Questions starts-->
                                                <h2>Earnings</h2>
                                                       
                                                    
 <div class="form-group row">
                                                        <div class="col-sm-4">
                                                    <label class="required-field">Date</label>
                                                        <input type="text" class="form-control" name="Date" id="theDate" readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                     <label>Basic</label>
                                                        <input type="text" class="form-control " name="basic" value="<?php echo $row['basic']; ?>"  required readonly>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                     <label>hra</label>
                                                        <input type="text" class="form-control " name="hra" value="<?php echo $row['hra']; ?>" required readonly>
                                                        </div>

                                                       
                                                        </div>



                                                                        
                                                        

                                                   
                                                       <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                <label class="required-field">telephone</label>
                                                                <input type="number" class="form-control" name="telephone"  value="<?php echo $row['telephone']; ?>" required readonly>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                <label>bonus</label>
                                                                <input type="number" class="form-control " name="bonus" value="<?php echo $row['bonus']; ?>" required readonly>
                                                                </div>
                                                                    <div class="col-sm-4">
                                                                    <label>LTA</label>
                                                                    <input type="number" class="form-control " name="lta" value="<?php echo $row['lta']; ?>" required readonly>
                                                                    </div>  
                                                        </div>
                                                        

                                                   
                                                   
                                                   <div class="form-group row">
                                                        <div class="col-sm-4">
                                                        <!-- <label class="required-field">Sub_Total</label>
                                                        <input type="number" class="form-control" name="sub_total" id="txtresult" onclick="add_number();"readonly> -->
                                                        <label class="required-field">total
                                                    </label>
                                                    <input type="number" class="form-control"  name="total"  value="<?php echo $row['total']; ?>"  id="txtresult"   required readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                       <label class="required-field">Special_Allowance</label>
                                                        <input type="number" class="form-control" name="Special_Allowance"  id="Text5" oninput="addo_number();" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                         <label class="required-field">earning_total</label>
                                                        <input type="number" class="form-control" name="earning_total"  id="Text6" required readonly>
                                                        </div>
                                                    </div>
                                                    <h2>Detection</h2>

                                         <div class="form-group row">
                                                        <div class="col-sm-4">
                                                         <label class="required-field">incometax</label>                                                     
                                                        <input type="number" class="form-control " name="incometax" id="t1n"  value="<?php echo $row['incometax']; ?>" required readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <label>PF</label>                                                     
                                                        <input type="text" class="form-control " name="pf" id="t2n" value="<?php echo $row['pf']; ?>" required readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                         <label class="required-field">proftax</label>
                                                        <input type="number" class="form-control" name="proftax" id="t3n" value="<?php echo $row['proftax']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                  

                                                    
                                         <div class="form-group row">
                                                        <!-- <div class="col-sm-4">
                                                         <label class="required-field">LOP Days</label>                                                     
                                                        <input type="number" class="form-control " name="incometax"   value="<?php echo $row['incometax']; ?>" required readonly>
                                                        </div> -->
                                                        <div class="col-sm-4">
                                                         <label class="required-field">LOP Days</label>
                                                        <?php
                                                        if ($total_lop !=0) {
                                                        ?> 
                                                        <input type="number" class="form-control" name="LOP_Day" value="<?php echo $total_lop; ?>" id="Text7"  readonly>
                                                        <?php
                                                        }else
                                                        {?>
                                                        <input type="text" class="form-control " name="LOP_Day" value="0" id="Text7" readonly>  
                                                        <?php  }
                                                        ?>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <label class="required-field">Half Days</label>
                                                            <?php
                                                             if ($total_half !=0) {
                                                            ?>                                                                                              
                                                        <input type="number" class="form-control" name="half" value="<?php echo $total_half; ?>" id="Text7_half" readonly>
                                                       <?php
                                                        }else
                                                        {?>
                                                        <input type="text" class="form-control " name="half" value="0" id="Text7_half" readonly>  
                                                        <?php  }
                                                        ?>      
                                                        </div>
                                                        <div class="col-sm-4">
                                                         <label class="required-field">LOP</label>
                                                        <input type="number" class="form-control" name="LOP" id="txtloss" onclick="loss();" required readonly>
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                      <div class="col-sm-4">
                                                         <label class="required-field">Half Day cal</label>
                                                        <input type="number" class="form-control" name="ss" id="txtloss_half" onclick="calculateHalfDaySalary();"  readonly>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <label>Ded_details</label>                                                     
                                                        <input type="text" class="form-control " name="Ded_details" required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                         <label  class="required-field">Deduct</label>
                                                        <input type="number" class="form-control" name="Deduct" id="txtd1" oninput="de();" required >
                                                        </div>
                                                    </div>

                                                      <!-- Complany Related Questions End-->
                                                  <div class="form-group row">
                                                        <!-- <div class="col-sm-4">
                                                           <label class="required-field">Ded_details</label>
                                                        <input type="number" class="form-control" name="Ded_details" readonly>
                                                        </div> -->
                                                        <div class="col-sm-4">
                                                     <label class="required-field">Total Deduction Amount</label>
                                                        <input type="number" class="form-control" name="dection_total" id="txtd"  required>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <label class="required-field">netpay</label>
                                                        <input type="number" class="form-control" name="netpay"id="txtnet" onclick="net();"   required readonly>
                                                     
</div>
                                                    </div>

                                            </div>
                                                   <div class="col-sm-6 mobile-inputs">
                                                   

                                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        <a href="employee_appraisal.php" class="btn btn-primary">Back</a>
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
var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;


    document.getElementById('theDate').value = today;
    function add_number() {

var first_number = parseInt(document.getElementById("Text1").value);
var second_number = parseInt(document.getElementById("Text2").value);
var Thrid_number = parseInt(document.getElementById("Text3").value);
var Fourth_number = parseInt(document.getElementById("Text4").value);

var result = first_number + second_number + Thrid_number + Fourth_number;

document.getElementById("txtresult").value = result;
    }
    function addo_number() {

var first_number = parseInt(document.getElementById("txtresult").value);
var second_number = parseInt(document.getElementById("Text5").value);

var result = first_number + second_number;

document.getElementById("Text6").value = result;
    }

    function de() {

var first_number = parseInt(document.getElementById("txtd1").value);
var second_number = parseInt(document.getElementById("txtloss").value);
var third_number = parseInt(document.getElementById("txtloss_half").value);
var thi_numberr = parseInt(document.getElementById("t1n").value);
var fourth_number = parseInt(document.getElementById("t2n").value);
var fifth_number = parseInt(document.getElementById("t3n").value);

var result = first_number + second_number + third_number + thi_numberr + fourth_number + fifth_number ;

document.getElementById("txtd").value = result;
    }
    function net() {

var first_number = parseInt(document.getElementById("Text6").value);
var second_number = parseInt(document.getElementById("txtd").value);


var result1 = first_number - second_number;

document.getElementById("txtnet").value = result1;
    }
    

    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;


    document.getElementById('theDate').value = today;

    function loss() {


var result = parseInt(document.getElementById("txtresult").value);

var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var loss=(result)/new Date(year, month, 0).getDate();
    var sas = parseInt(document.getElementById("Text7").value);
    var ase=sas*loss
document.getElementById("txtloss").value = parseInt(ase);

    }
    </script>



<script>
function calculateHalfDaySalary() {
//   var monthlySalary = parseInt(document.getElementById("txtresult").value);
//   var workingDaysPerMonth = new Date().getMonth() +1; // Assuming current date as the working day count
//   var halfDaySalary = (monthlySalary / workingDaysPerMonth) ;
var result = parseInt(document.getElementById("txtresult").value);

var date = new Date();
 var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    var loss=(result)/new Date(year, month, 0).getDate();
   var a=(loss)/2;
  var sas1 = parseInt(document.getElementById("Text7_half").value);
  var totalHalfDaySalary = sas1 * a;

  document.getElementById("txtloss_half").value = parseInt(totalHalfDaySalary);
}
</script>
<?php
$connection = mysqli_connect("localhost","root","","hrms");
$db = mysqli_select_db($connection,'hrms');
if(isset($_POST['submit']))
{ 
    $Employee_ID = $_POST['Employee_ID'];
    $Name = $_POST['Name'];
    $email = $_POST['email'];

    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $location = $_POST['location'];

    $bank_name = $_POST['bank_name'];
    $bank_ac = $_POST['bank_ac'];
    $pan = $_POST['pan'];
    $Date = $_POST['Date'];
    $basic = $_POST['basic'];
    $hra = $_POST['hra'];
    $telephone = $_POST['telephone'];
    $bonus = $_POST['bonus'];
    $lta = $_POST['lta'];

    $total = $_POST['total'];
    $Special_Allowance = $_POST['Special_Allowance'];
    $earning_total = $_POST['earning_total'];
     $incometax = $_POST['incometax'];
    $pf = $_POST['pf'];

    $proftax = $_POST['proftax'];
    $LOP_Day = $_POST['LOP_Day'];
    $half = $_POST['half'];

    $LOP = $_POST['LOP'];
    $ss = $_POST['ss'];
    $Ded_details = $_POST['Ded_details'];

    $Deduct = $_POST['Deduct'];
    $dection_total = $_POST['dection_total'];
    $netpay = $_POST['netpay'];
   

    $query = "INSERT INTO `payslip_new`(`Employee_ID`,`Name`,`email`,`designation`,`department`,`location`,`bank_name`,
    `bank_ac`,`pan`,`Date`,`basic`,`hra`,`telephone`,`bonus`,`lta`,`total`,`Special_Allowance`,
    `earning_total`,`incometax`,`pf`
    ,`proftax`,`LOP_Day`,`half`,`LOP`,`ss`,`Ded_details`,`Deduct`,`dection_total`,`netpay`)
   VALUES ('$Employee_ID','$Name','$email','$designation','$department','$location','$bank_name',
   '$bank_ac','$pan','$Date','$basic','$hra','$telephone','$bonus','$lta','$total','$Special_Allowance',
   '$earning_total','$incometax','$pf','$proftax','$LOP_Day','$half','$LOP'
   ,'$ss','$Ded_details','$Deduct','$dection_total','$netpay')";
    $query_run = mysqli_query($connection,$query);
    // Now let's move the uploaded image into the folder: image
    
   
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Payslip created  successfully!")
        document.location.href="Admin_payslip_view.php";
         </script>';

    }
    else{
        echo '<script type="text/javascript"> alert("Payslip created unsuccessfully") </script>';
    }
}
?>