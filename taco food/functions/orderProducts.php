<?php
require 'connect.php';
$products = $_POST['products'];
$idU = $_POST['idU'];
$address = $_POST['address'];
$qty = $_POST['qty'];
$phone = $_POST['phone'];

$order =  true;
if(empty ($idU) && empty($address) && empty($qty) && empty($phone) && $products == "Perzgjedh produktin") {
		$error = "Të gjitha të dhënat duhet të plotësohen!";
		$order = false;
		}
else{
		if(empty($idU)) {
		$errorUser = "Fusha e përdoruesit duhet të plotësohet!";
		$order = false;
	}
	//id ka vlere, validoje ate
	else {
		//nese id permban edhe karaktere tjera jo-numra
		if(!is_numeric($idU)) {
			$errorUser = "Përdoruesi duhet të përmbajë vetëm numra!";
			$order = false;
		}
		//nese id nuk ka saktesisht 9 karaktere
		else if(strlen($idU) != 4) {
			$errorUser = "Përdoruesi duhet të ketë 4 karaktere!";
			$order = false;
		}
	}
		if(empty($address)){
		$errorAddress = "Ju duhet të na jepni adresën tuaj!";
		$order = false;
		}
		if($products == "Select the order") {
		$errorProducts = "Duhet te perzgjedhni njerin nga produktet";
		$order = false;
	}
		if(empty($qty)){
		$errorQty = "Shënoni sasinë e produkteve!";
		$order = false;
		}
		else if(!is_numeric($qty)) {
			$errorQty = "Sasia duhet të përmbajë vetëm numra!";
			$order = false;
		}
		if(empty($phone)){
		$errorPhone = "Shënoni numrin e telefonit tuaj!";
		$order = false;
		}
		else if(!is_numeric($phone)) {
			$errorPhone = "Numri i telefonit duhet të përmbajë vetëm numra!";
			$order = false;
		}

else {
	if($order) {
	$query1 = mysqli_query($connect, "SELECT id FROM menu WHERE name = '$products';");
	$produktid = mysqli_fetch_assoc($query1);
		$idPr = $produktid['id'];
		
	$query2 = mysqli_query($connect, "SELECT id FROM users WHERE id='$idU';");
	$userid = mysqli_fetch_assoc($query2);
		$idU = $userid['id'];
		
	$query = mysqli_query($connect , "INSERT INTO orders (id,address,qty,phone,idPr,idU) VALUES ('3','$address','$qty','$phone','$idPr','$idU');");
	header("Location:home.php");
	}
	else {
			$error = "Ka ndodhur një gabim në insertim";
			
		}
}
}
?>