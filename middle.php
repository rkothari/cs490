<?php

include_once('local_db.php');
ini_set('display_errors',1);
error_reporting(E_ALL);

$empty_field=array();
if(isset($_POST['username']) && !empty($_POST['username'])){
    $username=mysql_real_escape_string($_POST['username']);
}else{
    $empty_field[]='Incorrect Username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysql_real_escape_string($_POST['password']);
}else{
    $empty_field[]='Incorrect Password';
}

$char_error=count($empty_field);

if($char_error > 0){
     for($i=0;$i<$char_error;$i++){
              echo ucwords($empty_field[$i]).'<br/><br/>';
     }
}else{
    $query="select * from user where username='$username' and password='$password'";
    $res=mysql_query($query);
    $user_confirmation=mysql_num_rows($res);
    if($user_confirmation > 0){
         $_SESSION['LOGIN_STATUS']=true;
         $_SESSION['username']=$username;
         $success_message = ('You are logged in! Hello: ' . $username);
         session_start();
         echo $success_message;
    }else{
        $error_message =('Incorrect Credientals. Please try again.');
        echo $error_message;
    }
}

?>



