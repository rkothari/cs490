<?php
  session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CS490</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
</head>
<body>
<div id="container">
         <!-- <div class="logout"><a href="logout.php" title="logout"><h1>Logout</h1></a></div> -->

    <div>
         <div><h1>Welcome <?php echo $_SESSION['UNAME'];?></h1></div>
    </div>

</div>
</body>
</html>
