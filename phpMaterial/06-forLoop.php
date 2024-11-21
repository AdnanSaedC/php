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
    <form action="06-forLoop.php" method="post">
        <input name="stop" type="submit">
    </form>
</body>
</html>
<?php
for($i=0;$i<10;$i++){
    echo"{$i}<br>"."hello";
}
$i=0;
while($i<10){
    echo"hello<br>";
    $i++;
}
if(isset($_POST["stop"])){
    echo"fnjfjfj";
}
?>