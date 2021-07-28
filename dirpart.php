<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="2"){
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

//   $records = mysqli_query($con,"select * from part1");
$records = mysqli_query($con,"select * from employees_data ed inner join part1 on ed.emp_no = part1.emp_no");
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
      $_1a = $form_data['1a'];
      $_1b = $form_data['1b'];
      $_1c = $form_data['1c'];
      $_1d = $form_data['1d'];
      $_1e = $form_data['1e'];
      $_1f = $form_data['1f'];
      $_1g = $form_data['1g'];
      $_1h = $form_data['1h'];
      $_1i = $form_data['1i'];
      $_1_total = $form_data['1_total'];
      $_2a = $form_data['2a'];
      $_2b = $form_data['2b'];
      $_2c = $form_data['2c'];
      $_2d = $form_data['2d'];
      $_2e = $form_data['2e'];
      $_2f = $form_data['2f'];
      $_2g = $form_data['2g'];
      $_2h = $form_data['2h'];
      $_2i = $form_data['2i'];
      $_2j = $form_data['2j'];
      $_2_total = $form_data['2_total'];
      $_3a = $form_data['3a'];
      $_3b = $form_data['3b'];
      $_3c = $form_data['3c'];
      $_3d = $form_data['3d'];
      $_3e = $form_data['3e'];
      $_3f = $form_data['3f'];
      $_3_total = $form_data['3_total'];
      $pen_picture = $form_data['pen_picture'];
      $strength = $form_data['strength'];
      $weakness = $form_data['weakness'];
      $training = $form_data['training'];
      $io_name = $form_data['io_name'];
      $io_desg = $form_data['io_designation'];

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
      <form action="dir_submit.php" method="post" id= 'myform' >
        <div class="contact-item">
            <div class="item">
              <p>Employee No.<span class="required">*</span></p>
              <input class = 'input_class' type="text" name="emp_no" id = "emp_no" required readonly value="<?php echo $emp_no?>"/>
            </div>
            <div class="item">
              <p>Full Name<span class="required">*</span></p>
              <input class = 'input_class' type="text" name="emp_name" id = "emp_name" required readonly value="<?php echo $full_name?>"/>
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
                <input class = 'input_class' type="text" name="emp_doe" id ="emp_doe" readonly required value="<?php echo $emp_doe?>"/>
              </div>

             
              <div class="item">
                <p>Qualification<span class="required">*</span></p>
                <input class = 'input_class' type="text" name="emp_qualification" id = "emp_qualification"  readonly required value="<?php echo $qualification?>"/>
              </div>

            

              <div class="item">
                <p>Directorate / Group / Unit<span class="required">*</span></p>
                <input  class = 'input_class' type="text" name="emp_dir" id = "emp_dir"  readonly required value="<?php echo $directorate?>"/>
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
          <br>
          <hr>
         
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
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a1" id="a1" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1a?></strong></td>
    
   
  </tr>

  <tr>
    <td>b.</td>
    <td>Ensuring implementation of PEP</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a2" id="a2" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1b?></strong></td>
   
  </tr>
  <tr>
    <td>c.</td>
    <td>Material Mgmt</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a3" id="a3" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1c?></strong></td>
  </tr>
  <tr>
    <td>d.</td>
    <td>Mgmt of fin health of proj</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a4" id="a4" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1d?></strong></td>
   
  </tr>
  <tr>
    <td>e.</td>
    <td>Conflict mgmt. with all stake reg and bldgs / const codes</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a5" id="a5" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="s5" id="a5" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1e?></strong></td>
   
  </tr>
  <tr>
    <td>f.</td>
    <td>Ensure compliance with safety reg and bldgs / const codes</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a6" id="a6" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1f?></strong></td>
   
  </tr>
  <tr>
    <td>g.</td>
    <td>Alloc and manage of resources as per const cycle / ph</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a7" id="a7" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1g?></strong></td>
   
  </tr>
  <tr>
    <td>h.</td>
    <td>Monitor Stocks / Sch B items to timely handle inadequacies</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a8" id="a8" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1h?></strong></td>
   
  </tr>

  <tr>
    <td>i.</td>
    <td>Is he Performing Duties relevant to his Qual & Exp and Misc Aspects (If any not covered above) </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "5" disabled> 
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "4" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "3" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="a9" id="a9" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_1i?></strong></td>
  </tr>
 <tr>
    <td colspan="8" align="center"><strong>Total Marks (45)</strong> </td>
    <td><strong><?php echo $_1_total?></strong></td>
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
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "2" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "1.75" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "1.5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "1" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "0.5" disabled>
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b1" id="b1" value = "0" disabled>
    </div>
    </td>
    <td><strong><?php echo $_2a?></strong></td>
               
</tr>
<tr>
                <td>b.</td>
                <td>Acceptance of Responsibility</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b2" id="b2" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2b?></strong></td>
               
              </tr>
              <tr>
                <td>c.</td>
                <td>Comprehension Level</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b3" id="b3" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2c?><strong</td>
              </tr>
              <tr>
                <td>d.</td>
                <td>Initiative and Drive</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b4" id="b4" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2d?></strong></td>
               
              </tr>
              <tr>
                <td>e.</td>
                <td>Appearance & Dress Code</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b5" id="b5" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2e?></strong></td>
               
              </tr>
              <tr>
                <td>f.</td>
                <td>Respect for Authority</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b6" id="b6" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2f?></strong></td>
               
              </tr>
              <tr>
                <td>g.</td>
                <td>Self-Discipline - Punctuality / Personal Conduct</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b7" id="b7" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2g?></strong></td>
               
              </tr>
              <tr>
                <td>h.</td>
                <td>Team Work</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "2" disabled> 
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b8" id="b8" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2h?></strong></td>
               
              </tr>

              <tr>
                <td>i.</td>
                <td>Innovation & Change </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b9" id="b9" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2i?></strong></td>
              </tr>
              <tr>
                <td>j.</td>
                <td>Decision Making / Analytical Skills </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "2" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "1.75" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "1.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "1" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "0.5" disabled>
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="b10" id="b10" value = "0" disabled>
    </div>
    </td>
                <td><strong><?php echo $_2j?></strong></td>
              </tr>
             <tr>
                <td colspan="8" align="center"><strong>Total Marks (20)</strong> </td>
                <td><strong><?php echo $_2_total?></strong></td>
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
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "5" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "4" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "3" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "2" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "1" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c1" id="c1" value = "0" disabled>
    </div>
    </td>
        <td><strong><?php echo $_3a?></strong></td>
       
      </tr>

      <tr>
        <td>b.</td>
        <td>Project Implementation within stipulated budget in first PEP</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "5" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "4" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "3" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "2" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "1" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c2" id="c2" value = "0" disabled>
    </div>
    </td>
        <td><strong><?php echo $_3b?></strong></td>
       
      </tr>
      <tr>
        <td>c.</td>
        <td>Quality Control & Quality Check</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "5" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "4" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "3" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "2" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "1" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c3" id="c3" value = "0" disabled>
    </div>
    </td>
        <td><strong><?php echo $_3c?></strong></td>
      </tr>
      <tr>
        <td>d.</td>
        <td>Human Resource Managment</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "5" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "4" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "3" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "2" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "1" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c4" id="c4" value = "0" disabled>
    </div>
    </td>
        <td><strong><?php echo $_3d?></strong></td>
       
      </tr>
      <tr>
        <td>e.</td>
        <td>Power / Tasks Distribution</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "5" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "4" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "3" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "2" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "1" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c5" id="c5" value = "0" disabled>
    </div>
    </td>
        <td><strong><?php echo $_3e?></strong></td>
       
      </tr>
      <tr>
        <td>f.</td>
        <td>Value Engineering</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "5" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "4" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "3" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "2" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "1" disabled>
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="c6" id="c6" value = "0" disabled>
    </div>
    </td>
        <td><strong><?php echo $_3f?></strong></td>
       
      </tr>
        <tr>
        <td colspan="8" align="center"><strong>Total Marks (30)</strong> </td>
        <td><strong><?php echo $_3_total?></strong></td>
     </tr>
     
     <?php 
     $total_marks_part2 = 0;
     $total_marks_part2 = $_1_total + $_2_total + $_3_total;
     ?>
</tbody>
        </table>
        <p class = "und">Marks Obtain : <?php echo $total_marks_part2?> out of 95</p>
        <br>
        <p class="und">4. Pen Picture</p>
          
            <div class="form-group shadow-textarea">
            <i class="fas fa-pencil-alt prefix" name= ></i>
                <textarea class="form-control z-depth-1 input_class" id="exampleFormControlTextarea6" rows="3" name='pen_picture' disabled>
                <?php echo $pen_picture?>
                </textarea>
              </div>
              <br>
            <p class="und">5. Strength (Professional / Personal)</p>
           
            <i class="fas fa-pencil-alt prefix" name= ></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1 input_class" id="exampleFormControlTextarea6" rows="3" name='strength' disabled>
                    <?php echo $strength?>
                </textarea>
              </div>
            <br>
            <p class="und">6. Weaknesses (Professional / Personal)</p>
          
            <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1 input_class" id="exampleFormControlTextarea6" rows="3" name='weakness' disabled>
                    <?php echo $weakness?>
                </textarea>
              </div>

              <br>
              <p class="und">7. Training Needs</p>
            
              <i class="fas fa-pencil-alt prefix"></i>
              <div class="form-group shadow-textarea">
                  <textarea class="form-control z-depth-1 input_class" id="exampleFormControlTextarea6" rows="3"  name='training' disabled>
                      <?php echo $training?>
                  </textarea>
                </div>     
        </div>
        <br>

     
 

        <div class = 'end'>
          <div class="form-inline">
          <div class="form-group" >
              <label for="nameio" class="und">Name of IO:</label>
              <br> <br>
              <input class="input_class" type="text" name="io_name" value="<?php echo $io_name?>" disabled>
          </div>
          <div class="form-group"> 
              <label for="desg" class="und">Designation:</label>
              <br> <br>
              <input class = 'input_class' type="text" name="io_desg"  value="<?php echo $io_desg?>"  disabled>  
          </div>      
          </div>
  </div>
          <br><br>
<hr>
<!-- part3 begins here -->
          <div class="container">
    <h3 align="center">PART-III</h3>
    <p class = "und" align="center" >TO BE ENDORSED BY Dir / COMD / COO / SRO</p>
    <br>
    <p class="brac" >8. Do you agree with the assesment of Immediate Supervisor (IO). In case of 'NO' please give reasons below.</p>
    <br>
    <body>
    <!-- <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
        <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Yes</p></label>
      </div> -->
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="assesment"  value = "yes" >
  <label class="form-check-label" for="c6"><p class="brac"> Yes</p></label>
    </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="assesment"  value = "no" >
  <label class="form-check-label" for="c6"><p class="brac"> No</p></label>
    </div>
    
      <div class="form-group shadow-textarea">
          <br>
      <i class="fas fa-pencil-alt prefix"></i>
          <textarea class="form-control z-depth-1" id="io_assesment_reason" rows="3" name = "io_assesment_reason" placeholder="Write reason here..."></textarea>
        </div>
        <p class="und">9. Recommendations</p>
        <br>
        <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Employment Recommendation (May be considered for re-contract)</p>
       
          <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="empl_recom"  value = "yes" >
                <label class="form-check-label" for="c6"><p class="brac"> Yes</p></label>
                </div>
                <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="empl_recom"  value = "no" >
            <label class="form-check-label" for="c6"><p class="brac"> No</p></label>
                </div>
                <br><br>
          <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Pay / Promotion Recommendation</p>
          <br>
         

                    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pay_prom_recom"  value = "Continue" >
        <label class="form-check-label" for="c6"><p class="brac"> Continue in same salary</p></label>
            </div>
                <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pay_prom_recom"  value = "raise" >
            <label class="form-check-label" for="c6"><p class="brac"> To be given raise</p></label>
                </div>
                       
              <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pay_prom_recom" value = "promoted" >
            <label class="form-check-label" for="c6"><p class="brac"> To be promoted</p></label>
                </div>
                <br><br>
              <p class="und">10. Any Achievements / Specialized Tasks (2 Marks) </p>
              <br>
              <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 2 x Marks by Dir / Comd / COO / SRO to be endorsed on ack of special / extra ordinary task / assignment performed by the indl with brief <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description or <strong>NIL</strong>.</p>
              <br>
              <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="special_assignment"  value = "no" >
            <label class="form-check-label" for="c6"><p class="brac"> <strong>NIL</strong></p></label>
                </div>
                <br><br>
              <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" rows="3" name="spec_assgn_desc" placeholder="Write Description here..."></textarea>
              </div>
              <br>
              <p class = "und"  >Marks Obtain : 66 out of 97</p>
              <br>

              <p class="brac">Recommended for Endorsement of DG FWO on Excellent Performances? </p>

              <br>

              <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="endorsement"  value = "yes" >
            <label class="form-check-label" for="c6"><p class="brac"> <strong>Yes</strong></p></label>
                </div>
                <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="endorsement"  value = "no" >
            <label class="form-check-label" for="c6"><p class="brac"> <strong>No</strong></p></label>
                </div>

              <br><br>
              
          <div class="form-inline">
          <div class="form-group" >
              <label for="nameio" class="und">Name:</label>
              <br>  <br>
              <input class="input_class" type="text" name="io_name" value="" >
          </div>
          <div class="form-group"> 
              <label for="desg" class="und">Designation:</label>
              <br> <br>
              <input class = 'input_class' type="text" name="io_desg"  value=""  >  
          </div>      
          </div>
  
          <br>
          <br>

<div class="btn-block">
<button name = 'click' type="submit">Submit</button>
</div>
</div>
</div>

</div>
  </body>

</div>
</form>
</html>