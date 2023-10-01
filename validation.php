<?php
// Global result of form validation
require_once 'database/database.php';




//display a message when sign up is a success
function signup_result()
{
    global $uniqueUsername;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($uniqueUsername) {
            echo "<script>";
            echo "alert('You have successfully registered! Please proceed to login')";
            echo "</script>";
        }
    }
}

function validate_post()
{

    global $validDate;
    global $validTime;
    global $validPhone;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (preg_match('#^\d{4}/((0[1-9])|(1[0-2]))/((0[1-9])|([12][0-9])|(3[01]))$#', $_POST['date']) == true) {
            $validDate = true;
        }
        if (preg_match('/^([01]?[0-9]|2[0-3])\:+[0-5][0-9]$/', $_POST['time']) == true) {
            $validTime = true;
        }
        if (preg_match('/^[0-9]{10}+$/', $_POST['phonenumber']) == true) {
            $validPhone = true;
        }
    }
}


// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type)
{

    global $uniqueUsername;
    global $validOldPass;
    global $validConfirmPass;

    global $validDate;
    global $validTime;
    global $validPhone;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($type == "username") {
            if (!$uniqueUsername) {
                echo " <p class ='failure-message'> username has been taken already! </p>";
            }
        }
        if ($type == "oldpassword") {
            if (!$validOldPass) {
                echo " <p class ='failure-message'> incorrect old password! </p>";
            }
        }
        if ($type == "confirmpassword") {
            if (!$validConfirmPass) {
                echo " <p class ='failure-message'> Passwords must match! </p>";
            }
        }
        if ($type == "date") {
            if (!$validDate) {
                echo " <p class ='failure-message'> your date format is incorrect </p>";
            }
        }
        if ($type == "time") {
            if (!$validTime) {
                echo " <p class ='failure-message'> your time format is incorrect </p>";
            }
        }
        if ($type == "phonenumber") {
            if (!$validPhone) {
                echo " <p class ='failure-message'> your phone number format is incorrect </p>";
            }
        }
    }
}
