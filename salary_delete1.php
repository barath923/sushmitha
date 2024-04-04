<?php
include('connection.php');
mysqli_query($conn,"DELETE FROM salary_detail WHERE id='" . $_GET["id"] . "'");
// mysqli_query($con,"DELETE FROM taskfollowup WHERE Task_id='" . $_GET["id"] . "'");
// header("Location:EMP_taskview.php");
echo '<script type="text/javascript"> alert("Details Deleted Successfuly!") 
document.location.href="salary_view1.php";

</script>';
?> 

