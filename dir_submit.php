<?php
$con = mysqli_connect("localhost", "root", "", "admins");
$emp_no = $_POST["emp_no"];
$io_assesment = $_POST['assesment'];
$reasons = $_POST['io_assesment_reason'];
$empl_recom = $_POST['empl_recom'];
$pay_prom_recom = $_POST['pay_prom_recom'];
$endorsement = $_POST['endorsement'];





$sql1 = "SELECT insert_date_time from part1 where emp_no = '$emp_no'";
$result = mysqli_query($con,$sql1);

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

// if($date_clicked == $date && $emp_no == $emp_no){
//     header("Location: IOPART.php?status=error");
// }else{
//     $sql = "INSERT INTO part1 (id,emp_no,emp_name,period_from,period_to,warnings,relevantduties,count,insert_date_time,req_count,1a,1b,1c,1d,1e,1f,1g,1h,1i,1_total,2a,2b,2c,2d,2e,2f,2g,2h,2i,2j,2_total,3a,3b,3c,3d,3e,3f,3_total,pen_picture,strength,weakness,training,io_name,io_designation) VALUES ('', '$emp_no', '$emp_name', '$date_from', '$date_to', '$warnings', '$performance',1,'$date_clicked','$count','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a_total','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$b_total','$c1','$c2','$c3','$c4','$c5','$c6','$c_total','$pen_picture','$strength','$weakness','$training','$io_name','$io_desg')";

//     if (mysqli_query($con, $sql)) {
//         header("Location: IOPART.php?status=success");
//     } else {
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
//     }
// }


    $sql = "UPDATE part1  SET io_assesment_agree = '$io_assesment',io_assesment_reason ='$reasons',employment_recom = '$empl_recom',pay_prom_recom='$pay_prom_recom',endorsement='$endorsement', count=2 where emp_no = '$emp_no'";

    if (mysqli_query($con, $sql)) {
        header("Location: dirpart.php?status=success");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }


?>



