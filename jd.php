<?php
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="1"){
      header('Location: index.php?err=2');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>JD</title>
</head>

<?php
include_once("navbar.php");
// include("part2_customcss.css");
 include("employee_form.php");
?>

<div class="container">

    <h3 align="center">PART-II</h3>
    <p class = "und" align="center" >TO BE FILLED BY IMMIDIATE SUPERVISOR (IO)</p>
    <p class = "und" >1. Job description as per JD Manual</p>
<body>

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
        <form method="post" action="jd_reviewandsubmit.php">

            <tr>
                <td>a.</td>
                <td>Prep of PEP a/w Ctgys</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5"  id="flexCheckDefault"  name="first">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault"  name="first">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault"  name="first">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault"  name="first">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault"  name="first">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault"  name="first">
                      </div>
                </td>
                <td></td>

              </tr>

              <tr>
                <td>b.</td>
                <td>Ensuring implementation of PEP</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="second">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="second" >
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="second">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="second">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="second">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="second">
                      </div>
                </td>
                <td></td>

              </tr>
              <tr>
                <td>c.</td>
                <td>Material Mgmt</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="third">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="third">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="third">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="third">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="third">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="third">
                      </div>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>d.</td>
                <td>Mgmt of fin health of proj</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="fourth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="fourth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="fourth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="fourth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="fourth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="fourth">
                      </div>
                </td>
                <td></td>

              </tr>
              <tr>
                <td>e.</td>
                <td>Conflict mgmt. with all stake reg and bldgs / const codes</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="fifth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="fifth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="fifth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="fifth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="fifth">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="fifth">
                      </div>
                </td>
                <td></td>

              </tr>
              <tr>
                <td>f.</td>
                <td>Ensure compliance with safety reg and bldgs / const codes</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="six">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="six">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="six">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="six">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="six">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="six">
                      </div>
                </td>
                <td></td>

              </tr>
              <tr>
                <td>g.</td>
                <td>Alloc and manage of resources as per const cycle / ph</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="7">
                      </div>
                </td>
                <td></td>

              </tr>
              <tr>
                <td>h.</td>
                <td>Monitor Stocks / Sch B items to timely handle inadequacies</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="" id="flexCheckDefault" name="8">
                      </div>
                </td>
                <td></td>

              </tr>

              <tr>
                <td>i.</td>
                <td>Is he Performing Duties relevant to his Qual & Exp and Misc Aspects (If any not covered above) </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="9">
                      </div>
                </td>
                <td></td>
              </tr>
             <tr>
                <td colspan="8" align="center"><strong>Total Marks (45)</strong> </td>
                <td><strong></strong></td>
             </tr>

        </tbody>
      </table>
    </div>
    <!-- <p>Dated: __________________</p> -->
    <!-- personal attributes -->
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
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault1" name="name1">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault2" name="name1">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault3" name="name1">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault4" name="name1">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault5" name="name1">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault6" name="name1">
                      </div>
                </td>
                <td>2</td>

              </tr>

              <tr>
                <td>b.</td>
                <td>Acceptance of Responsibility</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name2">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name2">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name2">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name2">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name2">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name2">
                      </div>
                </td>
                <td>2</td>

              </tr>
              <tr>
                <td>c.</td>
                <td>Comprehension Level</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name3">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name3">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name3">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name3">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name3">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name3">
                      </div>
                </td>
                <td>2</td>
              </tr>
              <tr>
                <td>d.</td>
                <td>Initiative and Drive</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name4">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name4">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name4">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name4">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name4">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name4">
                      </div>
                </td>
                <td>2</td>

              </tr>
              <tr>
                <td>e.</td>
                <td>Appearance & Dress Code</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name5">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name5">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name5">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name5">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name5">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name5">
                      </div>
                </td>
                <td>2</td>

              </tr>
              <tr>
                <td>f.</td>
                <td>Respect for Authority</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name6">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name6">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name6">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name6">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name6">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name6">
                      </div>
                </td>
                <td>2</td>

              </tr>
              <tr>
                <td>g.</td>
                <td>Self-Discipline - Punctuality / Personal Conduct</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name7">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name7">
                      </div>
                </td>
                <td>2</td>

              </tr>
              <tr>
                <td>h.</td>
                <td>Team Work</td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name8">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name8">
                      </div>
                </td>
                <td>2</td>

              </tr>

              <tr>
                <td>i.</td>
                <td>Innovation & Change </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name9">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name9">
                      </div>
                </td>
                <td>2</td>
              </tr>
              <tr>
                <td>j.</td>
                <td>Decision Making / Analytical Skills </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name10">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.75" id="flexCheckDefault" name="name10">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1.5" id="flexCheckDefault" name="name10">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name10">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0.5" id="flexCheckDefault" name="name10">
                      </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name10">
                      </div>
                </td>
                <td>2</td>
              </tr>
             <tr>
                <td colspan="8" align="center"><strong>Total Marks (20)</strong> </td>
                <td><strong></strong></td>
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
                            <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name11">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name11">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name11">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name11">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name11">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name11">
                          </div>
                    </td>
                    <td>2</td>

                  </tr>

                  <tr>
                    <td>b.</td>
                    <td>Project Implementation within stipulated budget in first PEP</td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name12">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name12">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name12">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name12">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name12">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name12">
                          </div>
                    </td>
                    <td>2</td>

                  </tr>
                  <tr>
                    <td>c.</td>
                    <td>Quality Control & Quality Check</td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name13">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name13">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name13">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name13">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name13">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name13">
                          </div>
                    </td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>d.</td>
                    <td>Human Resource Managment</td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name14">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name14">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name14">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name14">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name14">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name14">
                          </div>
                    </td>
                    <td>2</td>

                  </tr>
                  <tr>
                    <td>e.</td>
                    <td>Power / Tasks Distribution</td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name15">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name15">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name15">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name15">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name15">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name15">
                          </div>
                    </td>
                    <td>2</td>

                  </tr>
                  <tr>
                    <td>f.</td>
                    <td>Value Engineering</td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name16">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name16">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name16">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name16">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name16">
                          </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name16">
                          </div>
                    </td>
                    <td>2</td>

                  </tr>
                    <tr>
                    <td colspan="8" align="center"><strong>Total Marks (20)</strong> </td>
                    <td><strong></strong></td>
                 </tr>

            </tbody>
          </table>
          <p class = "brac"align="center"></p>

          <p class="und">4. Pen Picture</p>
          <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" name="textarea1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
              </div>

            <br>
            <p class="und">5. Strength (Professional / Personal)</p>
            <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
            <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" name="textarea2" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
              </div>
            <br>
            <p class="und">6. Weaknesses (Professional / Personal)</p>
            <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
            <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
            <i class="fas fa-pencil-alt prefix"></i>
            <div class="form-group shadow-textarea">
                <textarea class="form-control z-depth-1" name="textarea3" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
              </div>

              <br>
              <p class="und">7. Training Needs</p>
              <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
              <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
              <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
              <i class="fas fa-pencil-alt prefix"></i>
              <div class="form-group shadow-textarea">
                  <textarea class="form-control z-depth-1" name="textarea4" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
                </div>
        </div>
        <br>

          <br>
          <!-- <form class="form-inline" action="">

            <label for="sign" class="brac">Signature:</label>
            <input type="text" id="sign" placeholder="" name="">

            <label for="date" class="brac">Date:</label>
            <input type="text" id="date" placeholder="" name="">
          </form>
          <br> -->
          <div class="btn-block">
            <button type="submit">Submit</button>
          </div>
    </form>
</body>
          <hr>
</div>

</div>
<script>
 // the selector will match all input controls of type :checkbox
// and attach a click event handler
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>

</body>

</html>
