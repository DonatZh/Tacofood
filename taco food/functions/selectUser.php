<?php

require "connect.php";

$query1 = mysqli_query($connect, "SELECT id,firstname,role FROM users;");


?>


<table class="table"><table class="table table-hover">  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
	<?php while($row1 = mysqli_fetch_array($query1)) { ?>
    <tr>
		<td><?php echo $row1['id'];?></td>
		<td><?php echo $row1['firstname'];?></td>
		<td><?php echo $row1['role'];?></td>
    </tr>
	<?php } ?>
  </tbody>
</table>