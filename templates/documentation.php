<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <header class="documentation-header">
        <a href='http://localhost/2030project/login.php'>Login</a>
        <a href='http://localhost/2030project/signup.php'>Sign Up</a>
    </header>

    <div class="pages-container">
        <div>
            <h2>Login Page</h2>
            <ul>
                <li>If a user tries to change url to home or change password page without logging in,<br> they will be prompt with an alert and sent back to login page</li>
                <li>Documentation links are on everypage</li>
                <li> fixed header</li>
                <li>Sign up page link at the top</li>
                <li>login form has validation that checks if the account is in the database</li>
                <li>successful login will take you to the home page</li>
                <li>slider animation with 3 pictures</li>

            </ul>

        </div>

        <div>
            <h2>Sign Up</h2>
            <ul>
                <li>sign up form has validation that checks if username is already taken</li>
                <li>create button submits the info to database and makes a new account</li>

            </ul>

        </div>


        <div>
            <h2>Home</h2>
            <ul>
                <li>Top of the page shows the specific user who logged in using session</li>
                <li> home page has the form to post events</li>
                <li>date, time, phonenumber are validated</li>
                <ul>
                    <li>time - 24 hour format</li>
                    <li>phone - 10 digit format</li>
                </ul>
                <li>post button saves your post to database and displays your post on the page (most recent post shows at the top)</li>

                <li>logout link kills the session and sends user to login page</li>

            </ul>
        </div>

        <div>
            <h2>Change Password</h2>
            <ul>
                <li>change password form has validation</li>
                <li>checks if they have the correct old password</li>
                <li>checks the two new passwords match to confirm</li>
                <li>change password button updates database to new password</li>
            </ul>
        </div>
    </div>

    <footer> &#169;BadmintonMeetups</footer>

</body>

</html>