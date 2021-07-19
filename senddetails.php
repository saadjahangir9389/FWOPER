<?php
$con = mysqli_connect("localhost", "root", "", "admins");
$emp_name = $_POST["emp_name"];
$emp_no = $_POST["emp_no"];
$performance = $_POST["performance"];
$warnings = $_POST["warnings"];
$date_from = $_POST["date_from"];
$date_to = $_POST["date_to"];

// $sql = "SELECT * FROM part1 WHERE emp_no = '$emp_no' AND period_from = '$date_from' AND period_to = '$date_to' ";
// $result = mysqli_query($con,$sql);
// $row = mysqli_fetch_assoc($result);
// $employeeno = $row["emp_no"];
// $datefrom = $row["period_from"];
// $dateto = $row["period_to"];

$sql = "SELECT insert_date_time from part1 where emp_no = '$emp_no'";
$result = mysqli_query($con,$sql);
// $row = mysqli_fetch_assoc($result);
// $employeeno = $row["emp_no"];
// $datefrom = $row["period_from"];
// $dateto = $row["period_to"];
$count=0;
while($row = mysqli_fetch_array($result)){
    $date = $row["insert_date_time"];
    $count+=1;
}



  if(isset($_POST['click']))
  {
    date_default_timezone_set('Asia/Karachi');

    $date_clicked = date('Y-m-d');
    // $current_date = date('Y-m-d');

  }
// if($emp_no == $employeeno && $date_from == $datefrom && $date_to == $dateto)
// if($current_date == $date_clicked) 
// {
//     header("Location: emp-info-form.php?status=error");
// } 
if($date_clicked == $date && $emp_no == $emp_no){
    header("Location: IOPART.php?status=error");
}else{
    $sql = "INSERT INTO part1 (id,emp_no,emp_name,period_from,period_to,warnings,relevantduties,count,insert_date_time,req_count) VALUES ('', '$emp_no', '$emp_name', '$date_from', '$date_to', '$warnings', '$performance',1,'$date_clicked','$count')";

    if (mysqli_query($con, $sql)) {
        header("Location: IOPART.php?status=success");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}
?>



