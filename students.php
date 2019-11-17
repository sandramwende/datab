<!DOCTYPE html>
<html>
<head>
<title></title>
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
<body>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="home.php">Home</a>
<a href="schedule.php">Schedule</a>
<a href="units.php">Units</a>
<a href="students.php">Students</a>
</div>
</div>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; menu</span>

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


<?php
    
    $connection = mysqli_connect("localhost","root","","csc316");
    if(isset($_GET['id'])){
        //echo $_GET['id'];
        $query="SELECT * FROM st as a,units as b where a.ST_UNIT=b.UNIT_ID and a.ST_UNIT=".$_GET['id']."";
    }
    else{
        $query = "SELECT * FROM st as a,units as b where b.UNIT_ID = a.ST_UNIT";
    }
    echo "<table class='table'><thead class='thead-dark'><tr><th scope='col'>Student Id</th><th scope='col'>Name</th><th scope='col'>Unit</th><th scope='col'>Status</th></thead></tr>";
    $result = mysqli_query($connection,$query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td scope='row'>".$row["ST_ID"]."</td>";
            echo "<td>".$row["ST_NAME"]."</td>";
            echo "<td>".$row["UNIT_NAME"]."</td>";
            echo "<td>".$row["ST_STATUS"]."</td>";
            
            echo "</tr>";
            // echo "Adm: " . $row["ST_ID"]. " - FName: " . $row["ST_NAME"]. " LName" . $row["UNIT_NAME"]."Fee: ".$row['ST_STATUS']. "<br><br>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>


</body>
</html>
