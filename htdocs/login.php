<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECT - Log in</title>
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
                echo '<center><h1>Welcome back!</h1>
                    <div class="formBox">
                        <form action="./php_database/login_submit.php" method="post">
                            <p>Please enter your login details.</p>
                            <label for="login_email"><b>Email</b></label>
                            <input type="email" id="login_email" placeholder="Enter Email" name="email" required><br><br>
                            <label for="login_pass"><b>Password</b></label>
                            <input type="password" id="login_pass" placeholder="Enter Password" name="pass" required><br>
                            <p><button type="submit">Log In</button></p>
                            </form>
                        <small><p>New to the site? Click <a href="signup.php"><b><u>here</u></b></a> to register.</p></small>
                    </div></center>';
            }
        ?>
		
         <footer>
			 <small>&copy; 2021 Electronic Computer Trading. All rights reserved.</small>
         </footer>
     </body>
</html>