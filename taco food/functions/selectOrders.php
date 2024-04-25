<?php
require 'connect.php';

$query1 = mysqli_query($connect, "SELECT pr.firstname as Client , p.id as NrOrder , pro.name as OrderName, p.qty as QTY , p.address as Address , p.phone as Phone
FROM orders p , users pr , menu pro 
WHERE pr.ID = p.idU and p.idPr = pro.id");


?>


<table class="table"><table class="table table-hover">  <thead>
    <tr>
      <th scope="col">Klienti</th>
      <th scope="col">NrPorosia</th>
	  <th scope="col">EmriProduktit</th>
	  <th scope="col">Sasia</th>
	  <th scope="col">Adresa</th>
	  <th scope="col">Numritelefonit</th>
    </tr>
  </thead>
  <tbody>
	<?php while($row = mysqli_fetch_array($query1)) { ?>
    <tr>
		<td><?php echo $row['Client'];?></td>
		<td><?php echo $row['NrOrder'];?></td>
		<td><?php echo $row['OrderName'];?></td>
		<td><?php echo $row['QTY'];?></td>
		<td><?php echo $row['Address'];?></td>
		<td><?php echo $row['Phone'];?></td>

    </tr>
	<?php } ?>
  </tbody>
</table> 

	