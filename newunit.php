<?php
$conn=mysqli_connect("localhost","root","","CSC316");
session_start();


if ($conn) {
	# code...

$name=$_POST['name'];
$code = $_POST['code'];

$q= "INSERT Into units(UNIT_NAME,UNIT_CODE) Values ('$name','$code')";
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