<?php
  
// Get the user id 
$emp_no = $_REQUEST['emp_no'];
  
// Database connection
$con = mysqli_connect("localhost", "root", "", "admins");
if ($emp_no !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    // $query = mysqli_query($con, "SELECT * FROM employees_data ed INNER JOIN part1 ON ed.emp_no = part1.emp_no WHERE ed.emp_no = '$emp_no'");
   $query = mysqli_query($con, "SELECT emp_name, emp_appointment,
    emp_cat,emp_doe,emp_qualification,emp_dir,emp_pro_loc 
    FROM employees_data WHERE emp_no='$emp_no'");
    $row = mysqli_fetch_array($query);
  
    $emp_name = $row["emp_name"];
    $emp_appointment = $row["emp_appointment"];
    $emp_cat = $row["emp_cat"];
    $emp_doe = $row["emp_doe"];
    $emp_qualification = $row["emp_qualification"];
    $emp_dir = $row["emp_dir"];
    $emp_pro_loc = $row["emp_pro_loc"];
    // $fromdate = $row["period_from"];
    // $todate = $row["period_to"];
    // $warnings = $row["warnings"];
    // $relevantduties = $row["relevantduties"];




}
  
// Store it in a array
$result = array("$emp_name", "$emp_appointment",
"$emp_cat","$emp_doe","$emp_qualification","$emp_dir",
" $emp_pro_loc" , 
// "$fromdate", "$todate", "$warnings", "$relevantduties"
);
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>