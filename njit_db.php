<?php

$hostname = "sql2.njit.edu";
$user = "dp268";
$password = "admin";
$database = "dp268";

$connection = mysql_connect($hostname, $user, $password) 

if (!$connection) 
{
	$db_error=mysql_error();
}

$username=$_POST['username']
$password=$_POST['password']

if (!isset($db_error)) {
	mysql_select_db($database, $connection);
	$query= mysql_query("SELECT * FROM StudentLogin WHERE StudentUserName = '$username' AND StudentPwd = '$password' ");
	if (mysql_affected_rows() == 1)
	{
		$answer = array('status' => 'success' , 'message' => "Sucess");
	}
	else
	{
		$answer  = array('status' => 'success' , 'message' => "Unsucessful");
	}
	}
else
{
		$answer = array('status' => 'error' , 'message' => "error");
}	

}
echo json_encode($answer);
?