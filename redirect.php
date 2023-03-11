
<?php 
// this code is for redirecting to different pages if the credentials are correct.
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
      	if ($_SESSION['username'] == 'ali'){
			header("Location: pages/kaatje/home.html");
      	 }
		 else if ($_SESSION['username'] == 'muema'){ 
			header("Location: https://www.telenet.be");
      	} 
		  else if ($_SESSION['username'] == 'ian'){ 
			header("Location: https://www.hln.be");	
		}
		else if ($_SESSION['username'] == 'sera'){ 
			header("Location: https://www.destandaard.be");
		}
		else if ($_SESSION['username'] == 'karelvdz'){ 
			header("Location: pages/karelvdz/index.html");
		}
		else if ($_SESSION['username'] == 'pieter'){ 
			header("Location: pages/pieter/index.html");
		}
 }
else{
	header("Location:login-index.php");
} ?>
