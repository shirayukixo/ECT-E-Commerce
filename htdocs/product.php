<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECT - Products</title>
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
		
		<center>
            <h1>List of products</h1>
            <h3><i>Get special discounts when you register!</i></h3>
        </center>
		<div class="box">
			<img src="./images/products/aio.jpg" alt="5477T" height="30%" width="30%">
			<h2>DELL INSPIRON 24 5477T AIO DESKTOP</h2>
            <?php
                if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                    echo '<p class="price"><s>RM4399.00</s> RM3499.00</p>';
                } else {
                    echo '<p class="price">RM4399.00</p>';
                }
            ?>
			<p class="info">8th Generation Intel® Core i5-8400T processor (9MB Cache, up to 4.0 GHz)<br>
			Windows 10 Home 64bit English<br>
			8GB (1X8) 2666MHz DDR4 Non-ECC<br>
			2TB 7200rpm Hard Drive<br>
			NVIDIA GeForce GTX 1050 with 4GB GDDR5<br>
			23.8-inch FHD (1920 x 1080) Anti-Glare Narrow Border AIT Infinity Touch Display with Wide Viewing Angle (IPS)<br>
			802.11ac + Bluetooth 4.1, Dual Band 2.4&5 GHz, 2x2<br>
			Integrated HD (720p) webcam, Wide, quad array digital microphones<br><br>
			<small><i>Limited quantity available. While stock last.</i></small>
			</p>
			<?php
				if (isset($_SESSION["login"]) && $_SESSION["login"]) {
					echo '<p><button><a href="cart.php">Buy now</a></button></p>';
				} else {
					echo '<p><button><a href="login.php">Sign in/Register to buy now!</a></button></p>';
				}
			?>
		</div>
		
		<div class="box">
			<img src="./images/products/inspiron.jpg" alt="INS_3581" height="30%" width="30%">
			<h2>DELL INSPIRON 15 3581 LAPTOP</h2>
            <?php
                if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                    echo '<p class="price"><s>RM2899.00</s> RM1899.00</p>';
                } else {
                    echo '<p class="price">RM2899.00</p>';
                }
            ?>
			<p class="info">7th Generation Intel® Core™ i3-7020U Processor (3MB Cache, 2.30 GHz)<br>
			Windows 10 Home Single Language(64bit)<br>
			Intel HD Graphics 620<br>
			15.6-inch HD (1366 x 768) Anti-Glare LED-Backlit Non-touch Display<br>
			4GB, 4GBx1, DDR4 2666MHz<br>
			1TB 5400 rpm 2.5" SATA Hard Drive<br>
			Tray load DVD Drive (Reads and Writes to DVD/CD)<br>
			Integrated widescreen HD (720p) Webcam with Single Digital Microphone<br>
			802.11ac 1x1 WiFi and Bluetooth<br><br>
			<small><i>Limited quantity available. While stock last.</i></small>
			</p>
			<?php
				if (isset($_SESSION["login"]) && $_SESSION["login"]) {
					echo '<p><button><a href="cart.php">Buy now</a></button></p>';
				} else {
					echo '<p><button><a href="login.php">Sign in/Register to buy now!</a></button></p>';
				}
			?>
		</div>
		
		<div class="box">
			<img src="./images/products/inspiron2.jpg" alt="Denim Jeans" height="30%" width="30%">
			<h2>DELL INSPIRON 15 3565 NOTEBOOK</h2>
            <?php
                if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                    echo '<p class="price"><s>RM2599.00</s> RM1599.00</p>';
                } else {
                    echo '<p class="price">RM2599.00</p>';
                }
            ?>
			<p class="info">7th Generation AMD E2-9000 Processor with Radeon™ R2 Graphics (Up to 2.20Ghz, Base Speed 1.80 Ghz)<br>
			Windows 10 Home 64-bit English<br>
			1TB Hard Disk Drive<br>
			4GB, 2400MHz, DDR4; up to 16GB<br>
			Integrated graphics with AMD APU<br>
			15.6-inch HD (1366 x 768) Truelife LED-Backlit On-Cell Touch Display<br>
			Integrated widescreen HD (720p) Webcam with Single Digital Microphone<br>
			802.11ac + Bluetooth 4.1, Dual Band 2.4&5Ghz, 1x1<br>
			40 Whr, 4-Cell Battery (removable)<br><br>
			<small><i>Limited quantity available. While stock last.</i></small>
			</p>
			<?php
				if (isset($_SESSION["login"]) && $_SESSION["login"]) {
					echo '<p><button><a href="cart.php">Buy now</a></button></p>';
				} else {
					echo '<p><button><a href="login.php">Sign in/Register to buy now!</a></button></p>';
				}
			?>
		</div>

         <footer>
			 <small>&copy; 2021 Electronic Computer Trading. All rights reserved.</small>
         </footer>
     </body>
</html>