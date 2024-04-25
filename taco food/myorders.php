<?php

//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 2) {

//kjo pamje paraqitet per te gjithe perdoruesit (edhe kur jane te kycur edhe kur nuk jane kyc ende)
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Orders</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container" style="width: 30%;">
		
		
				<?php 
				$error = "";
				$user = "";
				
				//kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						include 'functions/selectMyOrders.php';
					}
				?>
				
					<form action = "" method = "POST">
						<div class="mb-3">
							<td><input class="form-control" type = "text" name = "user" placeholder = "User" value="<?php if($error == "");?>"></td>
							<td>
								<?php
								echo "<span class='error'>$error<span>";
								?>
							</td>
						</div>
						<button type="submit" class="btn btn-danger">Submit</button>
					</form>
					<br><br>
			
	</div>
	<?php include "Includes/template/footer.php";?>
</body>
</html>
<?php
	}
	else {
		header("Location: home.php");
	}
}

else {
	header("Location: login.php");
}
?>