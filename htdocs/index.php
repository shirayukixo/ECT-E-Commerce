<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECT - Home</title>
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

         <main>
			<center><h1>Featured products</h1></center>
            <div class="slideshow">
                <div class="picSlide">
                    <a href="product.php"><img src="./images/slideshow/dell_desktop.png" style="max-height: 100%; max-width: 100%; height: auto;"></a>
                </div>
                <div class="picSlide">
                    <a href="product.php"><img src="./images/slideshow/inspiron.png" style="max-height: 100%; max-width: 100%; height: auto;"></a>
                </div>
                <div class="picSlide">
                    <a href="product.php"><img src="./images/slideshow/moreInspiron.png" style="max-height: 100%; max-width: 100%; height: auto;"></a>
                </div>
                <a class="back" onclick="moveSlide(-1)">&#5130;</a>
                <a class="forward" onclick="moveSlide(1)">&#5125;</a>
            </div>
            <script src="./javascript/slideshow.js"></script>
         </main>

         <footer>
             <div class="footer">
                 <div style="height: 13.1%; width: 33.33%;">
                    <img src="./images/contact.jpg" height="100%" width="100%" alt="contact">
                 </div>
                 <div style="height: 13.1%; width: 33.33%; margin-left: 20px;">
                    <img src="./images/auth.jpg" height="100%" width="100%" alt="auth_dist">
                 </div>
                 <div style="height: 13.1%; width: 33.33%; margin-left: 20px;">
                    <img src="./images/follow.jpg" height="100%" width="100%" alt="followus">
                 </div>
             </div><br>
			 <small>&copy; 2021 Electronic Computer Trading. All rights reserved.</small>
         </footer>
     </body>
</html>