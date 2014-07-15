<?php
  session_start();
  if(isset($_SESSION['LOGIN_STATUS']) && !empty($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
  // * Tried implementing curl, however it is not hitting or passing
  // * anything to middle/dB. Need advice.

  // if (isset($_POST['user'])){ 
  // $user = $_POST['user'];
  // $pass = $_POST['pass'];
  
  // $post ='&user='.$user.'&pass='.$pass;
  
  // // $post = array(
  // //  'user' => $user,
  // //  'pass' => $pass
  // //  );
  
  // echo $post;

  // $url = 'http://localhost:8888/middle.php';
  // // $url = 'http:osl81.njit.edu/~dp268/middle.php'
  // $ch = curl_init();
  // curl_setopt($ch, CURLOPT_URL, $url);
  // curl_setopt($ch, CURLOPT_POST, true);
  // curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  // $response = curl_exec($ch);
  // curl_close($ch);
  // echo $response;

?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CS490</title>
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="css/foundation.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">


function validLogin(){
       var username=$('#username').val();
       var password=$('#password').val();

      var dataString = 'username='+ username + '&password='+ password;
      $.ajax({
      type: "POST",
      url: "curl.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               if(result=='correct'){
                     window.location='login.php';
                     $("#successMessage").html(result);
               }else{
                     $("#errorMessage").html(result);
               }
      }
      });
}

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>

</head>
<body class="blackboard">
   <div id="head">
      CS 101 ExamLocation
    </div>
    <br/>
    <br/>
    <br/>
    <div class="row"> 
      <div class="small-4 small-centered columns">
  <div>
    <p id="errorMessage"></p>
    <p id="successMessage"></p>    
      <form>
        <h5 class="white">User Name:</h5>
        <input type="text" name="username" id="username">
        <h5 class="white">Password:</h5>
        <input type="password" name="password" id="password">
        <div class="right">
        <input type="button" class="button"id="loginstyle"  name="submit" value="Submit" onclick="validLogin()">
        </div>
      </form>
  </div>
        </div>
    </div>
</body>
</html>
</html>
