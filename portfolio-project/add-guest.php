<?php

if(!($_SERVER['REQUEST_METHOD'] == 'post')) {
    header("Location: guestbook.php");
}

require('includes/php-setup.php');
/*
var_dump($_POST);


 * array(6) { ["sid"]=> string(8) "12345678"
 * ["lastName"]=> string(1) "d"
 *  ["firstName"]=> string(1) "j"
 * ["birthdate"]=> string(10) "0001-01-01"
 * ["gpa"]=> string(3) "4.0"
 * ["advisor"]=> string(1) "1" }
 */

$first = $_POST['fname'];
$last = $_POST['lname'];
$job = $_POST['jtitle'];
$company = $_POST['company'];
$linkedin = $_POST['linkedin'];
$email = $_POST['emailaddress'];
$howwemet = $_POST['meeting'];
$comments = $_POST['comments'];

//VALIDATE DATA BEFORE INSERTING INTO DATABASE [PREVENT SQL INJECTIONS]

$sql = "INSERT INTO guestlist(first,last,jobtitle,company,linkedin,email,howwemet,comments)
        VALUES($first,$last,$job,$company,$linkedin,$email,$howwemet,$comments);";
$success = mysqli_query($cnxn, $sql);

if($success) {
    echo "<h3>New Student Added!</h3>";
}
else {
    echo "<h3>A Problem Ocurred</h3>";
}
?>