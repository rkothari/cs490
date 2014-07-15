<?php

  // * Tried implementing curl, however it is not hitting or passing
  // * anything to middle/dB. Need advice.

  if (isset($_POST['username'])){ 
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $post ='&username='.$username.'&password='.$password;
  
  // $post = array(
  //  'user' => $user,
  //  'pass' => $pass
  //  );
  
  // echo $post;

  $url = 'localhost:8888/middle.php';
  // $url = 'http:osl81.njit.edu/~dp268/middle.php'
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  echo $response;

}
?>