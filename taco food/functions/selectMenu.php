<?php 
require "connect.php";

$query = mysqli_query($connect,"SELECT * FROM menu");

?>
<div class="container">
<table class="table"><table class="table table-hover">  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
	  <th scope="col">Order</th>
    </tr>
  </thead>
  <tbody>
	  <?php while($row = mysqli_fetch_array($query)) { ?>
    <tr>
	<td><img src='images/IKONA.png' style="height:10%;width:10%;"></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['price']; ?></td>
	  <td><a href="/taco/orderOnline.php" class="btn btn-danger">Order</a></td>
    </tr>
	<?php } ?>
  </tbody>
</table>
</div>
