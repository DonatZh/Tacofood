<?php

//startimi i sesionit
session_start();

//nese perdoruesi nuk eshte kyq, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['user'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container" style="width:30%">
				
					<?php
					//se pari na nevojitet te i krijojme (deklarojme) variablat qe permbajne mesazhet e gabimeve qe kane ndodhur para se ti perdorim
					$error = $errorFN = $errorLN = $errorUser = $errorAddress = $errorPhone = $errorEmail = $errorRole = $errorPassword  =  $errorPassTooltip = "";
					
					//ne te njejten menyre i krijojme edhe variablat qe permbajne vlerat aktuale qe i ka shenuar perdoruesi kur e ka plotesuar formen
					//keto vlera do te shenohen neper fushat perkatese te tekstit permes atributut value, dmth vlerat qe i ka shenuar perdoruesi do te ruhen ne formen derisa te mund te realizohet insertimi i tyre ne db 
					$firstname = $lastname = $user = $address = $phone = $role = $email = $password =  "";
					
					
					//kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						include 'functions/registerValidate.php';
					}
					
					?>
						<form action = "" method = "POST">
						<div class="mb-3">
							<tr>
								<td><input class="form-control" type = "text" name = "firstname" placeholder = "First Name" value="<?php if($errorFN == "") echo $firstname;?>"></td>
								
							</tr>
						
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorFN<span>";
									?>
								</td>

							</tr>
						</div>

						<div class="mb-3">
                            <tr>
								<td><input class="form-control" type = "text" name = "lastname" placeholder = "Last Name" value="<?php if($errorLN == "") echo $lastname;?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorLN<span>";
									?>
								</td>

							</tr>
						</div>
                        
						<div class="mb-3">
                            <tr>
								<td><input class="form-control" type = "text" name = "user" placeholder = "User" value="<?php if($errorUser == "") echo $user;?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorUser<span>";
									?>
								</td>
							</tr>
						</div>

						<div class="mb-3">
                            <tr>
								<td><input class="form-control" type = "text" name = "address" placeholder = "Address" value="<?php if($errorAddress == "") echo $address;?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorAddress<span>";
									?>
								</td>
							</tr>
				</div>

				<div class="mb-3">
                            <tr>
								<td><input class="form-control" type = "text" name = "phone" placeholder = "Phone" value="<?php if($errorPhone == "") echo $phone;?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorPhone<span>";
									?>
								</td>
							</tr>
				</div>

				<div class="mb-3">
                            <tr>
								<td><input class="form-control" type = "text" name = "email" placeholder = "Email" value="<?php if($errorEmail == "") echo $email;?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorEmail<span>";
									?>
								</td>
							</tr>
				</div>
				<div class="mb-3">
					<select name = "role" class="form-control">
						<option value = "Select type">Select type</option>
						<option value = "1">Admin</option>
						<option value = "2">User</option>
					</select>
					<td >
						<?php
						echo "<span class='error'>$errorRole<span>";
						?>
					</td>
				</div>

				<div class="mb-3">
                            <tr>
								<td><input class="form-control" type = "password" name = "password" placeholder = "Password" value="<?php if($errorPassword == "") echo $password;?>"></td>
								
							</tr>
							<!--errors-->
							<tr>
								<td>
									<?php
									echo "<span class='error'>$errorPassword<span>";
									?>
								</td>
							</tr>
				</div>
				<div class="mb-3">
								<tr>
									<td>
									<?php
									echo "<span class='error'>$error<span>";
									?>
									</td>
									<td></td>
								</tr>
							</div>
							
				<button type="submit" class="btn btn-danger">Register</button>
						</form>
				</div>
</body>
</html>
<?php
}

//nese perdoruesi eshte i kyqur, atehere ridrejtoje ne faqen baze pas kyqjes
else {
	header("Location: home.php");
}
?>