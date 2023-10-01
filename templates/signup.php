<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="sign-up-form">
        <header class="login-header">
            <a href='http://localhost/2030project/login.php'> Login</a>
            <a href="http://localhost/2030Project/documentation.php">Documentation</a>
        </header>

        <form action="http://localhost/2030project/signup.php" method="post" class="signup-form">

            <h2>Create an Account</h2>



            <label class="firstname">
                First name<br>
                <input type="text" placeholder="firstname..." name="firstname"><br>
            </label><br>

            <label class="lastname">
                Last name<br>
                <input type="text" placeholder="lastname..." name="lastname"><br>
            </label><br>

            <label class="username">
                Username<br>
                <input type="text" placeholder="username..." name="username"><?php the_validation_message('username'); ?>
            </label><br>

            <label class="password">
                Password<br>
                <input type="password" placeholder="password..." name="password"><br>
            </label><br>




            <button type="submit" name="button">create account</button>

        </form>

        <?php signup_result() ?>
        <footer> &#169;BadmintonMeetups</footer>
    </div>
</body>

</html>