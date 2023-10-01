<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';
require_once('validation.php');
//connect to database
$pdo = db_connect();
validate_username();

//creates the account and submits it to database
submit_signup();



// include the template to display the page
include 'templates/signup.php';

 ?>
