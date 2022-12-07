<?php

session_start();
$_SESSION = array();
session_destroy();
echo "Logged out successfully";
header("location: login.php");

?>

