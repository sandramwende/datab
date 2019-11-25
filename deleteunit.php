<?php
$conn=mysqli_connect("localhost","root","","CSC316");
session_start();


if ($conn) {
	# code...

$id=$_GET['id'];

$q= "UPDATE UNITS SET UNIT_STATUS= 2 WHERE UNIT_ID=$id";
$processq=mysqli_query($conn,$q);
if ($processq) {
 	# code...
 	header("location:units.php");
 }
else{
	echo "connection failed";
}
}

//echo "the username is: ".$username." password: ".$password.";










































?>