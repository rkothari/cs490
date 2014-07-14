<?php

$hostname = "sql2.njit.edu";
$user = "dp268";
$password = "admin";
$database = "dp268";

$connection = mysql_connect($hostname, $user, $password) or die ("Database Could Not Be Accessed");

mysql_select_db($database, $connection) or die ("Database Could Not Be Accessed");

?>