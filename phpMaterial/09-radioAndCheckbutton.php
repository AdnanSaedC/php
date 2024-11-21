<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #202020;
            color: grey;
        }
    </style>
</head>
<body>
    <form action="09-radioAndCheckbutton.php" method="post" >
        <input name="value" type="radio" value="1">Adnan<br>
        <input name="value" type="radio" value="2">Saed<br>
        <input name="value" type="radio" value="3">chakwa<br>
        <input name="value" type="radio" value="4">Adnan0042N<br>
        <input type="submit" name="confrm">

        <input name="food[]" value="Pizza" type="checkbox">PIZZA<br>
        <input name="food[]" value="burger" type="checkbox">burger<br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["confrm"])){
        if(isset($_POST["value"])){
        $value=$_POST["value"];
        echo " you have selected {$value}";
    }
    else{
        echo"please select a btn";
    }
    // foreach($_POST as $p){
    //     echo "<br>".$p;
    // }
    if(isset($_POST["food"])){

        $array=$_POST["food"];
        //this will return an array of selected values
        //another way
        foreach ($array as $a){
            echo $a;
        }
    }
    else{
        echo "tick some checkbox please";
    }
}
?>