<<<<<<< HEAD
<?php 

$user = $_POST['user'];
$pass = $_POST['njitpassword'];
$dbpass = $_POST['password'];
//$user = "dp268";
//$pass = "njitpass1";
//$dbpass = "cs490";
$njit=njit_login($user,$pass);
$db=dblogin($user,$dbpass);
		if(!$njit && $db)
		{
			$result->val=0;

		}
		if($njit && !$db)
		{
     		$result->val=1;

		}

		if(!njit && !db)
		{
		$result->val=2;

		}

		function njit_login($user, $pass){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://cp4.njit.edu/cp/home/login");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
			"user"==> $user,
			"pass"==> $pass,
			"uuid"==> ""

			)));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			//logout
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://cp4.njit.edu/cp/home/logout?uP_tparam=frm&frm=");
			curl_exec($ch);
			curl_close($ch);

			return strpos($result, "loginok.html") !=false;

		}

		function dblogin($user,$dbpass){

			$post='user='.$user.$user.'&password='.$dbpass;
			$url='http://web.njit.edu/~ank0/backend.php';
				$ch = curl_init ();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch);
				curl_close($ch);
				return strpos($result, "0") !=false;

		}
			echo json_encode($result);
		?>
=======
<?php

	$user = $_POST['user'];
	$pass = $_POST['njitpassword'];	
	$dbpass = $_POST['password'];
	//$user = "tdt6";
	//$pass = "njitpass1";
	//$dbpass = "tejas";
	$njit=njit_login($user,$pass);
	$db=dblogin($user,$dbpass);
				if($njit && $db)
				{
				
					$result->val=0;  
					
			}
			
			if($njit && !$db)
				{
				
					$result->val=1;  
					
			}
		
		
		if(!$njit && $db)
				{
				
					$result->val=2;  
					
			}
			
			if(!$njit && !$db)
				{
				
					$result->val=3;  
					
			}
		
	function njit_login($user, $pass){
	// user=UCID&pass=pass&uuid=0xACA021
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://cp4.njit.edu/cp/home/login");
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	 	"user" => $user,
	 	"pass" => $pass,
	 	"uuid" => "0xACA021"
	)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	curl_close($ch);
 
	// Logout to kill any sessions
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://cp4.njit.edu/up/Logout?uP_tparam=frm&frm=");
	curl_exec($ch);
	curl_close($ch);
 
	// Return validation bool
	return strpos($result, "loginok.html") !== false;

	}
	
	/*
				if(dblogin($user,$dbpass))
					$result->val=2;
				else
					$result->val=3;
					*/
				//echo dblogin($user, $dbpass);
					
	function dblogin($user, $dbpass){
			//$dbpass = $_POST['password'];
			//$user=$_POST['user'];
        	$post='user='.$user.'&password='.$dbpass;
	$url='http://web.njit.edu/~dp268/backend.php';
        	$ch = curl_init ();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);			
            curl_close ($ch);
			return strpos($result, "0") !== false;
	} 
		echo json_encode($result);
?>
>>>>>>> 38af7cc4cce777f50129216f6a37615d615744ee
