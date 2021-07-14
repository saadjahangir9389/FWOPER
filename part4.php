<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="2"){
      header('Location: index.php?err=2');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>P4</title>
</head>
<style>
    .btn-block {
        margin-top: 10px;
        text-align: center;
        }
    button {
        width: auto;
        padding: 10px;
        border: none;
        border-radius: 5px; 
        background: maroon;
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        cursor: pointer;
        }
        button:hover {
        background: maroon;
        }
    h3 {
        text-decoration: underline;
    }
    .und{
        text-decoration: underline;
        font-weight: bold;
    }
    .brac{
        font-weight: bold;
    }
    #tbl tr:nth-child(even){background-color: #f2f2f2;}
    label {
        display: flex;
     
        justify-content: flex-start;
        text-align: left;
        width: 200px;
        line-height: 26px;
        margin-bottom: 50px;
      }
      input {
        height: 20px;
        flex: 0 0 200px;
        margin-left: 10px;
      }
</style>
<?php
include_once("navbar.php");
?>
<div class="container">
    <h3 align="center">PART-IV</h3>
    <p class = "und" align="center" >TO BE FILLED BY CONCERNED DTE / GP / SPVC HR MANAGER / REP <br> FOR FINAL SUBMISSION TO HQ FWO (HR DTE)</p>
    <p class="brac" >11. Grading of previous Two Performance Report.</p>

    
    <body>
       
        <form class="form-inline" action="">
            <div class="form-group">
                <label for="sel1" class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Year:</label>
                <select class="form-control" id="sel1">
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                </select>
              </div>
            <label for="desg" class="brac">Grading:</label>
            <input type="text" id="desg" placeholder="" name="">
          </form>
<br>
          <form class="form-inline" action="">
            <div class="form-group">
                <label for="sel1" class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Year:</label>
                <select class="form-control" id="sel1">
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                </select>
              </div>
            <label for="desg" class="brac">Grading:</label>
            <input type="text" id="desg" placeholder="" name="">
          </form>
        
          <br>
          <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Checked all the fields and found in order ? </p>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
            <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Yes</p></label>
          </div>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
            <label class="form-check-label" for="inlineCheckbox2"><p class="brac">No</p></label>
          </div>

          <br><br>
          <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. I hereby confirm that PER of year 2020 of a/n indivisual uploader on HRIS </p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
            <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Agree</p></label>
          </div>
</div>
</body>
</html>