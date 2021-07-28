<?php
$con = mysqli_connect("localhost", "root", "", "admins");
$emp_name = $_POST["emp_name"];
$emp_no = $_POST["emp_no"];
$performance = $_POST["performance"];
$warnings = $_POST["warnings"];
$date_from = $_POST["date_from"];
$date_to = $_POST["date_to"];

$io_assesment_yes = $_POST['io_assesment_yes'];
$io_assesment_no = $_POST['io_assesment_no'];
$reasons = $_POST['io_assesment_reason'];

//1. Job description as per JD Manual
$a1 = $_POST['a1'];$a2 = $_POST['a2'];$a3 = $_POST['a3'];$a4 = $_POST['a4'];$a5 = $_POST['a5'];$a6 = $_POST['a6'];$a7 = $_POST['a7'];$a8 = $_POST['a8'];$a9 = $_POST['a9'];
$a_total=0;
$a_total = $a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9;

//2. Personal Attributes(Please mark the relevant box)
$b1 = $_POST['b1'];$b2 = $_POST['b2'];$b3 = $_POST['b3'];$b4 = $_POST['b4'];$b5 = $_POST['b5'];$b6 = $_POST['b6'];$b7 = $_POST['b7'];$b8 = $_POST['b8'];$b9 = $_POST['b9'];$b10 = $_POST['b10'];
$b_total = 0;
$b_total = $b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$b9+$b10;

//3. Professional Attributes(Please mark the relevant box)
$c1 = $_POST['c1'];$c2 = $_POST['c2']; $c3 = $_POST['c3']; $c4 = $_POST['c4']; $c5 = $_POST['c5']; $c6 = $_POST['c6'];
$c_total = 0;
$c_total = $c1+$c2+$c3+$c4+$c5+$c6;

$pen_picture = $_POST['pen_picture'];
$strength = $_POST['strength'];
$weakness = $_POST['weakness'];
$training = $_POST['training'];

$io_name = $_POST['io_name'];
$io_desg = $_POST['io_desg'];

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
    header("Location: IOPART.php?status=error");
}else{
    $sql = "INSERT INTO part1 (id,emp_no,emp_name,period_from,period_to,warnings,relevantduties,count,insert_date_time,req_count,1a,1b,1c,1d,1e,1f,1g,1h,1i,1_total,2a,2b,2c,2d,2e,2f,2g,2h,2i,2j,2_total,3a,3b,3c,3d,3e,3f,3_total,pen_picture,strength,weakness,training,io_name,io_designation) VALUES ('', '$emp_no', '$emp_name', '$date_from', '$date_to', '$warnings', '$performance',1,'$date_clicked','$count','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a_total','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$b_total','$c1','$c2','$c3','$c4','$c5','$c6','$c_total','$pen_picture','$strength','$weakness','$training','$io_name','$io_desg')";

    if (mysqli_query($con, $sql)) {
        header("Location: IOPART.php?status=success");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}

// if($date_clicked == $date && $emp_no == $emp_no){
//     header("Location: dirpart.php?status=error");
// }else{
//     $sql = "INSERT INTO part1 (io_assesment_yes,io_assesment_no,io_assesment_reason) VALUES ('$io_assesment_yes','$io_assesment_no','$reasons') where emp_no = $emp_no";

//     if (mysqli_query($con, $sql)) {
//         header("Location: dirpart.php?status=success");
//     } else {
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
//     }
// }

?>



