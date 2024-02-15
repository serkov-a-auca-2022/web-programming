<!DOCTYPE html>
<html>
<head>
    <title>Registration - Jeep Tours Kyrgyzstan</title>
</head>
<body>

    <h1>User Registration</h1>

    <?php
    if(isset($_GET['msg'])) {
        echo "<p style='color:red'>" . $_GET['msg'] . "</p>";
    }
    ?>

    <form action="register_confirm.php" method="post">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="birth_day">Date of Birth:</label><br>
        <input type="date" id="birth_day" name="birth_day" required><br><br>

        <input type="submit" value="Register">
    </form>


</body>
</html>
