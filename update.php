<?php

include 'conn.php';

if(isset($_POST['done'])){
  $id= $_GET['id'];
  $username = $_POST['username'];
  $password = $_POST['password']; 
	$q = "UPDATE `crudtable` SET `id`='$id',`username`='$username',`password`='$password' WHERE id=$id";

	$query = mysqli_query($con,$q);

	header('location:display.php');
}

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
	  <div class="col-lg-6 m-auto">

	  	<form method="post">

	  		<br><br><div class="card">

	  			<div class="card-header bg-dark">
	  				<h1 class="text-white text-center">Update Operation</h1>
	  			</div><br>

	  			<label> Username: </label>
	  			<input type="text" name="username" class="form-control"> <br>

	  			<label> Password: </label>
	  			<input type="text" name="password" class="form-control"> <br>

	  			<button class="btn btn-success" type="submit" name="done"> Submit </button>
	  			
	  		</div>
	  		
	  </form>	

	  </div>			

</body>
</html>	