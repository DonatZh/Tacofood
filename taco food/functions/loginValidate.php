<?php

//validimi i te dhenave te formes se kyqjes

//konektimi me db
require "connect.php";

//marrja e te dhenave te formes permes metodes POST
$user = $_POST['userLogin'];
$password = $_POST['passLogin'];

$login = true;

//validimi i te dhenave hyrese
//nese asnjera nga fushat nuk eshte plotesuar
if(empty($user) && empty($password) ) {
	$error = "Te gjitha te dhenat duhet te plotesohen!";
	$login = false;
}

//nese te pakten njera nga fushat ka vlere, atehere validoje ate vleren
else {
	//validimi i userit-it
	
	//nese username eshte i zbrazet
	if(empty($user)) {
		$errorUser = "Fusha e username-it duhet te plotesohet!";
		$login = false;
	}
	//nese username ka vlere, validoje ate
	else {
		//nese perdoruesi nuk ekziston
		$query1 = mysqli_query($connect, "SELECT id FROM users WHERE id='$user';");
		$count1 = mysqli_num_rows($query1);
		
		//nese nuk ka rreshta rezultat => perdoruesi nuk ekziston
		if($count1 == 0) {
			$errorUser = "Ky perdorues nuk ekziston!";
			$login = false;
		}
	}

	//validimi i password-it
	
	//nese fjalekalimi eshte i zbrazet
	if(empty($password)) {
		$errorPassword = "Fusha e fjalekalimit duhet te plotesohet!";
		$login = false;
	}
	
	//nese fjalekalimi ka vlere, validoje ate
	else {
		//nese fjalekalimi per kete perdorues nuk eshte i sakte
		
		$query2 = mysqli_query($connect, "SELECT password FROM users WHERE id='$user';");
		$queryPass = mysqli_fetch_assoc($query2);
		$passDB = $queryPass['password'];
		
		//nese vlerat e fjalekalimeve nuk perputhen
		if(md5($password) != $passDB) {
			$errorPass = "Fjalekalimi nuk eshte i sakte!";
			$login = false;
		}
	}
	
	//nese asnje gabim nuk ka ndodhur, atehere asnjehere nuk eshte plotesu asnje kusht qe perfaqeson nje gabim te ndodhur => variabla login ende e permban vleren fileestare true
	if($login) {
		//perdoruesi kyqet ne sistem, varesisht prej rolit te tij
		
		$query3 = mysqli_query($connect, "SELECT role FROM users WHERE id='$user';");
		$queryRoli = mysqli_fetch_assoc($query3);
		$role = $queryRoli['role'];
		
		$_SESSION['user'] = $user;
		$_SESSION['role'] = $role;
		
		//ridrejtoje ne faqen baze e cila mund te qaset pas kyqjes
		header("Location: home.php");
	}
}

?>