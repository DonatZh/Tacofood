<?php
session_start();

if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
	<head>
		<title>Home</title>
		<link rel="icon" href="images/IKONA.png" type="image/icon type">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
		<style>
			.footer1{
  
  bottom: 0;
  width: 100%;
  height: 2.5rem;
  color: white;
  background-color: #8d8d8d;
  text-align: center;
}
			
		</style>
	</head>

	<body>
	<?php include "includes/template/nav.php";?>
		<div>
			
			<?php include "includes/template/header.php";?>
			
			<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false" style="padding-top: 70px;">
			<div class="carousel-inner" style="width:50%; margin-left: auto;  margin-right: auto; ;">
				<div class="carousel-item active" >
				<img src="images/1.jpg" class="d-block w-100" alt="..." >
				</div>
				<div class="carousel-item">
				<img src="images/2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="images/3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev" style="width:55%;">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" style="width:55%;">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
			
			<div class="container" style="text-align:center;">
				<br>
				<br>
				<td><a href="/taco/orderOnline.php" class="btn btn-danger">Order</a></td>
			<br>
			<br>
			<br>
			<br>
			
			</div>

			<div class="container" style="padding-bottom: 100px;">
			<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100">
				<img src="images/1.1.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Mexico Taco</h5>
					<p class="card-text"></p>
					<td><a href="/taco/orderOnline.php" class="btn btn-danger">Order</a></td>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
				<img src="images/2.2.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Chicken Quesadilla</h5>
					<p class="card-text"></p>
					<td><a href="/taco/orderOnline.php" class="btn btn-danger">Order</a></td>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
				<img src="images/3.3.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Taco Supreme</h5>
					<p class="card-text"></p>
					<td><a href="/taco/orderOnline.php" class="btn btn-danger">Order</a></td>
				</div>
				</div>
			</div>

		</div>
	</div>
			
	</div>
		<div class="footer1">
		<p>&copy; Copyright 2010 - <?php echo date("Y");?></p>
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>

<?php
}

else {
	header("Location: login.php");
}
?>