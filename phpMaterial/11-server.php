<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <input name="input">
        <input name="submit" type="submit">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "<br>"."form is succesfully submitted";
    //since the default is get
} 

//check php self and req methos
    foreach ($_SERVER as $key => $value) {
        echo "<br>"."{$key} : {$value}";
    }
?>