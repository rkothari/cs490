<?php

$hostname = "localhost";
$user = "root";
$password = "root";
$database = "test";

$connection = mysql_connect($hostname, $user, $password) or die("Database Could Not Be Accessed");

mysql_select_db($database, $connection) or die("Database Could Not Be Accessed");

?>