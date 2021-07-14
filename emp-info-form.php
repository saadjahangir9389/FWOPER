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
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>



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



  </div>
   <?php
   include_once("navbar.php");
   $con = mysqli_connect("localhost", "root", "", "admins");

if (!$con) {
echo "Database not connected";
}

  $sql = "SELECT * FROM `employees_data`";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
    $employeeno = $row["emp_no"];


?>


  <div class="container homepage">
  <div class="row">
  <div class="col-md-12 welcome-page">

  <img src="logo.jpg" width="80" height="80" class="center">

    <h3 align="center">PERFORMANCE EVALUATION REPORT</h3>
    <p class = "und" align="center" >PART-I</p>
    <p class = "und" align="center" >EMPLOYEE INFORMATION</p>
    </div>
    </div>
      <form action="senddetails.php" method="POST">
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
                <p>Performance Period : From<span class="required">*</span></p>
                <input type="date" name="date_from" value="" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>
              <div class="item">
                <p>To<span class="required">*</span></p>
                <input type="date" name="date_to" value="" required/>
                <i class="fas fa-calendar-alt"></i>
              </div>

              <div class="item">
                <p>Number of Warnings / Explanation Issued During the Year (if any)  <span class="required">*</span></p>
                <select name="warnings" required>
                    <option  value="0" disabled selected>Please Select Warning Count</option>
                    <option value="NIL">NIL</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="item">
                <p>Is he/she Performing Duties relevent to his/her Qual & Exp (Yes / No)  <span class="required">*</span></p>
                <select name="performance" required>
                    <option value="0" disabled selected>Please Select</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>

          </div>
        <div class="btn-block">
 <?php
//        if (emp_no == )
 ?>
          <button type="submit">Submit</button>
        </div>
      </form>




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
  </body>
</div>
</html>
