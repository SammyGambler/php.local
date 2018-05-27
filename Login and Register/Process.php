<?php

if ($_POST["Username"] != null && $_POST["Password"] != null) {
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    echo 'Hi ' . $username . ' Welcome!<br>';
    echo "To go to your Panel Click" . ' <a href="">Here</a>';
} else {
    echo "Please Fill out All the Fields";
    echo "<a href='Register.html'>Back To Form</a>";
}


