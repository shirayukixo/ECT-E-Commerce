<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ECT - Account</title>
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
		
		<center><h1>Purchase history</h1>
		<div class="table">
            <table border="1">
                <tr>
                    <th class="tabledate">Purchase Date</th>
                    <th class="tabletime">Time</th>
                    <th class="tablename">Item Name</th>
                    <th class="tablebrID">Bank Reference ID</th>
                    <th class="tableprice">Price</th>
                </tr>
                <?php
                    if (isset($_SESSION["login"]) && $_SESSION["login"]) {
                        $conn = mysqli_connect("localhost", "root", "", "ectdata");
                        
                        $query = " SELECT purchases.purchaseID, purchases.date, purchases.time, purchases.bankrefID, products.productName, products.price 
                            FROM purchases, products 
                            WHERE purchases.custID = '" . $_SESSION["custID"] . "' AND purchases.productID = products.productID 
                            ORDER BY purchases.purchaseID DESC";
                        
                        $result = mysqli_query($conn, $query);
                        
                        // Loop through results
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>
                                <td class="tabledate">' . $row['date'] . '</td>
                                <td class="tabletime">' . $row['time'] . '</td>
                                <td class="tablename">' . $row['productName'] . '</td>
                                <td class="tablebrID">' . $row['bankrefID'] . '</td>
                                <td class="tableprice">RM' . $row['price'] . '</td>
                                </tr>';
                        }
                        
                        mysqli_close($conn);
                    } else {
                        header("Location: login.php"); 
                    }
                ?>
            </table>
		</div></center>

         <footer>
			 <small>&copy; 2021 Electronic Computer Trading. All rights reserved.</small>
         </footer>
     </body>
</html>