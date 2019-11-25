  
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

  	<title></title>
  
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  </head>
<?php
$connection = mysqli_connect("localhost","root","","CSC316");
$sql = "SELECT * FROM units where UNIT_STATUS = 1";

$result = mysqli_query($connection, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
  }
} else {
    echo "0 results";
}
?>
  <body>
  	
  	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="schedule.php">Schedule</a>
  <a href="units.php">Units</a>
  <a href="students.php">Students</a>
</div>
	<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">AFRICAN NAZERENE UNIVERSITY</a>
</nav>
  <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; menu</span>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light container">
  <span class="navbar-brand mb-0 h1">Unit details</span>
</nav>


  	<form class="form-group container bg-light" action="newunit.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Unit Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Unit Name">
    
  </div>
  <div class="form-group">
    <label for="unit_id">UNIT CODE</label>
    <input type="text" class="form-control" id="code" name="code" aria-describedby="emailHelp" placeholder="Unit Code">

  </div>
  <button type="submit" href="students.php" class="btn btn-success">Submit</button>
</form>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script> 
  </body>
  </html>


  