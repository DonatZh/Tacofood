<?php

//konektimi me db - i nevojshem per te vazhduar me manipulimin e te dhenave ne db
require "connect.php";

//marrja e te dhenave te formes me POST
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$register = true;
if(empty($id)	&& empty($name)&& empty($price)) {
	$error = "Të gjitha të dhënat duhet të plotësohen!";
	$register = false;
}
else {
	//nese fusha e emrit eshte e zbrazet
	if(empty($id)) {
		$errorID = "Fusha e ID duhet të plotësohet!;";
		$register = false;
	}
	if(empty($name)) {
		$errorName = "Fusha e emrit duhet të plotësohet!";
		$register = false;
	}
	else {
		//nese id permban edhe karaktere tjera jo-numra
		if(!is_numeric($id)) {
			$errorID = "ID duhet të përmbajë vetëm numer!";
			$register = false;
		}
	}
	if($register == true) {
		
		//inserto ne db
		//tani jemi gati te insertojme perdoruesin e ri ne db
		//ne rastin tone do te bejme nje insertim te dyfishte ne dy tabela te ndryshme
		$query1 = mysqli_query($connect,"INSERT INTO menu (id, name , price) VALUES ('$id', '$name','$price');");
		if(mysqli_multi_query($connect, $query1)) {
		}
	}
	else {
		echo "Ka ndodhur një gabim ne insertim!!!";
	}
}
?>