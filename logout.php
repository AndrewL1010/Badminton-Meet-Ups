<?php
//gets rid of session data when user logs out so
//other users cannot go to the homepage without logging in again

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
header("location: http://localhost/2030Project/login.php");




?>