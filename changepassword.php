<?php

//start session
session_start();
if(!$_SESSION['username'] || !$_SESSION['password']){

    echo "<script>";
    echo "alert('You must login first!');";
    echo "window.location.href='http://localhost/2030Project/login.php';";
    echo "</script>";
 
}


ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';
require_once('validation.php');

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();
validate_password_change();
change_password();

// include the template to display the page
include 'templates/changepassword.php';




?>