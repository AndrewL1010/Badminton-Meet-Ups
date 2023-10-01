<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php the_header() ?>



    <form action="http://localhost/2030project/changepassword.php" method="post" class="change-password-form">
        <h2>Change Password</h2>



        <label class="old-password">
            Old Password<br>
            <input type="text" placeholder="old password..." name="oldpassword"><br>
            <?php the_validation_message('oldpassword'); ?>
        </label><br>




        <label class="new-password">
            New Password<br>
            <input type="text" placeholder="new password..." name="newpassword"><br>
        </label><br>



        <label class="confirm-password">
            Confirm Password<br>
            <input type="text" placeholder="confirm password..." name="confirmpassword"><br>
            <?php the_validation_message('confirmpassword'); ?>
        </label><br>

        <button class="change-password-button" type="submit" name="button">change password</button>

    </form>




    <footer> &#169;  BadmintonMeetups</footer>





</body>

</html>