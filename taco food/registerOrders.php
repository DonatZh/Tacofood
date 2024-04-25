<?php

//startimi i sesionit
session_start();

//nese perdoruesi eshte kyq ne sistem, atehere paraqitja kete pamje te web faqes
if(isset($_SESSION['user'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container" style="width: 30%;">
		
					<?php
					//se pari na nevojitet te i krijojme (deklarojme) variablat qe permbajne mesazhet e gabimeve qe kane ndodhur para se ti perdorim
					$error = $errorID = $errorName = $errorPrice = "";
					
					//ne te njejten menyre i krijojme edhe variablat qe permbajne vlerat aktuale qe i ka shenuar perdoruesi kur e ka plotesuar formen
					//keto vlera do te shenohen neper fushat perkatese te tekstit permes atributut value, dmth vlerat qe i ka shenuar perdoruesi do te ruhen ne formen derisa te mund te realizohet insertimi i tyre ne db 
					$id= $name = $price = "";
					
					
					//kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						include 'functions/insertOrders.php';
					}
					
					?>
						<form action = "" method = "POST">
						<div class="mb-3">
							<tr>
								<td><input class="form-control" type = "text" name = "id" placeholder = "ID for the new product" value="<?php if($errorID == "") ?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorID<span>";
									?>
								</td>

							</tr>
						</div>
							<!--error-->
					
							<div class="mb-3">
							<tr>
								<td><input class="form-control" type = "text" type = "text" name = "name" placeholder = "Name for the new product" value="<?php if($errorName == "") ?>"></td>
							
							</tr>
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorName<span>";
									?>
								</td>
							</tr>
							<tr>
				</div>


							<div class="mb-3">
							<tr>
								<td><input class="form-control" type = "text" type = "text" name = "price" placeholder = "Price for the new product" value="<?php if($errorPrice == "") ?>"></td>
							</tr>
							<!--errors-->
							<tr>

								<td>
									<?php
									echo "<span class='error'>$errorPrice<span>";
									?>
								</td>
							</tr>

						</div>
						<div>	
						<tr>
								<td>
								<?php
								echo "<span class='error'>$error<span>";
								?>
								</td>
								<td></td>
							</tr>
							</div>
							<br>
							<button type="submit" class="btn btn-danger">Register Order</button>
							
						</form>
	</div>
	<?php include "includes/template/footer.php";?>
</body>
</html>
<?php
}

//nese nuk eshte kyq, atehere ridrejtoje ne faqen baze para kyqjes
else {
	header("Location:login.php");
}

?>