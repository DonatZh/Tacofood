<div class="nav">
        <a href="home.php" class="nav-a">Home</a>
		<a href="menu.php" class="nav-a">Menu</a>
        <a href="aboutUs.php" class="nav-a">About Us</a>

	<?php
	if(!isset($_SESSION['user'])) { 
		echo '<a href="register.php" class="nav-a">Register</a>';
		echo '<a href="login.php" class="nav-a">Login</a>';
		
	}
	else {
		if(isset($_SESSION['role'])) {
			//admin
			if($_SESSION['role'] == 1) {
				echo '<a href="registerOrders.php" class="nav-a">Register Orders</a>';
				echo '<a href="menuAdmin.php" class="nav-a">Menu Admin</a>';
				echo '<a href="orders.php" class="nav-a">Orders</a>';
				echo '<a href="users.php" class="nav-a">Users</a>';
				echo '<a href="xml.php" class="nav-a">XML</a>';
				echo '<a href="functions/logout.php" class="nav-a">Logout</a>';
				
                
			}
			//user2
			else if($_SESSION['role'] == 2) {
				echo '<a href="orderOnline.php" class="nav-a">Order Online</a>';
				echo '<a href="myorders.php" class="nav-a">My Orders</a>';
                echo '<a href="functions/logout.php" class="nav-a">Logout</a>';
				echo '<a href="functions/logout.php">Call Here +383 4* *** ***</a>';
                
			}
		}
      
	}
	?>
</div>