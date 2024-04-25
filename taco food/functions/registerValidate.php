<?php 

//konektimi me db - i nevojshem per te vazhduar me manipulimin e te dhenave ne db
require "connect.php";

//marrja e te dhenave te formes me POST
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$user = $_POST['user'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$role = $_POST['role'];
$email = $_POST['email'];
$password = $_POST['password'];

//kjo pjese na nevojitet per validimin e id-se (username) se perdoruesit qe po tenton te regjistrohet ne sistem
//deshirojme te shikojme nese ekziston nje perdorues me id-ne e shenuar ne HTML formen
//variabla $countID na nevojitet per te validuar vleren e shenuar ne fushen id
$query = mysqli_query($connect, "SELECT id FROM users WHERE id='$user'");
$countUser = mysqli_num_rows($query);

//variabla $register tregon nese mund te kryejme regjistrimin e studentit apo jo, varesisht nga vlera e saj meqe eshte boolean-e
//kudo qe ka gabime variabla $register e merr vleren false (dmth mbishkruhet vlera fillestare true me false)
$register = true;

//ne vazhdim do te shikojme vetem rastet kur ka ndodhur ndonje gabim gjate plotesimit te formes te cilen po e validojme (per te dhenat e saj aktuale)
//nese asnjera nga fushat e formes nuk eshte e plotesuar
if(empty($firstname)	&& empty($lastname)&& empty($user) && empty($address) && empty($phone) && empty($email) && empty($password)) {
	$error = "Të gjitha të dhënat duhet të plotësohen!";
	$register = false;
}
	//nese te pakten njera nga fushat permban nje vlere perkatese, na nevojitet ta validojme ate vlere
else {
	//nese fusha e emrit eshte e zbrazet
	if(empty($firstname)) {
		$errorFN = "Fusha e emrit duhet të plotësohet!";
		$iregister = false;
	}
	//emri ka vlere, validoje ate
	
		else {
		//nese emri permban edhe karaktere tjera jo-shkronje
		if(!preg_match("/^([a-zA-Z' ]+)$/", $firstname)) {
			$errorFN = "Emri duhet të përmbajë vetëm shkronja!";
			$register = false;
		}
	}
    if(empty($lastname)) {
		$errorLN = "Fusha e mbiemrit duhet të plotësohet!";
		$iregister = false;
	}
	//emri ka vlere, validoje ate
	
		else {
		//nese emri permban edhe karaktere tjera jo-shkronje
		if(!preg_match("/^([a-zA-Z' ]+)$/", $lastname)) {
			$errorLN = "Emri duhet të përmbajë vetëm shkronja!";
			$register = false;
		}
	}

		//nese fusha e id-se eshte e zbrazet
	if(empty($user)) {
		$errorUser = "Fusha e përdoruesit duhet të plotësohet!";
		$register = false;
	}
	//id ka vlere, validoje ate
	else {
		//nese id permban edhe karaktere tjera jo-numra
		if(!is_numeric($user)) {
			$errorUser = "Përdoruesi duhet të përmbajë vetëm numra!";
			$register = false;
		}
		//nese id nuk ka saktesisht 9 karaktere
		else if(strlen($user) != 4) {
			$errorUser = "Përdoruesi duhet të ketë 4 karaktere!";
			$register = false;
		}
		//nese ekziston nje perdorues qe e ka kete id (id paraqet username permes se ciles do te kyqet perdoruesi ne llogarine e tij ne sistem)
		else if($countUser != 0) {
			$errorUser = "Ky përdorues ekziston!";
			$register = false;
		}
	}
    if(empty($address)) {
		$errorAddress = "Fusha e adreses duhet të plotësohet!";
		$iregister = false;
	}
	//emri ka vlere, validoje ate
	
		else {
		//nese emri permban edhe karaktere tjera jo-shkronje
		if(!preg_match("/^([a-zA-Z' ]+)$/", $address)) {
			$errorAddress = "Emri duhet të përmbajë vetëm shkronja!";
			$register = false;
		}
	}
    if(empty($phone)) {
		$errorPhone = "Fusha e mbiemrit duhet të plotësohet!";
		$iregister = false;
	}
	//emri ka vlere, validoje ate

    if(empty($email)) {
		$errorEmail = "Fusha e mbiemrit duhet të plotësohet!";
		$iregister = false;
	}

	if(empty($role)) {
		$errorRole = "Fusha e rolit duhet të plotësohet!";
		$iregister = false;
	}
	//emri ka vlere, validoje ate
	
		//nese fusha e fjalekalimit eshte e zbrazet
	if(empty($password)) {
		$errorPassword = "Fusha e fjalëkalimit duhet të plotësohet!";
		$register = false;
	}
	//fjalekalimi ka vlere, validoje ate
	else {
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);
		
		//nese fjalekalimi eshte i dobet
		//nese nuk plotesohet njeri nga kushtet e meposhtem atehere konsiderohet qe fjalekalimi eshte i dobet
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$errorPassword = "Fjalëkalim i dobët!";
			$errorPassTooltip = "Fjalëkalimi duhet të përmbajë të paktën 8 karaktere dhe duhet të perfshijë të paktën një shkronjë të madhe, të vogël, një numër dhe një karakter special!";
			$register = false;
		}
	}
	
	//nese asnje gabim nuk ka ndodh (dmth nuk eshte plotesuar asnje nga kushtet qe perfaqesojne vetem kontrollimin e gabimeve qe kane ndodhe) atehere dmth qe variabla $register kurre nuk e ka marre vleren false, por vazhdon te kete vleren fillestare true, qe i bjen se kushti do te plotesohet dhe do te mundemi te realizojme insertimin e te dhenave ne db
	if($register == true) {
		
		//inserto ne db
		
		//tani jemi gati te insertojme perdoruesin e ri ne db
		//ne rastin tone do te bejme nje insertim te dyfishte ne dy tabela te ndryshme
		$query1 = "INSERT INTO users (id,firstname,lastname,address,phone,email,password,role) VALUES ('$user', '$firstname','$lastname','$address','$phone','$email',md5('$password'),'$role');";
		if(mysqli_multi_query($connect, $query1)) {
			//u insertua, ridrejto ne login.php
			header("Location: login.php");
		}
		else {
			$error = "Ka ndodhur një gabim në insertim";
		}
	}
}
?>