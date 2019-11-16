<!DOCTYPE html>
<html>
<head>
  <title>Login </title>
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

  <h1 style="background-color: tomato;">Login</h1>

  <form method="POST">
    Email:<br>
    <input type="text" name="Email" placeholder="Enter Email address"><br>
    Password:<br>
    <input type="password" name="Password" placeholder="Enter Password"><br>
    <br><br><br>


    <input type="submit" name="LogIn">
    <input type="checkbox" name="Remember me" checked="checked">Remember me<br>


   <a href="registration.php"><h2 style="background-color: tomato;">Go to register</h2> </a>


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

$connection = mysqli_connect("localhost","root","","Students");


$result= mysqli_query($connection,"SELECT Email,Password FROM registration where Email ='$Email' and Password = '$Password' ");
if (mysqli_num_rows($result)==1) {

   //There is a match
  echo "Login successfully ";
  session_start();
  $_SESSION['x'] = $Email;


  
  header("location: system.php");


  //we have saved session
  //only logged in users can start and save a session

} 
else {
  //There is no match
  echo "Login failed  ";
}

 ?>











