<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization and Validation Form</title>
    <style>
        body {
            background-color: #202020;
            color: grey;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="text" name="age" placeholder="Enter your age"><br><br>
        <input type="email" name="email" placeholder="Enter your email"><br><br>
        <input name="login" type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["login"])) {
        // Sanitizing the inputs
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "<h3>Sanitized Output:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Email: " . $email . "<br>";

        // Validating inputs
        $isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
        $isAgeValid = filter_var($age, FILTER_VALIDATE_INT);

        echo "<h3>Validation:</h3>";
        if (!$isEmailValid) {
            echo "Invalid email address entered.<br>";
        } else {
            echo "Email is valid.<br>";
        }

        if (!$isAgeValid) {
            echo "Invalid age entered. Please enter a numeric value.<br>";
        } else {
            echo "Age is valid.<br>";
        }
    } else {
        echo "Form has not been submitted yet.";
    }
    ?>
</body>
</html>
