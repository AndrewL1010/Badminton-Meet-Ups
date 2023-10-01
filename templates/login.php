<!DOCTYPE html>
<html  lang="en">

<head>
  <meta charset="utf-8">
  <title>Login</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>


  <header class="login-header">
    <a href='http://localhost/2030project/signup.php'> Sign Up</a>
    <a href="http://localhost/2030Project/documentation.php" class="documentation-link">Documentation</a>
  </header>

  <form action="http://localhost/2030project/login.php" method="post" class="login-form">
    <h2>Please Login</h2>


    <div>
      <label for="username">Username</label><br>
      <input type="text" placeholder="username..." name="username" id="username"><br>
    </div>
    <div>
      <label for="password">Password</label><br>
      <input type="password" placeholder="password..." name="password" id="password">
    </div>



    <button type="submit" name="button">Login</button>

  </form>


 
  <div class="slider-frame">

    <div class="slide-images">

      <div class="img-container">
        <img src="images/badminton1.png" alt="badminton1">
      </div>
      <div class="img-container">
        <img src="images/badminton2.png" alt="badminton2">
      </div>
      <div class="img-container">
        <img src="images/badminton3.png" alt="badminton3">
      </div>

    </div>




  </div>


  <footer> &#169;BadmintonMeetups</footer>
</body>

</html>