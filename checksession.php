<?php
session_start();
session_destroy();
$username=$_SESSION['usernamesession'];
echo $username;
?>
