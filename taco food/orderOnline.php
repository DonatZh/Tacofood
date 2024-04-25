<?php

//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 2) {

//kjo pamje paraqitet per te gjithe perdoruesit jo-admin ( kur jane te kycur )
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Online</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<!--<div id="container">-->
		<?php include "includes/template/nav.php";?>
		<div class="container" style="width: 30%;">
		<?php
			//se pari na nevojitet te i krijojme (deklarojme) variablat qe permbajne mesazhet e gabimeve qe kane ndodhur para se ti perdorim
			$error = $errorUser = $errorAddress = $errorPhone = $errorQty = $errorProducts = "";
			
			//ne te njejten menyre i krijojme edhe variablat qe permbajne vlerat aktuale qe i ka shenuar perdoruesi kur e ka plotesuar formen
			//keto vlera do te shenohen neper fushat perkatese te tekstit permes atributut value, dmth vlerat qe i ka shenuar perdoruesi do te ruhen ne formen derisa te mund te realizohet insertimi i tyre ne db 
			$products = $idU = $address =  $phone = $qty ="";
			$products = "Select the order";
			
			
			//kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				include 'functions/orderProducts.php';
			}
			?>
			
		<form action = "" method = "POST">
			<div class="mb-3">
				<td><input class="form-control" type = "text" name = "idU" placeholder = "User" value="<?php if($errorUser == "");?>"></td>
				<td>
					<?php
					echo "<span class='error'>$errorUser<span>";
					?>
				</td>
			</div>
			<div class="mb-3">
				<td><input class="form-control" type = "text" name = "address" placeholder = "Address" value="<?php if($errorAddress == "");?>"></td>
				<td>
					<?php
					echo "<span class='error'>$errorAddress<span>";
					?>
				</td>
			</div>
			<div class="mb-3">
				<td><input class="form-control" type = "text" name = "phone" placeholder = "Phone number" value="<?php if($errorPhone == "");?>"></td>
				<td>
					<?php
					echo "<span class='error'>$errorPhone<span>";
					?>
				</td>
			</div>
			<div class="mb-3">
				<select name = "products" class="form-control">
					<option value = "<?php echo $products;?>"><?php echo $products;?></option>
					<?php include "functions/selectMenu1.php";?>
				</select>
				<td >
					<?php
					echo "<span class='error'>$errorProducts<span>";
					?>
				</td>
			</div>
			<div class="mb-3">
				<td><input class="form-control" type = "text" name = "qty" placeholder = "QTY" value="<?php if($errorQty == "")?>"></td>
				<td>
					<?php
					echo "<span class='error'>$errorQty<span>";
					?>
				</td>
			</div>
			<div class="mb-3">
			<tr>
			<td>
				<?php
				echo "<span class='error'>$error<span>";
				?>
				</td>
			</tr>
			</div>
			

			

			
			<button type="submit" class="btn btn-danger">Submit</button>
		</form>
		</div>
		
				<?php
					//se pari na nevojitet te i krijojme (deklarojme) variablat qe permbajne mesazhet e gabimeve qe kane ndodhur para se ti perdorim
					$error = $errorUser = $errorAddress = $errorPhone = $errorQty = $errorProducts = "";
					
					//ne te njejten menyre i krijojme edhe variablat qe permbajne vlerat aktuale qe i ka shenuar perdoruesi kur e ka plotesuar formen
					//keto vlera do te shenohen neper fushat perkatese te tekstit permes atributut value, dmth vlerat qe i ka shenuar perdoruesi do te ruhen ne formen derisa te mund te realizohet insertimi i tyre ne db 
					$products = $idU = $address =  $phone = $qty ="";
					$products = "Select the order";
					
					
					//kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						include 'functions/orderProducts.php';
					}
					?>
	
	
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