<?php
$con = mysqli_connect("localhost", "root", "", "admins");
$emp_name = $_POST["emp_name"];
$emp_no = $_POST["emp_no"];
$date_from = $_POST["date_from"];
$date_to = $_POST["date_to"];
$performance = $_POST["performance"];
$warnings = $_POST["warnings"];
$sql = "SELECT insert_date_time from part1 where emp_no = '$emp_no'";
$result = mysqli_query($con,$sql);

$count=0;
while($row = mysqli_fetch_array($result)){
    $date = $row["insert_date_time"];
    $count+=1;
}

  if(isset($_POST['click']))
  {
    date_default_timezone_set('Asia/Karachi');

    $date_clicked = date('Y-m-d');
   
  }

if($date_clicked == $date && $emp_no == $emp_no){
    header("Location: emp-info-form.php?status=error");
}else{
    $sql = "INSERT INTO part1 (id,emp_no,emp_name,period_from,period_to,count,insert_date_time,relevantduties,warnings) VALUES ('', '$emp_no', '$emp_name', '$date_from', '$date_to', 1,'$date_clicked','$performance','$warnings')";

    if (mysqli_query($con, $sql)) {
        header("Location: emp-info-form.php?status=success");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}



?>



