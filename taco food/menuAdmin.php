<?php

//startimi i sesionit
session_start();

//nese perdoruesi nuk eshte kyq, atehere paraqitja kete pamje te kesaj web faqeje
if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link rel="icon" href="images/IKONA.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container">
		<?php
			include "functions/selectDelete.php";
		?>
	</div>
	<?php include "Includes/template/footer.php";?>
</body>
</html>
<?php
}

//nese nuk eshte kyq, atehere ridrejtoje ne faqen baze para kyqjes
else {
	header("Location: login.php");
}

?>