<?php

//connect.php
//Connect to database
function connect()
{
$username = 'jdonalds_grcuser';
$password = 'kZ6B+7OHl_Fl';
$hostname = 'localhost';
$database = 'jdonalds_grc';
$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("Error connecting to database");
return $cnxn;
}