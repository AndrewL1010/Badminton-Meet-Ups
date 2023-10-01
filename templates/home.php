<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php the_header() ?>

    <form action="http://localhost/2030project/home.php" method="post" class="post-form">
        <h2>organize a badminton event</h2>

        <label class="post-input date-input">
            Date of Meet up
            <input type="text" name="date">
            <?php the_validation_message('date'); ?>
        </label><br>
        <label class="post-input time-input">
            Time of Meet up
            <input type="text" name="time" placeholder="24hr-format">
            <?php the_validation_message('time'); ?>
        </label><br>

        <label class="post-input phonenumber-input">
            Phone Number
            <input type="text" name="phonenumber">
            <?php the_validation_message('phonenumber'); ?>
        </label><br>


        <div class="form-bottom-half">
            <fieldset class="post-input addressinput">
                <legend>Address Of Meetup</legend>

                <label>
                    Street Address<br>
                    <input type="text" name="street">
                </label><br>
                <label>
                    ZIP<br>
                    <input type="text" name="zip">
                </label><br>
                <label>
                    City<br>
                    <input type="text" name="city">
                </label><br>
            </fieldset><br>


            <label class="post-input">
                Extra information about the event<br>
                <textarea rows="4" cols="50" name="extrainfo"></textarea>
            </label><br>

        </div>
        <button type="submit" name="button">Post</button>

        
    </form>





    <?php
    the_posts();
    ?>


    <footer> &#169;BadmintonMeetups</footer>




</body>

</html>