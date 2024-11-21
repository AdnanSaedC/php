<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>you are in Main page</h1><br>
    <a href="./10-session1.php">Sesssion1 Page</a>
    <form action="10-session.php" method="post">
    
        <input name="logout" type="submit">
</form>
</body>
</html>
<?php
    //sesion is like login credential which can be used in all the pages
    session_start();
    if(isset($_POST["logout"])){
        echo"LOgging out";
        session_destroy();
    }
    else{
        echo $_SESSION["username"]="adnan";

    }
?>