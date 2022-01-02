<?php

include "conn.php";

// $username = $_POST['username'];
  //$password = $_POST['password']; 
	$q = "SELECT * from crudtable";

	$query = mysqli_query($con,$q);


?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
	<div class="col-lg-12">
        <br><br>
		<h1 class="text-warning text-center"> Display Table </h1>
        <br>
		<table class=" table table-striped table-hover table-bordered">

			<tr>

				<th>id</th>
				<th>Username</th>
				<th>Password</th>
				<th>Delete</th>
				<th>Update</th>

			</tr>

<?php

include "conn.php";

  $q = "SELECT * from crudtable";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){

?>			

			<tr>

				<td> <?php echo $res['id'];  ?></td>
				<td><?php echo $res['username'];  ?></td>
				<td><?php echo $res['password'];  ?></td>
				<td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
				<td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>

			</tr>

		<?php
		   }
		?>    	
		
	</table>		

</body>
</html>
