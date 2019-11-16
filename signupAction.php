<?php
$connection = mysqli_connect('localhost', 'root', '','Csc316') or
        die('Oops connection error -> ' . mysqli_connect_error());
 session_start();

 if ($connection) {
 	# code...

$username = $_POST['username'];
$userpassword = $_POST['password'];

$query = " INSERT INTO student(username,password) values ('$username','$userpassword')";
//echo $query;
$sqlConnect = mysqli_query($connection,$query);
//$id = mysqli_insert_id($this->connection);
if ($sqlConnect) {
	header("location:home.php");
    echo "success";
    //return $id;
} else {
    echo "unsuccessfull";
    
}
}

?>
