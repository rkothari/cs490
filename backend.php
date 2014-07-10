<?php
	$user = $_POST['user'];
	$password = $_POST['password'];
	//$user = "tdt6";
	//$password = "tejas";
				require("connect.php");
				//a method to encript the password...
				$password = md5(md5("Secure".$password."Password"));
				$query = mysql_query("SELECT * FROM 490new WHERE username='$user' AND password='$password'");
				$numrows = mysql_num_rows($query);
				
					if($numrows == 1) {
						$response->val=0;
					}
					else {
						$response->val=1;
					}
					echo json_encode($response);
					
?>