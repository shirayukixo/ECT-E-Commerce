<!DOCTYPE html>
<html>
  
	<head>
		<title>ECT - Log in</title>
        <link rel="icon" href="../images/favicon.ico">
	</head>
	  
	<body>
		<center>
			<?php
            
            // Check database
            include("database.php");
			
			// Starts a session
			session_start();
			
			// servername => localhost | username => root | password => empty | database name => ectdata
			$conn = mysqli_connect("localhost", "root", "", "ectdata");
			  
			// Check connection
			if($conn === false){
				die("Error! Could not connect to database.");
			}
			
			// Check if username and password matches in database
			$result = mysqli_query($conn, "SELECT * FROM customers WHERE email='" . $_REQUEST["email"] . "' AND password = '". $_REQUEST["pass"]."'");
			$row  = mysqli_fetch_array($result);
			
			// If matching data is found
			if (is_array($row)) {
				$_SESSION["login"] = true;
				$_SESSION["name"] = $row['fullname'];
                $_SESSION["custID"] = $row['custID'];
				echo "<h2>You have successfully logged in!<h2><h3>Going back to homepage in 3 seconds...</h3>";
				header("refresh: 3; url=../index.php");
			} else {
				echo "<h2>Invalid email or password!</h2><h3>Going back to log in page in 3 seconds...</h3>";
				header("refresh: 3; url=../login.php");
			}
			
			// Close connection
			mysqli_close($conn);
            
			?>
		</center>
	</body>
  
</html>