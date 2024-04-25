<?php

//startimi i sesionit
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['role'])) {
	if($_SESSION['role'] == 1) {

//kjo pamje paraqitet per te gjithe perdoruesit (edhe kur jane te kycur edhe kur nuk jane kyc ende)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Menu</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div id="container">
		<?php include "includes/template/nav.php";?>
		
		<div class="content main">
				<div class="sec">
<?php
require "functions/connect.php";

$query1 = mysqli_query($connect, "SELECT * FROM menu;");
echo "<table border=1>
		<tr class='exams'>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th></th>
		</tr>";

while($row1 = mysqli_fetch_assoc($query1)) {
	$id = $row1['id'];
	$name = $row1['name'];
	$price = $row1['price'];

	
	echo "<tr class='exams'>
			<td>$id</td>
			<td>$name</td>
			<td>$price</td>
			<td><a href='edit.php?id=$row1[id]&name=$row1[name]&price=$row1[price]' class='btn'>Edit</a></td>
		</tr>";
}

echo "</table>";
?>
</div>
			</div>
			<?php include "includes/template/aside.php"?>
			<?php include "includes/template/footer.php";?>
	</div>
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