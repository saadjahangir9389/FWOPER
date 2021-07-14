<?php
$database = 'admins';
$host = 'localhost';
$user = 'root';
$pass = '';
$con = mysqli_connect("localhost", "root", "", "admins");

// try to conncet to database
$dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

if(!$dbh){

    echo "unable to connect to database";
};




$emp_name = $_POST["emp_name"];
$emp_no = $_POST["emp_no"];
$performance = $_POST["performance"];
$warnings = $_POST["warnings"];
$date_from = $_POST["date_from"];
$date_to = $_POST["date_to"];

$sql = "SELECT * FROM `part1` WHERE `emp_no` = '$emp_no' AND `period_from` = '$date_from' AND `period_to` = '$date_to' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$employeeno = $row["emp_no"];
$datefrom = $row["period_from"];
$dateto = $row["period_to"];


if($emp_no == $employeeno && $date_from == $datefrom && $date_to == $dateto) {
    header("Location: emp-info-form.php?status=error");
} else {
    $sql = "INSERT INTO `part1` (`id`, `emp_no`, `emp_name`, `period_from`, `period_to`, `warnings`, `relevantduties`) VALUES ('', '$emp_no', '$emp_name', '$date_from', '$date_to', '$warnings', '$performance')";

    if (mysqli_query($con, $sql)) {
        header("Location: emp-info-form.php?status=success");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}
?>



