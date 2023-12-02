<!DOCTYPE html>
<html>
  
	<head>
		<title>ECT - Sign up</title>
        <link rel="icon" href="../images/favicon.ico">
	</head>
	  
	<body>
		<center>
			<?php
            
            // Check database
            include("database.php");
            
			// servername => localhost | username => root | password => empty | database name => ectdata
			$conn = mysqli_connect("localhost", "root", "", "ectdata");
			  
			// Check connection
			if($conn === false){
				die("Error! Could not connect to database.");
			}

			// Taking all values from the form
			$name = $_REQUEST['name'];
            $address = $_REQUEST['address'];
            $city = $_REQUEST['city'];
            $state = $_REQUEST['state'];
            $zip = $_REQUEST['zip'];
			$email =  $_REQUEST['email'];
			$pass = $_REQUEST['pass'];
			  
			// Insert into database
			$sql = "INSERT INTO customers VALUES (
                NULL,
  				'$name', 
                '$address',
                '$city',
                '$state',
                '$zip',
				'$email',
				'$pass'
			)";
			
            // Check if success
			if (mysqli_query($conn, $sql)) {
				echo "<h2>Registration successful!</h2><h3>Going back to homepage in 3 seconds...</h3>";
			} else {
				echo "<h2>Email already registered.</h2><h3>Going back to homepage in 3 seconds...</h3>";
			}
			  
			// Redirect
			header("refresh: 3; url=../index.php");
			
			// Close connection
			mysqli_close($conn);
            
			?>
		</center>
	</body>
  
</html>