<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $birth_day = $_POST['birth_day'];


    echo "Hello " . htmlspecialchars($fname) . " " . htmlspecialchars($lname) . ", date of birth: " . htmlspecialchars($birth_day) . ". Your registration is completed.";
} else {
    echo "Please submit the form.";
}
?>