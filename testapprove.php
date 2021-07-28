<?php
$con = mysqli_connect("localhost", "root", "", "admins");

date_default_timezone_set('Asia/Karachi');
$date_clicked = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type ="text/css" href = "main.css">
    <title>Admin Approval</title>
</head>
<body>
    
<div class="center">
    <h1>Requests</h1>

    <table >
        <tr>
            <th>S.no</th>
            <th>Emp Num</th>
            <th>Emp Name</th>
            <th>Submit Date</th>
            <th>Action</th>
        </tr>

        <?php
        $i=1;
            $query = "SELECT * FROM part1 WHERE count = 1 ORDER BY id ASC";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $i?></td>

            <td><?php echo $row['emp_no'];?></td>
            <td><?php echo $row['emp_name'];?></td>
            <td><?php echo $row['insert_date_time'];?></td>
          
              <td>
                <form action ="testapprove.php" method ="POST">
                    <input type = "hidden" name  ="emp_no" value = "<?php echo $row['emp_no'];?>"/>
                    <input type = "hidden" name  ="insert_date_time" value = "<?php echo $row['insert_date_time'];?>"/>
                    <input type = "submit" name  ="view" value = "View"/>
                    <input type = "submit" name  ="delete" value = "Delete"/>
                </form>
            </td>
            
        </tr>
        <?php
        $i++;
            }
            ?>
    </table>

  
</div>

<?php

if(isset($_POST['view'])){
    // $id = $_POST['id'];

    // $select = "UPDATE tbl_users SET status = 'approved' WHERE id = '$id'";
    // $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    // echo 'alert("User Approved!");';
    echo 'window.location.href="dirpart.php",_blank';
    echo '</script>';
}

if(isset($_POST['delete'])){
    $emp_no = $_POST['emp_no'];
    $insert_date_time = $_POST["insert_date_time"];

    if($insert_date_time!=$date_clicked){
        $select = "DELETE FROM part1 WHERE emp_no = '$emp_no' and insert_date_time ='$insert_date_time'";
        $result = mysqli_query($con, $select);
    echo '<script type = "text/javascript">';
    echo 'alert("Request Deleted ");';
    echo 'window.location.href = "testapprove.php"';
    echo '</script>';
    }
    else{
        echo '<script type = "text/javascript">';
        echo 'alert("Error ! Requests from same date cannot delete delete tomorrow");';
        echo 'window.location.href = "testapprove.php"';
        echo '</script>';
       
    }
}

?>

</body>
</html>