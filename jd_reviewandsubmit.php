<?php
$database = 'admins';
$host = 'localhost';
$user = 'root';
$pass = '';
$con = mysqli_connect("localhost", "root", "", "admins");

// try to conncet to database
$dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

if (!$dbh) {

echo "unable to connect to database";
}
$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];
$fourth = $_POST["fourth"];
$fifth = $_POST["fifth"];
$six = $_POST["six"];
$seven = $_POST["7"];
$eight = $_POST["8"];
$nine = $_POST["9"];
$eleven = $_POST["name1"];
$twelve = $_POST["name2"];
$thirteen = $_POST["name3"];
$fourteen = $_POST["name4"];
$fifteen = $_POST["name5"];
$sixteen = $_POST["name6"];
$seventeen = $_POST["name7"];
$eighteen = $_POST["name8"];
$nineteen = $_POST["name9"];
$twenty = $_POST["name10"];
$twenty1 = $_POST["name11"];
$twenty2 = $_POST["name12"];
$twenty3 = $_POST["name13"];
$twenty4 = $_POST["name14"];
$twenty5 = $_POST["name15"];
$twenty6 = $_POST["name16"];
$textarea1 = $_POST["textarea1"];
$textarea2 = $_POST["textarea2"];
$textarea3 = $_POST["textarea3"];
$textarea4 = $_POST["textarea4"];



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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>JD</title>
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
<?php include_once("navbar.php");?>

<div class="container">

    <h3 align="center">Verify and Submit</h3>
<!--    <p class = "und" align="center" >TO BE FILLED BY IMMIDIATE SUPERVISOR (IO)</p>-->
<!--    <p class = "und" >1. Job description as per JD Manual</p>-->
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
            <form method="post" action="part2formsubmit.php">

                <tr>
                    <td>a.</td>
                    <td>Prep of PEP a/w Ctgys</td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($first == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5"  id="flexCheckDefault"  name="first">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($first == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault"  name="first">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($first == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault"  name="first">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($first == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault"  name="first">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($first == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault"  name="first">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($first == '0') echo "checked='checked'"; ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault"  name="first">
                        </div>
                    </td>
                    <td>2</td>

                </tr>

                <tr>
                    <td>b.</td>
                    <td>Ensuring implementation of PEP</td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($second == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="second">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($second == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="second" >
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($second == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="second">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($second == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="second">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($second == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="second">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($second == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="second">
                        </div>
                    </td>
                    <td>2</td>

                </tr>
                <tr>
                    <td>c.</td>
                    <td>Material Mgmt</td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($third == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="third">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($third == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="third">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($third == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="third">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($third == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="third">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($third == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="third">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="radio" type="checkbox" value="0" id="flexCheckDefault" name="third">
                        </div>
                    </td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>d.</td>
                    <td>Mgmt of fin health of proj</td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fourth == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="fourth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fourth == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="fourth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fourth == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="fourth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fourth == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="fourth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fourth == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="fourth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fourth == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="fourth">
                        </div>
                    </td>
                    <td>2</td>

                </tr>
                <tr>
                    <td>e.</td>
                    <td>Conflict mgmt. with all stake reg and bldgs / const codes</td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fifth == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="fifth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fifth == '4') echo "checked='checked'"; ?>class="radio" type="checkbox" value="4" id="flexCheckDefault" name="fifth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fifth == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="fifth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fifth == '2') echo "checked='checked'"; ?>class="radio" type="checkbox" value="2" id="flexCheckDefault" name="fifth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fifth == '1') echo "checked='checked'"; ?>class="radio" type="checkbox" value="1" id="flexCheckDefault" name="fifth">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($fifth == '0') echo "checked='checked'"; ?>class="radio" type="checkbox" value="0" id="flexCheckDefault" name="fifth">
                        </div>
                    </td>
                    <td>2</td>

                </tr>
                <tr>
                    <td>f.</td>
                    <td>Ensure compliance with safety reg and bldgs / const codes</td>
                    <td>
                        <div class="form-check">
                            <input <?php if ($six == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="six">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($six == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="six">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($six == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="six">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($six == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="six">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($six == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="six">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($six == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="six">
                        </div>
                    </td>
                    <td>2</td>

                </tr>
                <tr>
                    <td>g.</td>
                    <td>Alloc and manage of resources as per const cycle / ph</td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($seven == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="7">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($seven == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="7">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($seven == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="7">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($seven == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="7">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($seven == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="7">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($seven == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="7">
                        </div>
                    </td>
                    <td>2</td>

                </tr>
                <tr>
                    <td>h.</td>
                    <td>Monitor Stocks / Sch B items to timely handle inadequacies</td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($eight == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="8">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($eight == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="8">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($eight == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="8">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($eight == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="8">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($eight == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="8">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($eight == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="8">
                        </div>
                    </td>
                    <td>2</td>

                </tr>

                <tr>
                    <td>i.</td>
                    <td>Is he Performing Duties relevant to his Qual & Exp and Misc Aspects (If any not covered above) </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($nine == '5') echo "checked='checked'"; ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="9">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($nine == '4') echo "checked='checked'"; ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="9">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($nine == '3') echo "checked='checked'"; ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="9">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($nine == '2') echo "checked='checked'"; ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="9">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($nine == '1') echo "checked='checked'"; ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="9">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input  <?php if ($nine == '0') echo "checked='checked'"; ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="9">
                        </div>
                    </td>
                    <td>2</td>
                </tr>

                <tr>
                    <td colspan="8" align="center"><strong>Total Marks (45)</strong> </td>
                    <?php
                            $table1sum = $first + $second + $third + $fourth + $fifth + $six + $seven + $eight + $nine;
                    ?>
                    <td><strong> <?php echo $table1sum ?> </strong></td>
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
                        <input  <?php if ($eleven == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault1" name="name1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eleven == '1.75') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault2" name="name1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eleven == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault3" name="name1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eleven == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault4" name="name1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eleven == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault5" name="name1">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eleven == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault6" name="name1">
                    </div>
                </td>
                <td>2</td>

            </tr>

            <tr>
                <td>b.</td>
                <td>Acceptance of Responsibility</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twelve == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="name2">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twelve == '1.75') echo "checked='checked'" ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="name2">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twelve == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="name2">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twelve == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="name2">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twelve == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="name2">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twelve == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="" id="flexCheckDefault" name="name2">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>c.</td>
                <td>Comprehension Level</td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($thirteen == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name3">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input   <?php if ($thirteen == '1.75') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name3">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($thirteen == '1.5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name3">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input   <?php if ($thirteen == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name3">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input   <?php if ($thirteen == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name3">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($thirteen == '0') echo "checked='checked'" ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name3">
                    </div>
                </td>
                <td>2</td>
            </tr>
            <tr>
                <td>d.</td>
                <td>Initiative and Drive</td>
                <td>
                    <div class="form-check">
                        <input   <?php if ($fourteen == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name4">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fourteen == '1.75') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name4">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input   <?php if ($fourteen == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name4">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input   <?php if ($fourteen == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name4">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fourteen == '0.5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name4">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fourteen == '0') echo "checked='checked'" ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name4">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>e.</td>
                <td>Appearance & Dress Code</td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fifteen == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name5">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fifteen == '1.75') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name5">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fifteen == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name5">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fifteen == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name5">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fifteen == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name5">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($fifteen == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name5">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>f.</td>
                <td>Respect for Authority</td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($sixteen == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name6">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($sixteen == '1.75') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name6">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($sixteen == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name6">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($sixteen == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name6">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($sixteen == '0.5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name6">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($sixteen == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name6">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>g.</td>
                <td>Self-Discipline - Punctuality / Personal Conduct</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($seventeen == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name7">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($seventeen == '1.75') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name7">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($seventeen == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name7">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($seventeen == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name7">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($seventeen == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name7">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($seventeen == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name7">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>h.</td>
                <td>Team Work</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eighteen == '2') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name8">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eighteen == '1.75') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name8">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eighteen == '1.5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name8">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($eighteen == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name8">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($eighteen == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name8">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($eighteen == '0') echo "checked='checked'" ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name8">
                    </div>
                </td>
                <td>2</td>

            </tr>

            <tr>
                <td>i.</td>
                <td>Innovation & Change </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($nineteen == '2') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name9">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($nineteen == '1.75') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name9">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($nineteen == '1.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name9">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($nineteen == '1') echo "checked='checked'" ?>  class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name9">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($nineteen == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name9">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($nineteen == '0') echo "checked='checked'" ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name9">
                    </div>
                </td>
                <td>2</td>
            </tr>
            <tr>
                <td>j.</td>
                <td>Decision Making / Analytical Skills </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty == '2') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name10">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty == '1.75') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name10">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty == '1.5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name10">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name10">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty == '0.5') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name10">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty == '0') echo "checked='checked'" ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name10">
                    </div>
                </td>
                <td>2</td>
            </tr>
            <?php
                    $table2sum = $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen + $nineteen
             + $twenty;
            ?>
            <tr>
                <td colspan="8" align="center"><strong>Total Marks (20)</strong> </td>
                <td><strong> <?php echo $table2sum ?> </strong></td>
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
                        <input <?php if ($twenty1 == '5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name11">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty1 == '4') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name11">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty1 == '3') echo "checked='checked'" ?>  class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name11">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty1 == '2') echo "checked='checked'" ?>  class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name11">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty1 == '1') echo "checked='checked'" ?>  class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name11">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty1 == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name11">
                    </div>
                </td>
                <td>2</td>

            </tr>

            <tr>
                <td>b.</td>
                <td>Project Implementation within stipulated budget in first PEP</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty2 == '5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name12">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty2 == '4') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name12">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty2 == '3') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name12">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty2 == '2') echo "checked='checked'" ?>  class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name12">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty2 == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name12">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty2 == '0') echo "checked='checked'" ?>  class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name12">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>c.</td>
                <td>Quality Control & Quality Check</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty3 == '5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name13">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty3 == '4') echo "checked='checked'" ?> class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name13">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty3 == '3') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name13">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty3 == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name13">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty3 == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name13">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty3 == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name13">
                    </div>
                </td>
                <td>2</td>
            </tr>
            <tr>
                <td>d.</td>
                <td>Human Resource Managment</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty4 == '5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name14">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty4 == '4') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name14">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty4 == '3') echo "checked='checked'" ?>  class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name14">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty4 == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name14">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty4 == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name14">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty4 == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name14">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>e.</td>
                <td>Power / Tasks Distribution</td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty5 == '5') echo "checked='checked'" ?> class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name15">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty5 == '4') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name15">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty5 == '3') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name15">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty5 == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name15">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty5 == '1') echo "checked='checked'" ?>  class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name15">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty5 == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name15">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <tr>
                <td>f.</td>
                <td>Value Engineering</td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty6 == '5') echo "checked='checked'" ?>  class="radio" type="checkbox" value="5" id="flexCheckDefault" name="name16">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input <?php if ($twenty6 == '4') echo "checked='checked'" ?>  class="radio" type="checkbox" value="4" id="flexCheckDefault" name="name16">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty6 == '3') echo "checked='checked'" ?> class="radio" type="checkbox" value="3" id="flexCheckDefault" name="name16">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty6 == '2') echo "checked='checked'" ?> class="radio" type="checkbox" value="2" id="flexCheckDefault" name="name16">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty6 == '1') echo "checked='checked'" ?> class="radio" type="checkbox" value="1" id="flexCheckDefault" name="name16">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input  <?php if ($twenty6 == '0') echo "checked='checked'" ?> class="radio" type="checkbox" value="0" id="flexCheckDefault" name="name16">
                    </div>
                </td>
                <td>2</td>

            </tr>
            <?php
            $table3sum = $twenty1 + $twenty2 + $twenty3 + $twenty4 + $twenty5 + $twenty6 ;
            ?>
            <tr>
                <td colspan="8" align="center"><strong>Total Marks (30)</strong> </td>
                <td><strong><?php echo $table3sum ?></strong></td>
            </tr>

            </tbody>
        </table>
        <p class = "brac"align="center">Marks Obtain : <?php echo $marksobtain = $table1sum +$table2sum + $table3sum ?> out of 95</p>

        <p class="und">4. Pen Picture</p>
        <i class="fas fa-pencil-alt prefix"></i>
        <div class="form-group shadow-textarea">
            <textarea class="form-control z-depth-1" name="textarea1" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."> <?php echo $textarea1 ?> </textarea>
        </div>

        <br>
        <p class="und">5. Strength (Professional / Personal)</p>
        <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
        <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
        <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
        <i class="fas fa-pencil-alt prefix"></i>
        <div class="form-group shadow-textarea">
            <textarea class="form-control z-depth-1" name="textarea2" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."> <?php echo $textarea2 ?> </textarea>
        </div>
        <br>
        <p class="und">6. Weaknesses (Professional / Personal)</p>
        <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
        <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
        <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
        <i class="fas fa-pencil-alt prefix"></i>
        <div class="form-group shadow-textarea">
            <textarea class="form-control z-depth-1" name="textarea3" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."> <?php echo $textarea3 ?> </textarea>
        </div>

        <br>
        <p class="und">7. Training Needs</p>
        <!-- <p>a. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
        <p>b. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p>
        <p>c. &nbsp&nbsp___________________________________________________________________________________________________________________________________________________________________</p> -->
        <i class="fas fa-pencil-alt prefix"></i>
        <div class="form-group shadow-textarea">
            <textarea class="form-control z-depth-1" name="textarea4" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."> <?php echo $textarea4 ?> </textarea>
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
