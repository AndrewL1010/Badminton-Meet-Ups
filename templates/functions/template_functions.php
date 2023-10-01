<?php
// Output comments to HTML
function the_posts()
{
    global $posts;

    // TODO
    echo "<div class='posts'>";
    for ($i = 0; $i < count($posts); $i++) {
        $username = $posts[$i]['username'];
        $date = $posts[$i]['date'];
        $phone = $posts[$i]['phone'];
        $street = $posts[$i]['street'];
        $zip = $posts[$i]['zip'];
        $city = $posts[$i]['city'];
        $extrainfo = $posts[$i]['extrainfo'];
        $time = $posts[$i]['time'];
        echo "<div class='post'>";
            echo "<div class='date'> $date  <div class='username'> $username </div> </div>";
            

            echo "<div class='info'>";
                echo "<p> Event starts at: $time</p>";
                echo "<p> Contact number: $phone</p>";
                echo "<p> Event address: $street, $city, $zip</p>";
                echo "<p> Extra info: $extrainfo </p>";         
            echo "</div>";

        echo "</div>";

    }
    echo "</div>";
}

function the_header(){

    $username = $_SESSION['username'];
    echo
    '<header>
        <h1 class="headeritem"> welcome, ' . $username . '</h1>
        <a href="http://localhost/2030Project/home.php" class="headeritem">home</a>
        <a href="http://localhost/2030Project/changepassword.php" class="headeritem">change password</a>
        <a href="http://localhost/2030Project/logout.php" class="headeritem">logout</a>
        <a href="http://localhost/2030Project/documentation.php" class="headeritem">Documentation</a>
        
    </header>';
}

