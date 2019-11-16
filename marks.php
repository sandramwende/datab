<?php
  session_start();
    if (isset($_SESSION['x'])) {
        echo " Logged in as ". $_SESSION['x'];
    }

    else {
      echo "Please Login First";
      exit();
    }


?>

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

  <h1 style="background-color: tomato;">Students marks sheet</h1>
   

  <form method="POST">
    Adm:<br>
    <input type="number" name="Adm" placeholder="Type in Admission number"><br>
    Math:<br>
    <input type="number" name="Math" placeholder="Type in maths result"><br>
    Eng:<br>
    <input type="number" name="Eng" placeholder="Type in English result"><br>
    Swa:<br>
    <input type="number" name="Swa" placeholder="Type in Swahili result"><br>
    <br><br><br>
    <input type="submit" name="submit"><br><br>

     <a href="logout.php" class="btn btn-success">log out </a><br><br>
<a href="system.php" class="btn btn-success"> Registration</a><br>

    <a href="viewdata.php"><h2 style="background-color: tomato;">View students marks</h2> </a>
   

  </form>
</div>

</body>
</html>


<?php

if (empty($_POST)) {
  exit();
}

$Adm = $_POST['Adm'];
$Math = $_POST['Math'];
$Eng = $_POST['Eng'];
$Swa = $_POST['Swa'];


$connection = mysqli_connect("localhost","root","","Students");

$check = mysqli_query($connection,"INSERT INTO Marks(Adm,Math,Eng,Swa) values ('$Adm','$Math','$Eng','$Swa')");

if ($check== true) {
  echo "Saved successfully ";
}
 else{
  echo "Failed";
 }

 ?>
