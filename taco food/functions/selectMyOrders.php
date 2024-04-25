<?php 
require 'connect.php';

$user = $_POST['user'];
$myorders =  true;
if(empty ($user)) {
	$error = "Fusha e përdoruesit duhet të plotësohet!!!";
	$myorders = false;
}
else {
	$query = mysqli_query($connect, "SELECT pr.id as ID , pr.firstname as Client , p.id as NrOrder , pro.name as ProductName, p.qty as QTY , p.address as Address , p.phone as PhoneNumber FROM orders p , users pr , menu pro WHERE pr.id = p.idU and p.idPr = pro.id AND pr.id =$user");
	
?>

<table class="table"><table class="table table-hover">  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Klienti</th>
      <th scope="col">NrPorosia</th>
	  <th scope="col">EmriProduktit</th>
	  <th scope="col">Sasia</th>
	  <th scope="col">Adresa</th>
	  <th scope="col">Numritelefonit</th>
    </tr>
  </thead>
  <tbody>
	<?php while($row = mysqli_fetch_array($query)) { ?>
    <tr>
		<td><?php echo $row['ID'];?></td>
		<td><?php echo $row['Client'];?></td>
		<td><?php echo $row['NrOrder'];?></td>
		<td><?php echo $row['ProductName'];?></td>
		<td><?php echo $row['QTY'];?></td>
		<td><?php echo $row['Address'];?></td>
		<td><?php echo $row['PhoneNumber'];?></td>

    </tr>
	<?php } ?>
  </tbody>
</table> 
	<?php } ?>