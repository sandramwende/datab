<?php
//check if user is logged in, check session
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
	<title>System Students</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
           <h1 class="jumbotron">Student Registration</h1>

           <a href="viewstudents.php" class="btn btn-success">VIEW STUDENT</a>
           <a href="marks.php" class="btn btn-success">ADD MARKS </a>
                  <a href="logout.php" class="btn btn-success">log out </a>
   
           <br>

            <form method="POST">
            	 <input type="number" name="Adm" placeholder="Please Enter Admission No">
            	 <br> <br>

            	  <input type="text" name="FName" placeholder="Please Enter First Name">
            	 <br> <br>

                  <input type="text" name="LName" placeholder="Please Enter Last Name">
            	 <br> <br>

            	  <input type="number" name="Fee" placeholder="Please Enter Fee Paid">
            	 <br> <br>
            	  <input type="submit" name="submit" class="btn btn-success">
            	 <br> <br>
            </form>
</body>
</html>



<?php

  if (empty($_POST)) {
     exit();
  }

   //store value in variables  
   $Adm = $_POST['Adm'];
   $FName = $_POST['FName'];
   $LName = $_POST['LName'];
   $Fee = $_POST['Fee'];
   //connect database
   $connection = mysqli_connect("localhost","root","","students");

   $sql = "INSERT INTO details(Adm,FName,LName,Fee) values ('$Adm','$FName','$LName','$Fee')";
   //insert records to table
   $check= mysqli_query($connection, $sql);

   if ($check==true) {
   	  echo "SAVED SUCCESSFULLY";
   }

   else {
   	echo "FAILED";
   }

?>