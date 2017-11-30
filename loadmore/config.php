<?php
//Database Configuration
$hostname = "localhost";
$user = "root";
$password = "password";
$database = "codebos";
$prefix = "";
//Loadmore configuarion
$resultsPerPage=5;
$bd = mysql_connect($hostname, $user, $password) or die("Failed to connect to database");
mysql_select_db($database, $bd) or die("Database Not Found");
?>