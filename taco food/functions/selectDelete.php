<?php

require "connect.php";

$query1 = mysqli_query($connect, "SELECT * FROM menu;");

?>

<table class="table"><table class="table table-hover">  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
	  <th scope="col"></th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	<?php while($row1 = mysqli_fetch_array($query1)) { ?>
    <tr>
		<td><?php echo $row1['id'];?></td>
		<td><?php echo $row1['name'];?></td>
		<td><?php echo $row1['price'];?></td>
		<td><a href="edit.php?id=<?php echo $row1['id'];?>&name=<?php echo $row1['name'];?>&price=<?php echo $row1['price']?>" class="btn btn-danger">Edit</a></td>
		<td><a href="functions/deleteDB.php?id=<?php echo $row1['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
	<?php } ?>
  </tbody>
</table>