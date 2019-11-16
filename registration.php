<!DOCTYPE html>
<html>
<head>
  <title>STUDENTS MARKS </title>
  <link rel="stylesheet" type="text/css" href="style.css">
 <style>
 body {text-align: center;
  background-color: mediumseagreen;
}

a {color: black;

}
</style>
</head>
<body>

  <div class="container">

  <h1 style="background-color: tomato;">Registration</h1>

  <form method="POST">
    Email:<br>
    <input type="text" name="Email" placeholder="Enter Email address"><br>
    Password:<br>
    <input type="password" name="Password" placeholder="Enter Password"><br>
    <br><br><br>

    <input type="password" name="CPassword" placeholder="Enter Confirm Password"><br>
    <br><br><br>

    <input type="submit" name="LogIn">
   

    <a href="login.php"><h2 style="background-color: tomato;">Go to Login</h2> </a>

  </form>
</div>

</body>
</html>

<?php
if (empty($_POST)) {
  exit();
}

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$CPassword = $_POST['CPassword'];


if ($Password!=$CPassword) {
  echo "Passwords Do not match";
  exit();
}





$connection = mysqli_connect("localhost","root","","Students");

$check = mysqli_query($connection,"INSERT INTO Registration(Email,Password) values ('$Email','$Password')");

if ($check== true) {
  echo "Saved successfully ";
}
 else{
  echo "Failed";
 }

 ?>
