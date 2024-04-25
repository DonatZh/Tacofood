<?php
session_start();
?>
<!DOCTYPE html>
	<head>
		<title>Index</title>
		<link rel="icon" href="images/IKONA.png" type="image/icon type">
		<link rel="stylesheet" type="text/css" href="Style/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>

	<body>
		<div id="container">
			<?php include "includes/template/nav.php";?>
			
                <?php include "functions/selectMenu.php" ?>
			
				<?php include "includes/template/footer.php";?>
		</div>
	</body>
</html>
