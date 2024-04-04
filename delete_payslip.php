<?php
$con=new mysqli("localhost","hrmshtge_Root","*eLfG9nR-MiU","hrmshtge_hrmstool");
mysqli_query($con,"DELETE FROM emp_payslip WHERE id='" . $_GET["id"] . "'");

echo '<script type="text/javascript"> alert("Payslip Deleted Successfuly!") 
document.location.href="Admin_payslip_view.php";
</script>';
?> 
