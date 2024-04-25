<?php

//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 1) {

//kjo pamje paraqitet per te gjithe perdoruesit jo-admin ( kur jane te kycur )
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container">

				<?php include 'functions/selectUser.php' ?>
				<br><br><br><br><br><br><br><br><br><br>

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