<?php

require 'config.php';
//check if username is taken in the database, validation.php uses this variable
$uniqueUsername = true;

$validLogin = false;
$validOldPass = false;
$validConfirmPass = false;

$validDate;
$validTime;
$validPhone;
$validZip;



//connect to dbase
function db_connect()
{

  try {

    $connectionString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
    $pdo = new PDO($connectionString, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// Handle form submission
function submit_signup()
{
  global $pdo;
  global $uniqueUsername;

  if ($uniqueUsername) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Prepare the submitted form data and insert it to the database
      if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password'])) {
        $sql = 'INSERT INTO accounts (firstname, lastname, username, password) 
        VALUES (:firstname, :lastname, :username, :password)';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':firstname', $_POST['firstname']);
        $statement->bindValue(':lastname', $_POST['lastname']);
        $statement->bindValue(':username', $_POST['username']);
        $statement->bindValue(':password', $_POST['password']);
        $statement->execute();
      }
    }
  }
}



//loops through the username in the database to check if username is taken already
function validate_username()
{
  global $uniqueUsername;
  global $pdo;
  $accounts = [];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username'])) {
      $sql = 'SELECT username FROM accounts';
      $result = $pdo->query($sql);

      while ($row = $result->fetch()) {
        array_push($accounts, $row);
      }
      for ($i = 0; $i < count($accounts); $i++) {
        if ($_POST['username'] == $accounts[$i]['username']) {
          $uniqueUsername = false;
        }
      }
    }
  }
}

// checks to see if account is registered before logging in
function validate_account_login()
{
  global $validLogin;
  global $pdo;
  $credentials = [];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $sql = 'SELECT username, password FROM accounts';
      $result = $pdo->query($sql);

      while ($row = $result->fetch()) {
        array_push($credentials, $row);
      }
      for ($i = 0; $i < count($credentials); $i++) {
        if ($_POST['username'] == $credentials[$i]['username'] && $_POST['password'] == $credentials[$i]['password']) {
          $validLogin = true;
          // saves username and password to session when login is successful
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['password'] = $_POST['password'];
          header("location: http://localhost/2030project/home.php");
        }
      }
      echo "<script>";
      echo "alert('incorrect username or password!')";
      echo "</script>";
    }
  }
}
function change_password()
{

  global $pdo;
  global $validConfirmPass;
  global $validOldPass;
  if ($validConfirmPass && $validOldPass) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['newpassword'])) {
        $sql = "UPDATE accounts 
        SET password = :newpassword  WHERE username = :username";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':newpassword', $_POST['newpassword']);
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        echo "<script>";
        echo "alert('password changed successfully!')";
        echo "</script>";
      }
    }
  }
}

//validate password change
function validate_password_change()
{

  global $pdo;
  global $validOldPass;
  global $validConfirmPass;
  $account = [];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['oldpassword']) && isset($_POST['newpassword']) && isset($_POST['newpassword'])) {
      $sql = 'SELECT password FROM accounts Where username = :username';
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':username', $_SESSION['username']);
      $statement->execute();

      while ($row = $statement->fetch()) {
        array_push($account, $row);
      }
      if ($_POST['oldpassword'] == $account[0]['password']) {
        $validOldPass = true;
      }
      if ($_POST['confirmpassword'] == $_POST['newpassword']) {
        $validConfirmPass = true;
      }
    }
  }
}

// if validation passes, submit post to database // uses username from session
function submit_post()
{
  global $pdo;
  global $validDate;
  global $validTime;
  global $validPhone;

  if ($validDate && $validTime && $validPhone) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // Prepare the submitted form data and insert it to the database
      if (
        isset($_POST['date']) && isset($_POST['phonenumber'])
        && isset($_POST['street']) && isset($_POST['zip'])
        && isset($_POST['city']) && isset($_POST['extrainfo'])
        && isset($_POST['time'])
      ) {
        $sql = 'INSERT INTO posts (date, phone, street, zip, city, extrainfo, username, time) 
        VALUES (:date, :phone, :street, :zip, :city, :extrainfo, :username, :time)';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':date', $_POST['date']);
        $statement->bindValue(':phone', $_POST['phonenumber']);
        $statement->bindValue(':street', $_POST['street']);
        $statement->bindValue(':zip', $_POST['zip']);
        $statement->bindValue(':city', $_POST['city']);
        $statement->bindValue(':extrainfo', $_POST['extrainfo']);
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->bindValue(':time', $_POST['time']);
        $statement->execute();
      }
    }
  }

}


function get_posts() {
  global $pdo;
  global $posts;


  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $sql = 'SELECT * FROM posts 
    ORDER BY postID DESC';
    $result = $pdo->query($sql);

    while($row = $result->fetch()){
       array_push($posts, $row);
    }
  
  }
}
