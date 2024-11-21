<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #202020;
            color: grey;
        }
    </style>
</head>
<body>
    <!-- use get for search and post for transfering sensitive info -->
    <form action="04_getAndPost.php" method="post">
        <input placeholder="username" name="username">
        <button>Close</button>
    </form>
</body>
</html>
<?php
echo "{$_POST["username"]} <br>";
$total=4;
?>
