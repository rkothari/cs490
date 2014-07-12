<?php
/*$mysql_db_hostname = "Host name";
$mysql_db_user = "UserName";
$mysql_db_password = "Password";
$mysql_db_database = "Database Name";*/

$mysql_db_hostname = "localhost";
$mysql_db_user = "";
$mysql_db_password = "";
$mysql_db_database = "490project";

$con = mysql_connect("sql.njit.edu","ako6","Headset1"); or die("Could not connect database");
mysql_select_db("ako6", $con); or die("Could not select database");
?>