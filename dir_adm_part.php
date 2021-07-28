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
    <title>SRO APPROVAL</title>
</head>
<body>
    
<div class="center">
    <h1>DIR PART</h1>

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
            $query = "SELECT * FROM part1 WHERE count = 2 ORDER BY id ASC";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $i?></td>

            <td><?php echo $row['emp_no'];?></td>
            <td><?php echo $row['emp_name'];?></td>
            <td><?php echo $row['insert_date_time'];?></td>
          
              <td>
                <form action ="dir_adm_part.php" method ="POST">
                    <input type = "hidden" name  ="emp_no" value = "<?php echo $row['emp_no'];?>"/>
                    <input type = "hidden" name  ="insert_date_time" value = "<?php echo $row['insert_date_time'];?>"/>
                    <a href="dirpart.php?id=<?php echo $row['emp_no'];?> "> view </a>
                </form>
            </td>
            
        </tr>
        <?php
        $i++;
            }
            ?>
    </table>

  
</div>


</body>
</html>