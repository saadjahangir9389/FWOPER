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
  include_once("navbar.php");
  ?>
  <div class="container">
  <div class="row">
  <div class="col-md-12 welcome-page">
    
  <img src="logo.jpg" width="80" height="80" class="center">
    
    <h3 align="center">PERFORMANCE EVALUATION REPORT</h3>
    <p class = "und" align="center" >PART-I</p>
    <p class = "und" align="center" >EMPLOYEE INFORMATION</p>
    </div>
    </div>
      <form method="psot" action="senddetails.php">
        <div class="contact-item">
            <div class="item">
              <p>Employee No.<span class="required">*</span></p>
              <input type="text" name="emp_no" id = "emp_no" required onkeyup="GetDetail(this.value)" value=""/>
            </div>
            <div class="item">
              <p>Full Name<span class="required">*</span></p>
              <input type="text" name="emp_name" id = "emp_name" required readonly value=""/>
            </div>
          </div>

          <div class="position-item">
            <!-- <div class="item">
              <p>Appointment<span class="required">*</span></p>
              <select required>
                <option value="0" disabled selected>Please Select Appointment</option>  
                <option value="1">MTO</option>
                <option value="2">JM</option>
                <option value="3">AM</option>
                <option value="4">DM</option>
                <option value="5">Manager</option>
                <option value="5">GM</option>
                <option value="5">DD</option>
                <option value="5">Director</option>
              </select>
            </div> -->
            <div class="item">
              <p>Appointment<span class="required">*</span></p>
              <input type="text" name="emp_appointment" id ="emp_appointment" required readonly value=""/>
            </div>
            <!-- <div class="item">
                <p>Category<span class="required">*</span></p>
                <select required>
                    <option value="0" disabled selected>Please Select Category</option>
                    <option value="1">FS</option>
                  <option value="2">NMS</option>
                  <option value="3">MS</option>
                </select>
              </div> -->
              <div class="item">
                <p>Category<span class="required">*</span></p>
                <input type="text" name="emp_cat" id ="emp_cat" required readonly value=""/>
              </div>

              <div class="item">
                <p>Date of Emp<span class="required">*</span></p>
                <input type="text" name="emp_doe" id ="emp_doe" readonly required/>
              </div>

              <!-- <div class="item">
                <p>Qualification<span class="required">*</span></p>
                <select required>
                    <option value="0" disabled selected>Please Select Qualification</option>
                    <option value="1">BS</option>
                  <option value="2">MS</option>
                  <option value="3">PHD</option>
                </select>
              </div> -->
              <div class="item">
                <p>Qualification<span class="required">*</span></p>
                <input type="text" name="emp_qualification" id = "emp_qualification"  readonly required value=""/>
              </div>

              <!-- <div class="item">
                <p>Directorate / Group / Unit <span class="required">*</span></p>
                <select required>
                    <option value="0" disabled selected>Please Select Directorate / Group / Unit</option>
                    <option value="1">IT</option>
                  <option value="2">Fin</option>
                  <option value="3">HR</option>
                </select>
              </div> -->

              <div class="item">
                <p>Directorate / Group / Unit<span class="required">*</span></p>
                <input type="text" name="emp_dir" id = "emp_dir"  readonly required value=""/>
              </div>

              <!-- <div class="item">
                <p>Project / Location<span class="required">*</span></p>
                <select required>
                    <option value="0" disabled selected>Please Select Location</option>
                    <option value="1">RWP</option>
                  <option value="2">ISB</option>
                  <option value="3">KAR</option>
                </select>
              </div> -->

              <div class="item">
                <p>Project / Location<span class="required">*</span></p>
                <input type="text" name="emp_pro_loc" id ="emp_pro_loc" required readonly value=""/>
              </div>

              <div class="item">
                <p>Performance Peroid : From<span class="required">*</span></p>
                <input type="date" name="period_from" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>
              <div class="item">
                <p>To<span class="required">*</span></p>
                <input type="date" name="period_to" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>

              <div class="item">
                <p>Number of Warnings / Explanation Issued During the Year (if any)  <span class="required">*</span></p>
                <select required>
                    <option value="0" disabled selected>Please Select Warning Count</option>
                    <option value="1">NIL</option>
                  <option value="2">1</option>
                  <option value="3">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="item">
                <p>Is he/she Performing Duties relevent to his/her Qual & Exp (Yes / No)  <span class="required">*</span></p>
                <select required>
                    <option value="0" disabled selected>Please Select</option>
                  <option value="1">Yes</option>
                  <option value="2">No</option>
                </select>
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
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>

  <tr>
    <td>b.</td>
    <td>Ensuring implementation of PEP</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>
  <tr>
    <td>c.</td>
    <td>Material Mgmt</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
  </tr>
  <tr>
    <td>d.</td>
    <td>Mgmt of fin health of proj</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>
  <tr>
    <td>e.</td>
    <td>Conflict mgmt. with all stake reg and bldgs / const codes</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>
  <tr>
    <td>f.</td>
    <td>Ensure compliance with safety reg and bldgs / const codes</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>
  <tr>
    <td>g.</td>
    <td>Alloc and manage of resources as per const cycle / ph</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>
  <tr>
    <td>h.</td>
    <td>Monitor Stocks / Sch B items to timely handle inadequacies</td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
   
  </tr>

  <tr>
    <td>i.</td>
    <td>Is he Performing Duties relevant to his Qual & Exp and Misc Aspects (If any not covered above) </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
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
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
    <td>2</td>
               
</tr>
<tr>
                <td>b.</td>
                <td>Acceptance of Responsibility</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
               
              </tr>
              <tr>
                <td>c.</td>
                <td>Comprehension Level</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
              </tr>
              <tr>
                <td>d.</td>
                <td>Initiative and Drive</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
               
              </tr>
              <tr>
                <td>e.</td>
                <td>Appearance & Dress Code</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
               
              </tr>
              <tr>
                <td>f.</td>
                <td>Respect for Authority</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
               
              </tr>
              <tr>
                <td>g.</td>
                <td>Self-Discipline - Punctuality / Personal Conduct</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
               
              </tr>
              <tr>
                <td>h.</td>
                <td>Team Work</td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
               
              </tr>

              <tr>
                <td>i.</td>
                <td>Innovation & Change </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
              </tr>
              <tr>
                <td>j.</td>
                <td>Decision Making / Analytical Skills </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
               <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
                <td>2</td>
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
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
        <td>2</td>
       
      </tr>

      <tr>
        <td>b.</td>
        <td>Project Implementation within stipulated budget in first PEP</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
        <td>2</td>
       
      </tr>
      <tr>
        <td>c.</td>
        <td>Quality Control & Quality Check</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
        <td>2</td>
      </tr>
      <tr>
        <td>d.</td>
        <td>Human Resource Managment</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
        <td>2</td>
       
      </tr>
      <tr>
        <td>e.</td>
        <td>Power / Tasks Distribution</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
        <td>2</td>
       
      </tr>
      <tr>
        <td>f.</td>
        <td>Value Engineering</td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
       <td>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    </div>
    </td>
        <td>2</td>
       
      </tr>
        <tr>
        <td colspan="8" align="center"><strong>Total Marks (20)</strong> </td>
        <td><strong>18</strong></td>
     </tr>
    
</tbody>
        </table>
        <p class = "brac"align="center">Marks Obtain : 66 out of 95</p>
        <p class="und">4. Pen Picture</p>
          <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
              </div>
              <br>
            <p class="und">5. Strength (Professional / Personal)</p>
            <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
            <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
              </div>
            <br>
            <p class="und">6. Weaknesses (Professional / Personal)</p>
            <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
            <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
              </div>

              <br>
              <p class="und">7. Training Needs</p>
              <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
              <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
              <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
              <i class="fas fa-pencil-alt prefix"></i>
              <div class="form-group shadow-textarea">
                  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
                </div>     
        </div>
        <br>
        <form class="form-inline" action="">
            <label for="nameio" class="brac">Name of IO:</label>
            <input type="text" id="nameio" placeholder="" name="">

            <label for="desg" class="brac">Designation:</label>
            <input type="text" id="desg" placeholder="" name="">

            
           
          </form>
          <br>
          <!-- <form class="form-inline" action="">

            <label for="sign" class="brac">Signature:</label>
            <input type="text" id="sign" placeholder="" name="">

            <label for="date" class="brac">Date:</label>
            <input type="text" id="date" placeholder="" name="">
          </form>
          <br> -->
          <div class="btn-block">
          <button name = 'click' type="submit">Submit</button>
        </div>
          
</div>

</div>
  </body>
</div>

<script>
  
  // onkeyup event will occur when the user 
  // release the key and calls the function
  // assigned to this event
  function GetDetail(str) {
      if (str.length == 0) {
          document.getElementById("emp_name").value = "";
          document.getElementById("emp_appointment").value = "";
          document.getElementById("emp_cat").value = "";
          document.getElementById("emp_doe").value = "";
          document.getElementById("emp_qualification").value = "";
          document.getElementById("emp_dir").value = "";
          document.getElementById("emp_pro_loc").value = "";
          return;
      }
      else {

          // Creates a new XMLHttpRequest object
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {

              // Defines a function to be called when
              // the readyState property changes
              if (this.readyState == 4 && 
                      this.status == 200) {
                    
                  // Typical action to be performed
                  // when the document is ready
                  var myObj = JSON.parse(this.responseText);

                  // Returns the response data as a
                  // string and store this array in
                  // a variable assign the value 
                  // received to first name input field
                    
                  document.getElementById("emp_name").value = myObj[0];
                    
                  // Assign the value received to
                  // last name input field
                  document.getElementById("emp_appointment").value = myObj[1];
                  document.getElementById("emp_cat").value = myObj[2];
                  document.getElementById("emp_doe").value = myObj[3];
                  document.getElementById("emp_qualification").value = myObj[4];
                  document.getElementById("emp_dir").value = myObj[5];
                  document.getElementById("emp_pro_loc").value = myObj[6];


                  
              }
          };

          // xhttp.open("GET", "filename", true);
          xmlhttp.open("GET", "backend-search.php?emp_no=" + str, true);
            
          // Sends the request to the server
          xmlhttp.send();
      }
  }
</script>
</html>