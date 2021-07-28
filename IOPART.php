<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="0"){
      header('Location: index.php?err=2');
    }
    
    
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Performance Evaluation Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
      <link rel="stylesheet" href="new.css">

    <style>
     
    </style>
  </head>
  <body>
  <?php
  @$status = $_GET['status'];

  if(@$status == "error") {

      echo "<div class='alert alert-danger' role='alert''> Record Already Exists </div>";

  }

  if(@$status == "success") {

      echo "<div class='alert alert-success' role='alert''> Record Submitted </div>";

  }
  ?>
  <?php
 
  include_once("navbar.php");
  $con = mysqli_connect("localhost", "root", "", "admins");

  if (!$con) {
  echo "Database not connected";
  }
   @$id = $_GET["id"];
   $records = mysqli_query($con,"select * from employees_data ed inner join part1 on ed.emp_no = part1.emp_no WHERE part1.emp_no = '$id'");

  //  $records = mysqli_query($con,"SELECT * from part1");

  while($form_data = mysqli_fetch_array($records)){
      $full_name = $form_data['emp_name'];
      $emp_no = $form_data['emp_no'];
      $appointment = $form_data['emp_appointment'];
      $category = $form_data['emp_cat'];
      $emp_doe = $form_data['emp_doe'];
      $qualification = $form_data['emp_qualification'];
      $directorate = $form_data['emp_dir'];
      $proj_loc = $form_data['emp_pro_loc'];
      $period_from = $form_data['period_from'];
      $period_to = $form_data['period_to'];
      $warnings = $form_data['warnings'];
      $relevent_work = $form_data['relevantduties'];
     

  }
  mysqli_close($con);
  ?>
  <div class="container">
  <div class="row">
  <div class="col-md-12 welcome-page">
    <br>
  <img src="logo.jpg" width="80" height="80" class="center">
    
    <h3 align="center">PERFORMANCE EVALUATION REPORT</h3>
    <p class = "und" align="center" >PART-I</p>
    <p class = "und" align="center" >EMPLOYEE INFORMATION</p>
    </div>
    </div>
      <form action="senddetails.php?id=<?php echo $id ?>" method="post" id= 'myform' >
        <div class="contact-item">
            <div class="item">
              <p>Employee No.<span class="required">*</span></p>
              <input class = 'input_class' type="text" name="emp_no" id = "emp_no" required readonly value="<?php echo $id?>"/>
            </div>
            <div class="item">
              <p>Full Name<span class="required">*</span></p>
              <input class = 'input_class' type="text" name="emp_name" id = "emp_name"  required readonly value="<?php echo $full_name?>"/>
            </div>
          </div>

          <div class="position-item">
            
            <div class="item">
              <p>Appointment<span class="required">*</span></p>
              <input class = 'input_class' type="text" name="emp_appointment" id ="emp_appointment" required readonly value="<?php echo $appointment?>"/>
            </div>
           
              <div class="item">
                <p>Category<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="emp_cat" id ="emp_cat" required readonly value="<?php echo $category?>"/>
              </div>

              <div class="item">
                <p>Date of Emp<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="emp_doe" id ="emp_doe"  readonly required value="<?php echo $emp_doe?>">
              </div>
              <div class="item">
                <p>Qualification<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="emp_qualification" id = "emp_qualification" readonly required value="<?php echo $qualification?>"/>
              </div>

            

              <div class="item">
                <p>Directorate / Group / Unit<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="emp_dir" id = "emp_dir"   readonly required value="<?php echo $directorate?>"/>
              </div>

             

              <div class="item">
                <p>Project / Location<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="emp_pro_loc" id ="emp_pro_loc" required readonly value="<?php echo $proj_loc?>"/>
              </div>

              <div class="item">
                <p>Performance Peroid : From<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="date_from" required readonly value ="<?php echo $period_from?>"/>

              </div>
              <div class="item">
                <p>To<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="date_to" required readonly value = "<?php echo $period_to?>"/>
               
              </div>

              <div class="item">
                <p>Number of Warnings / Explanation Issued During the Year (if any)  <span class="required">*</span></p>
                <input class = 'input_class' type="text" name="date_to" required readonly value = "<?php echo $warnings?>"/>
              </div>
              <div class="item">
                <p>Is he/she Performing Duties relevent to his/her Qual & Exp (Yes / No)  <span class="required">*</span></p>
                <input class = 'input_class' type="text" name="date_to" required readonly value = "<?php echo $relevent_work?>"/>

              </div>
             
          <!-- div container end here     -->
          </div>
    <h3 align="center">PART-II</h3>
    <p class = "und" align="center" >TO BE FILLED BY IMMIDIATE SUPERVISOR (IO)</p>
    <p class = "und" >1. Job description as per JD Manual</p>
    
    <div class="table-resposnsive">
    <table id = "tbl" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Ser</th>
            <th scope="col">Job Description</th>
            <th scope="col">5</th>
            <th scope="col">4</th>
            <th scope="col">3</th>
            <th scope="col">2</th>
            <th scope="col">1</th>
            <th scope="col">0</th>
            <th scope="col">Marks</th>
          </tr>
        </thead>
        <tbody>

<tr>
    <td>a.</td>
    <td>Prep of PEP a/w Ctgys</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "0">
    </div>
    </td>
    <!-- <td id='result'></td> -->
    <td></td>
   
  </tr>

  <tr>
    <td>b.</td>
    <td>Ensuring implementation of PEP</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "0">
    </div>
    </td>
    <td></td>
   
  </tr>
  <tr>
    <td>c.</td>
    <td>Material Mgmt</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "0">
    </div>
    </td>
    <td></td>
  </tr>
  <tr>
    <td>d.</td>
    <td>Mgmt of fin health of proj</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "0">
    </div>
    </td>
    <td></td>
   
  </tr>
  <tr>
    <td>e.</td>
    <td>Conflict mgmt. with all stake reg and bldgs / const codes</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="s5" id="a5" value = "0">
    </div>
    </td>
    <td></td>
   
  </tr>
  <tr>
    <td>f.</td>
    <td>Ensure compliance with safety reg and bldgs / const codes</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "0">
    </div>
    </td>
    <td></td>
   
  </tr>
  <tr>
    <td>g.</td>
    <td>Alloc and manage of resources as per const cycle / ph</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "0">
    </div>
    </td>
    <td></td>
   
  </tr>
  <tr>
    <td>h.</td>
    <td>Monitor Stocks / Sch B items to timely handle inadequacies</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "0">
    </div>
    </td>
    <td></td>
   
  </tr>

  <tr>
    <td>i.</td>
    <td>Is he Performing Duties relevant to his Qual & Exp and Misc Aspects (If any not covered above) </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "4">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "3">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "0">
    </div>
    </td>
    <td></td>
  </tr>
 <tr>
    <td colspan="8" align="center"><strong>Total Marks (45)</strong> </td>
    <td><strong>18</strong></td>
 </tr>
 
</tbody>
</table>

<p class = "und" >2. Personal Attributes(Please mark the relevant box)</p>
    <p class="brac">(5: Excellent) (4: Very Good) (3: Good) (2: Average) (1: Below Average) (0: Unsatisfactory)</p>
    <div class="table-resposnsive">
    <table id = "tbl" class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Ser</th>
            <th scope="col">Attributes</th>
            <th scope="col">2</th>
            <th scope="col">1.75</th>
            <th scope="col">1.5</th>
            <th scope="col">1</th>
            <th scope="col">0.5</th>
            <th scope="col">0</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
        <tr>
                <td>a.</td>
                <td>Temperament</td>
                <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "2">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "1.75">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "1.5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "0.5">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "0">
    </div>
    </td>
    <td></td>
               
</tr>
<tr>
                <td>b.</td>
                <td>Acceptance of Responsibility</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "0">
    </div>
    </td>
                <td></td>
               
              </tr>
              <tr>
                <td>c.</td>
                <td>Comprehension Level</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "0">
    </div>
    </td>
                <td></td>
              </tr>
              <tr>
                <td>d.</td>
                <td>Initiative and Drive</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "0">
    </div>
    </td>
                <td></td>
               
              </tr>
              <tr>
                <td>e.</td>
                <td>Appearance & Dress Code</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "0">
    </div>
    </td>
                <td></td>
               
              </tr>
              <tr>
                <td>f.</td>
                <td>Respect for Authority</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "0">
    </div>
    </td>
                <td></td>
               
              </tr>
              <tr>
                <td>g.</td>
                <td>Self-Discipline - Punctuality / Personal Conduct</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "0">
    </div>
    </td>
                <td></td>
               
              </tr>
              <tr>
                <td>h.</td>
                <td>Team Work</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "0">
    </div>
    </td>
                <td></td>
               
              </tr>

              <tr>
                <td>i.</td>
                <td>Innovation & Change </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "0">
    </div>
    </td>
                <td></td>
              </tr>
              <tr>
                <td>j.</td>
                <td>Decision Making / Analytical Skills </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "2">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "1.75">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "1.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "0.5">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "0">
    </div>
    </td>
                <td></td>
              </tr>
             <tr>
                <td colspan="8" align="center"><strong>Total Marks (20)</strong> </td>
                <td><strong>18</strong></td>
             </tr>
             </tbody>
    </table>
    </div>
    <p class = "und" >3. Professional Attributes(Please mark the relevant box)</p>
    <p class="brac">(5: Excellent) (4: Very Good) (3: Good) (2: Average) (1: Below Average) (0: Unsatisfactory)</p>
    <div class="table-resposnsive">
        <table id = "tbl" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Ser</th>
                <th scope="col">Attributes</th>
                <th scope="col">5</th>
                <th scope="col">4</th>
                <th scope="col">3</th>
                <th scope="col">2</th>
                <th scope="col">1</th>
                <th scope="col">0</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
    
    <tr>
        <td>a.</td>
        <td>Project Timelines</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "5">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "4">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "3">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "2">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "0">
    </div>
    </td>
        <td></td>
       
      </tr>

      <tr>
        <td>b.</td>
        <td>Project Implementation within stipulated budget in first PEP</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "5">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "4">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "3">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "2">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "0">
    </div>
    </td>
        <td></td>
       
      </tr>
      <tr>
        <td>c.</td>
        <td>Quality Control & Quality Check</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "5">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "4">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "3">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "2">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "0">
    </div>
    </td>
        <td></td>
      </tr>
      <tr>
        <td>d.</td>
        <td>Human Resource Managment</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "5">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "4">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "3">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "2">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "0">
    </div>
    </td>
        <td></td>
       
      </tr>
      <tr>
        <td>e.</td>
        <td>Power / Tasks Distribution</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "5">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "4">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "3">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "2">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "0">
    </div>
    </td>
        <td></td>
       
      </tr>
      <tr>
        <td>f.</td>
        <td>Value Engineering</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "5">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "4">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "3">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "2">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "0">
    </div>
    </td>
        <td></td>
       
      </tr>
        <tr>
        <td colspan="8" align="center"><strong>Total Marks (30)</strong> </td>
        <td><strong>18</strong></td>
     </tr>
    
</tbody>
        </table>
        <p class = "brac"align="center">Marks Obtain : 66 out of 95</p>
        <p class="und">4. Pen Picture</p>
          <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..." name='pen_picture'></textarea>
              </div>
              <br>
            <p class="und">5. Strength (Professional / Personal)</p>
            <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
            <i class="fas fa-pencil-alt prefix" name= ></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..." name='strength'></textarea>
              </div>
            <br>
            <p class="und">6. Weaknesses (Professional / Personal)</p>
            <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
            <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..." name='weakness'></textarea>
              </div>

              <br>
              <p class="und">7. Training Needs</p>
              <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
              <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
              <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
              <i class="fas fa-pencil-alt prefix"></i>
              <div class="form-group shadow-textarea">
                  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..." name='training'></textarea>
                </div>     
        </div>
        <br>

     
 

        <div class = 'end'>
          <div class="form-inline">
          <div class="form-group" >
              <label for="nameio" class="und">Name of IO:</label>
              <input type="text" name="io_name" placeholder="">
          </div>
          <div class="form-group"> 
              <label for="desg" class="und">Designation:</label>
              <input type="text" name="io_desg" placeholder="">  
          </div>      
          </div>
  </div>
          <br>

          <div class="btn-block">
          <button name = 'click' type="submit">Submit</button>
        </div>
          
</div>

</div>
  </body>
</div>


</html>