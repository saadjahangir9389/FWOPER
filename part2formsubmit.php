<?php
$database = 'admins';
$host = 'localhost';
$user = 'root';
$pass = '';
$con = mysqli_connect("localhost", "root", "", "admins");


session_start();
$role = $_SESSION['sess_userrole'];
if(!isset($_SESSION['sess_username']) && $role!="1"){
    header('Location: index.php?err=2');
}
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


?>