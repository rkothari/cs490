<!--<?php
      <?php echo $_POST['username']; ?>
      <?php echo $_POST['password']; ?>
?> -->

<!DOCTYPE html>
  <header>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
  </header>
  
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
        <form action="" method="post">
            <h5 class="white">User Name:</h5>
            <input type="text" name="user">
            <h5 class="white">Password:</h5>
            <input type="password" name="pass">
            <button class="right" id="loginstyle" type="submit" name="submit" value="Login">Login</button>
        </form>
      <!-- <?php echo $_POST['username']; ?>
       <?php echo $_POST['password']; ?> -->
        </div>
      </div>
    </div>
  </body>
</html>