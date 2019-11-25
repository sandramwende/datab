<?php
$conn=mysqli_connect("localhost","root","","CSC316");
session_start();


if ($conn) {
	# code...

$name=$_POST['name'];
$unit_id = $_POST['unit_id'];

$q= "INSERT Into st(ST_NAME,ST_UNIT) Values ('$name','$unit_id')";
$processq=mysqli_query($conn,$q);
if ($processq) {
 	# code...
 	header("location:students.php");
 }
else{
	echo "connection failed";
}
}

//echo "the username is: ".$username." password: ".$password.";

?>