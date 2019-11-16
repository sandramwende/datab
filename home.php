<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/stylesheets/pages.min.css">
 <link href="assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/nazstyle.css">

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
<body style="background-color: grey;";>
 
       
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="schedule.php">Schedule</a>
  <a href="units.php">Units</a>
  <a href="students.php">Students</a>
</div>

<div id="main">
    
    <div class="row">
        <div>
    <img style="margin: 1px " src="assets/images/anu.png" width="100" height="100" alt=""></div>
    <div style="margin: 1px">
  <h2>AFRICAN NAZERENE UNIVERSITY <br> <h4>Staff portal</h4></h2>
</div>
</div>
  <p> <div class="yui-u first">
                                
                                <div class="yui-gb">
                                    <div class="news_wrapper">
                                        <b><u> REVISED ANU DEGREE CLASSIFICATION:</u></b><br>
First Class Honours = 3.7 - 4.0,
Second Class (Upper Division) = 3.0 - 3.69,
Second Class (Lower Division) = 2.3 - 2.99,
Pass = 2.0 - 2.29
</p>
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
   
</body>
</html> 