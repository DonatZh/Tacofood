<?php
//startimi i sesionit
session_start();
//kjo pamje paraqitet per perdoruesit qe jane admin (edhe kur jane te kycur edhe kur nuk jane kyc ende)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-XML</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include "includes/template/nav.php";?>
	<div class="container">
	
		
			<?php 
				$xml=simplexml_load_file("functions/file.xml") or die ("Error :Nuk mund te qaset ne XML fajll!!");
				echo "<br>";
				echo $xml->food[0]->name."<br>".$xml->food[0]->price."<br>".$xml->food[0]->description."<br>"."<hr>";
				echo $xml->food[1]->name."<br>".$xml->food[1]->price."<br>".$xml->food[1]->description."<br>"."<hr>";
				echo $xml->food[2]->name."<br>".$xml->food[2]->price."<br>".$xml->food[2]->description."<br>"."<hr>";
				echo $xml->food[3]->name."<br>".$xml->food[3]->price."<br>".$xml->food[3]->description."<br>"."<hr>";
				echo $xml->food[4]->name."<br>".$xml->food[4]->price."<br>".$xml->food[4]->description."<br>";
			?>
		
		
	</div>
    <?php include "includes/template/footer.php";?>
</body>
</html>