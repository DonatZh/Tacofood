<?php

//startimi i sesionit
session_start();

//nese perdoruesi nuk eshte kyq, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['user'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container" style="width:30%;">
	
		
				
				<?php
					$user = "";
					$error = $errorUser = $errorPassword =  "";
					if($_SERVER['REQUEST_METHOD'] == "POST") {
						include "functions/loginValidate.php";
					}
					
					?>

						<form action = "" method = "POST">
							<h2>Login</h2>
							<div class="mb-3">
								<td><input class="form-control" type = "text" name = "userLogin" placeholder = "User" value = "<?php if($errorUser == "") echo $user;?>"></td>
								<td>
									<?php
									echo "<span class='error'>$errorUser<span>";
									?>
								</td>
							</div>
							<div class="mb-3">
								<td><input class="form-control" type = "password" name = "passLogin" placeholder = "Password"></td>
								<td>
									<?php
									echo "<span class='error'>$errorPassword<span>";
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
									<td></td>
								</tr>
							</div>
							<button type="submit" class="btn btn-danger">Login</button>

							
						</form>


	</div>
</body>
</html>
<?php
}
//nese perdoruesi eshte i kyqur
else {
	//atehere ridrejtoje ne faqen baze pas kyqjes
	header("Location: home.php");
}

?>