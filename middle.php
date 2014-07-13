<?php
session_start();
include_once('backend.php');
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
         echo ucwords('Connection To Local Database: Success');
         session_destroy(); // For now will need to make logout function in beta.
         die;
    }else{
         echo ucwords('Connection To Local Database: Failed');
    }
}
?>



