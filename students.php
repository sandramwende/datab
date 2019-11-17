<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/stylesheets/pages.min.css">
 <link href="assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/nazstyle.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$connection = mysqli_connect("localhost","root","","csc316");
if(isset($_GET['id'])){
	//echo $_GET['id'];
	$query="SELECT * FROM st as a,units as b where a.ST_UNIT=b.UNIT_ID and a.ST_UNIT=".$_GET['id']."";
}
else{
	$query = "SELECT * FROM st as a,units as b where b.UNIT_ID = a.ST_UNIT";
}
echo "<table class='table'><tr><th>Student Id</th><th>Name</th><th>Unit</th><th>Status</th></tr>";
$result = mysqli_query($connection,$query);	
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
    	echo "<td>".$row["ST_ID"]."</td>";
    	echo "<td>".$row["ST_NAME"]."</td>";
    	echo "<td>".$row["UNIT_NAME"]."</td>";
    	echo "<td>".$row["ST_STATUS"]."</td>";

    	echo "</tr>";
     //   echo "Adm: " . $row["ST_ID"]. " - FName: " . $row["ST_NAME"]. " LName" . $row["UNIT_NAME"]."Fee: ".$row['ST_STATUS']. "<br><br>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>