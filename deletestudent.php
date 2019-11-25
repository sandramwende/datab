<?php
$conn=mysqli_connect("localhost","root","","CSC316");
session_start();


if ($conn) {
	# code...

$id=$_GET['id'];

$q= "UPDATE st SET ST_STATUS= 2 WHERE ST_ID=$id";
$processq=mysqli_query($conn,$q);
if ($processq) {
 	# code...
 	echo "Deleted success";
 	header("location:units.php");
 }
else{
	echo "connection failed";
}
}

//echo "the username is: ".$username." password: ".$password.";

?>