<!DOCTYPE html>
<html>
<head>
	<title>All Students</title>
	   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	  <a href="check.php" class="btn btn-success">ADD STUDENT</a>
	  <br><br>

</body>
</html>

<?php

	$connection = mysqli_connect("localhost","root","","students");


$sql = "SELECT Adm, FName,LName,Fee  FROM details";
$result = mysqli_query($connection, $sql);
//count rows
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Adm: " . $row["Adm"]. " - FName: " . $row["FName"]. " LName" . $row["LName"]."Fee: ".$row['Fee']. "<br><br>";
    }
} else {
    echo "0 results";
}



?>