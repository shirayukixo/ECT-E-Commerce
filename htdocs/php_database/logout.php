<!DOCTYPE html>
<html>
  
	<head>
		<title>ECT - Log Out</title>
        <link rel="icon" href="../images/favicon.ico">
	</head>
	  
	<body>
		<center>
			<?php
			
			// Starts a session
			session_start();
			
			// Remove name and custID
			unset($_SESSION["name"]);
			unset($_SESSION["custid"]);
			$_SESSION["login"] = false;
			
			// Redirect
			echo "<h2>You have successfully logged out!<h2><h3>Going back to homepage in 3 seconds...</h3>";
			header("refresh: 3; url=../index.php");
            
			?>
		</center>
	</body>
  
</html>