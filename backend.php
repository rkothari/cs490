<?php

// Connecting to the database
mysql_connect("sql.njit.edu","ako6","admin");
mysql_select_db("ako6");

ob_start();
$host="sql.njit.edu"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="ako6"; // Database name 
$table_name="user"; // Table name 

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $table_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>