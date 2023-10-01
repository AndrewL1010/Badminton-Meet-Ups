<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);


require_once 'database/database.php';
require_once 'templates/functions/template_functions.php';
require_once('validation.php');

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();


validate_account_login();
// include the template to display the page
include 'templates/login.php';

 ?>
