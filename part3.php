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



    
    <title>P3</title>
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
    <h3 align="center">PART-III</h3>
    <p class = "und" align="center" >TO BE ENDORSED BY Dir / COMD / COO / SRO</p>
    <p class="brac" >8. Do you agree with the assesment of Immediate Supervisor (IO). In case of 'NO' please give reasons below.</p>
    <body>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
        <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Yes</p></label>
      </div>
      
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
        <label class="form-check-label" for="inlineCheckbox2"><p class="brac">No</p></label>
      </div>
     
      <div class="form-group shadow-textarea">
          <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write reason here..."></textarea>
        </div>
        <p class="und">9. Recommendations</p>
        <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Employment Recommendation (May be considered for re-contract)</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
            <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Yes</p></label>
          </div>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
            <label class="form-check-label" for="inlineCheckbox2"><p class="brac">No</p></label>
          </div>
          <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Pay / Promotion Recommendation</p>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
              <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Continue in same salary</p></label>
            </div>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
              <label class="form-check-label" for="inlineCheckbox2"><p class="brac">To be given raise</p></label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" />
                <label class="form-check-label" for="inlineCheckbox3"><p class="brac">To be promoted</p></label>
              </div>
              <p class="und">10. Any Achievements / Specialized Tasks (2 Marks) </p>
              <p class="brac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. 2 x Marks by Dir / Comd / COO / SRO to be endorsed on ack of special / extra ordinary task / assignment performed by the indl with brief <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description .</p>
              <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="5" placeholder="Write reason here..."></textarea>
              </div>

              <p class = "brac"align="center">Marks Obtain : 66 out of 97</p>

              <p class="brac">Recommended for Endorsement of DG FWO on Excellent Performances? </p>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                <label class="form-check-label" for="inlineCheckbox1"><p class="brac">Yes</p></label>
              </div>
              
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                <label class="form-check-label" for="inlineCheckbox2"><p class="brac">No</p></label>
              </div>

              <br><br>
        <form class="form-inline" action="">
            <label for="nameio" class="brac">Name:</label>
            <input type="text" id="nameio" placeholder="" name="">

            <label for="desg" class="brac">Designation:</label>
            <input type="text" id="desg" placeholder="" name="">
          </form>
          <br>
</div>
</body>
</html>