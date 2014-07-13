<?php
  session_start();
  if(isset($_SESSION['LOGIN_STATUS']) && !empty($_SESSION['LOGIN_STATUS'])){
      header('location:index.php');
  }
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LEARNING4U</title>
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="css/foundation.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">


function validLogin(){
      var uname=$('#uname').val();
      var password=$('#password').val();

      var dataString = 'uname='+ uname + '&password='+ password;
      $("#flash").show();
      $("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: "middle.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               $("#flash").hide();
               if(result=='correct'){
                     window.location='index.php';
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
      <form>
        <h5 class="white">User Name:</h5>
        <input type="text" name="uname" id="uname">
        <h5 class="white">Password:</h5>
        <input type="password" name="password" id="password">
        <div class="right">
        <input type="button" class="button"id="loginstyle"  name="submit" value="Submit" onclick="validLogin()">
        </div>
      </form>
    <p id="flash"></p>
  </div>
        </div>
    </div>
</body>

</html>
<!-- <body class="blackboard">

   <div>
       <p id="errorMessage"></p>
          <form>
                <h5 class="white">User Name: </h5>
                <input type="text" name="uname" id="uname"></td>
                <h5 class="white">Password: </h5>
                <input type="password" name="password" id="password">
                <input type="button" name="submit" value="Submit" class="button" onclick="validLogin()">
      </form>
    <p id="flash"></p>
   </div>
</div>
</body> -->
</html>
