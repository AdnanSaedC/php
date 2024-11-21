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
    
</body>
</html>
<?php
$grade="S";
switch ($grade) {
    case 'A':
        echo"congrats";
        break;
    
    default:
        echo"better luck nxt time";
        break;
}
$date=date("1");
$x=4;
$x=5;

switch ($date) {
    case '1':
        echo"Its Monday";
        break;
    
    default:
        echo"its not monday";
        break;
}
?>