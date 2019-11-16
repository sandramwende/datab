<?php 

session_start();
 ?>

  <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; menu</span>
 


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