<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>you are in different page</h1><br>
<a href="./10-session.php">Main Page</a>

</body>
</html>
<?php
    
    session_start();
    echo $_SESSION["username"];
    //this used to redirect to the main page
    //header("Location:10-session.php");
?>