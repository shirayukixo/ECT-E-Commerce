<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECT - Sign up</title>
        <meta charset="utf-8">
        <link rel="icon" href="./images/favicon.ico">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    
     <body>
		<header>
			<div class="logo">
				<img src="./images/logo.png" alt="ECT logo" width="20%" height="20%">
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product.php">Products</a></li>
					<?php
                        session_start();
						if (isset($_SESSION["login"]) && $_SESSION["login"]) {
							echo '<li>Welcome back, <b>';
							echo $_SESSION["name"];
							echo '</b> | <a href="account.php"><u>Account</u></a> | <a href="./php_database/logout.php"><u>Logout</u></a></li>';
						} else {
							echo '<li><a href="login.php">Sign Up/Log In</a></li>';
						}
					?>
					<li><a href="cart.php">Cart</a></li>
				</ul>
            </nav>
		</header>
        
        <?php
            if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                header("Location: account.php"); 
            } else {
                echo '<center><h1>Welcome new customer!</h1>
                <div class="formBox">
                    <form action="./php_database/signup_submit.php" method="post">
                        <p>Please enter your details.</p>
                        <label for="reg_name"><b>Full Name</b></label>
                        <input type="text" id="reg_name" placeholder="Enter Name" name="name" required><br><br>
                        <label for="reg_address"><b>Address</b></label>
                        <input type="text" id="reg_address" placeholder="Enter Address" name="address" required><br><br>
                        <label for="reg_city"><b>City</b></label>
                        <input type="text" id="reg_city" placeholder="Enter City" name="city" required><br><br>
                        <label for="reg_state"><b>State</b></label>
                        <input type="text" id="reg_state" placeholder="Enter State" name="state" required><br><br>
                        <label for="reg_"><b>Zipcode</b></label>
                        <input type="text" id="reg_zip" placeholder="Enter Zipcode" name="zip" required><br><br>
                        <label for="reg_email"><b>Email</b></label>
                        <input type="email" id="reg_email" placeholder="Enter Email" name="email" required><br><br>
                        <label for="reg_pass"><b>Password</b></label>
                        <input type="password" id="reg_pass" placeholder="Enter Password" name="pass" required><br><br>
                        <p><button type="reset" value="Reset">Reset</button>&nbsp&nbsp<button type="submit">Sign Up</button></p>
                    </form>
                </div></center>';
            }
        ?>
 
         <footer>
			 <small>&copy; 2021 Electronic Computer Trading. All rights reserved.</small>
         </footer>
     </body>
</html>