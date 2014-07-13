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
<link rel="stylesheet" type="text/css" href="css/style.css" />
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
      url: "processed.php",
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
<body>
    <div id="wrapper">
         <table align="center" class="login_box">
              <tr><td colspan="2" id="errorMessage"></td></tr>
              <tr>
                 <td>UserName</td>
                 <td><input type="text" name="uname" id="uname"></td>
              </tr>
              <tr>
                 <td>Password</td>
                 <td><input type="password" name="password" id="password"></td>
              </tr>
              <tr id="button_box">
                 <td>&nbsp</td>
                 <td><input type="button" name="submit" value="Submit" class="button" onclick="validLogin()"></td>
              </tr>
              <tr><td colspan="2" id="flash"></td></tr>
         </table>
    </div>
</div>
</body>
</html>
