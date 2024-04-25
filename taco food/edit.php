<?php 

//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 1) {

require 'functions/connect.php';
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ndrysho Produkte</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container">
		<form action = "" method = "GET">
		<div class="mb-3">
				<td><input class="form-control" type = "text" name = "id" placeholder = "" value="<?php echo "$id" ?>"></td>
					</div>
					<div class="mb-3">
				<td><input class="form-control" type = "text" name = "name" placeholder = "" value="<?php echo "$name" ?>"></td>
					</div>
					<div class="mb-3">
				<td><input class="form-control" type = "text" name = "price" placeholder = "" value="<?php echo "$price" ?>"></td>
					</div>
					<button type="submit" class="btn btn-danger" name="edit">Edit</button>
		</form>	
	</div>

	<?php include "includes/template/footer.php";?>
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
if(isset ($_GET['edit'])) {
	$id = $_GET['id'];
	$name = $_GET['name'];
	$cmimi = $_GET['price'];
	require 'functions/connect.php';
	$query1 = mysqli_query($connect, "UPDATE menu
							SET id='$id', name='$name',price='$price' WHERE id='$id';");
}
?>