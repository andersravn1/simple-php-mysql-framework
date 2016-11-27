<?php

$mysql_host = ""; //host of your MySQL database
$mysql_username = ""; //username of the account which are going to be using this - DO NOT USE ROOT FOR THIS
$mysql_password = ""; //password of the account - If no password, leave it empty
$mysql_database = ""; //database where you wish to operate.
$mysql_connection = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);

?>

