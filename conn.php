<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'crudyash');

if($con){
	echo "connection succesfull";
}else {
	echo "connection unsuccessfull";
}
?>
