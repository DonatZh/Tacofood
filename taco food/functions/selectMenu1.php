<?php

require 'connect.php';

$query = mysqli_query($connect, "SELECT name FROM menu");

while($row = mysqli_fetch_assoc($query)) {
	$products = $row['name'];
	
	echo "<option value='$products'>$products</option>";
}

?>