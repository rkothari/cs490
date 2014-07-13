<?php
  session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
function logout(){
  
  session_start();
  session_destroy();
  header('location:login.php');
  
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Ajax Login Validation Tutorial | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
    <div id='tutorialHead'>
         <div class="tutorialTitle"><h1>PHP Ajax Login Validation Tutorial</h1></div>
         <div class="tutorialLink"><a href="http://www.91weblessons.com/php-ajax-login-validation-tutorial" title="PHP Ajax Login Validation Tutorial"><h1>Tutorial Link</h1></a></div>

         <div class="logout"><a href="logout.php" title="logout"><h1>Logout</h1></a></div>

    </div>

    <div id="wrapper">
         <div class="user_intro"><h1>Welcome <?php echo $_SESSION['UNAME'];?></h1></div>
    </div>

</div>
</body>
</html>
