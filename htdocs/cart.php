<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECT - Cart</title>
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
				echo '<center><h2>Please enter the following details to confirm your order</h2>
                <div class="formBox">
                    <h4><center>Select the product you wish to buy</center></h4>
                    <h5><center>Please transfer the money to our bank account number before submitting: 514019999999</center></h5>
                    <p><b>Total: <span id="total">RM0.00</span></b></p>
                    <form action="./php_database/cart_submit.php" method="post">
                        <input type="checkbox" id="prod1" name="pc[]" value="101" onchange="showTotal()">
                        <label class="selection" for="prod1">Dell Inspiron 24 5477T (RM3499.00)</label><br>
                        <input type="checkbox" id="prod2" name="pc[]" value="102" onchange="showTotal()">
                        <label class="selection" for="prod2">Dell Inspiron 15 3581 Laptop (RM1899.00)</label><br>
                        <input type="checkbox" id="prod3" name="pc[]" value="103" onchange="showTotal()">
                        <label class="selection" for="prod3">Dell Inspiron 15 3565 Notebook (RM1599.00)</label>
                        <label for="brID"><br>Bank Reference ID:</b></label>
                        <input type="text" placeholder="Enter Bank Reference ID" name="brID" required><br><br>
                        <p><button type="submit" value="Submit">Submit</button></p>
                    </form>
                    <h5><center>Note: We will send the product once we verify the transaction</center></h5>
                    <script src="./javascript/cartTotal.js"></script>
                </div></center>';
			} else {
				echo '<br><br><center><h1>You must first log in to be able to purchase!</h1><h2>Click <a href="login.php"><u>here</u></a> to log in or make a <a href="signup.php"><u>new account</u></a></h2></center><br><br>';
			}
        ?>
       
         <footer>
			 <small>&copy; 2021 Electronic Computer Trading. All rights reserved.</small>
         </footer>
     </body>
</html>