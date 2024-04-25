<?php

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	
	require "connect.php";
	
	mysqli_query($connect, "DELETE FROM menu WHERE id='$id';");
	
	header("Location: ../menuAdmin.php");
}

?>