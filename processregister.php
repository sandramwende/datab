<?php
$conn=mysqli_connect("localhost","root","","CSC316");
session_start();


if ($conn) {
	# code...

$username=$_POST['username'];
$password=md5($_POST['password']);

$q="insert into student(username,password)VALUES ('$username', '$password')";
$processq=mysqli_query($conn,$q);
if ($processq) {
 	# code...
 	echo "new user added successfully";
 	$_SESSION['usernamesession']=$username;
 	echo "$username";
 }
else{
	echo "connection failed";
}
}

//echo "the username is: ".$username." password: ".$password.";

?>