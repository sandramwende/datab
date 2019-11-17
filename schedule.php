
<html>
<head>
    
   <title>time table</title>
<style>
    td{
        color: white;
    }
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
<body bgcolor="blue">
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="schedule.php">Schedule</a>
  <a href="units.php">Units</a>
  <a href="students.php">Students</a>
</div>

<H1><FONT COLOR="white"><CENTER>SCHEDULE</FONT></H1>
<table border="1" cellspacing="3" align="center">
<tr>
 <td align="center">
 <td>8:00-11:00
 <td>11:10-13:10
 <td>13:10-14:20
 <td>14:20-17:20
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center">CSC 316<br>
 <td align="center">CSC 316<br>
 <td align="center">BREAK<br>
 <td align="center">---


</tr> <tr> g <td align="center">TUESDAY
 <td align="center">---<br>
 <td align="center">CSC 217<br>
 <td align="center">BREAK<br>
 <td align="center">CSC 217</td>
 
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center">---<br>
 <td align="center">---<BR>
 <td align="center">BREAK<br>
 <td align="center">---<br>


</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center">CSC 360<br>
 <td align="center">---<br>
 <td align="center">BREAK<BR>
 <td align="center">---<br>

</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center">CSC 271<BR>
 <td align="center">CSC 271<br>
 <td align="center">BREAK<br>
 <td align="center">---

</tr>

<div id="open">
  <span style="font-size:30px;cursor:pointer;color: white" onclick="openNav()">&#9776; menu</span>

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