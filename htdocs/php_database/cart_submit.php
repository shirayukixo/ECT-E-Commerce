<!DOCTYPE html>
<html>
  
	<head>
		<title>ECT - Purchase Confirmed</title>
        <link rel="icon" href="../images/favicon.ico">
	</head>
	  
	<body>
		<center>
			<?php
            
            // Check database
            include("database.php");
            
            // Starts a session
            session_start();
            
			// Connect to database
			$conn = mysqli_connect("localhost", "root", "", "ectdata");
			  
			// Check connection
			if($conn === false){
				die("Error! Could not connect to database.");
			}
            
            // Set to Malaysia time
            date_default_timezone_set('Asia/Kuala_Lumpur');
			
            // To check if values are added to database
            $added = 0;
            $count = count($_POST['pc']);
            
            // Go through each value for the array
            foreach($_REQUEST['pc'] as $pc) {
                // Taking values from the form
                $product= $pc;
                $custID = $_SESSION["custID"];
                $brID = $_REQUEST['brID'];
                $date = date("d/m/y");
                $time = date("g:i a");
                  
                // Query to be used
                $sql = "INSERT INTO purchases VALUES (
                    NULL,
                    '$custID',
                    '$product',
                    '$brID',
                    '$date',
                    '$time'
                )";
                
                // If success increase amount added to database by 1
                if(mysqli_query($conn, $sql)) $added++;
            }
			
            // Check if values added to database is the same amount as received values
			if ($added == $count) {
				echo "<h2>Your purchase has been confirmed!</h2><h3>Going back to homepage in 3 seconds...</h3>";
			} else {
				echo "<h2>Error, purchase not successful.</h2><h3>Going back to homepage in 3 seconds...</h3>";
			}
			  
			// Redirect
			header("refresh: 3; url=../index.php");
			
			// Close connection
			mysqli_close($conn);
            
			?>
		</center>
	</body>
  
</html>