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
    <form action="03_arithmetic.php" method="post">
    <input name="field1">
    <button>hsdhd</button>
    </form>
</body>
</html>
<?php
//echo"{5+4}";
$x=5;
$y=4;
$z=($x+$y)**2;
//echo " {$x+$y} ";
//this wont work
//you also have - * / % ++ -- += -= *= /=
// echo " {$z} ";

//order
/**
 * ()
 *   **(exponents)
 * * / %
 * + -
 */
    $x=abs($_POST["field1"]);
    echo "{$x}";
    $x=round($_POST["field1"]);
    echo "{$x}";
    $x= pow($_POST["field1"],5);
    echo "{$x}";
    $x=floor($_POST["field1"]);
    echo "{$x}";
    $x=ceil($_POST["field1"]);
    echo "{$x}";
    $x=sqrt($_POST["field1"]);
    echo "{$x}<br>";
    echo max(45,4,5,7),"<br>";
    echo min(45,4,5,7),"<br>";
    echo rand(1,100),"<br>";
    echo pi(),"<br>";
    echo pi(),"<br>";
    //generates a random number
    $x=$_POST["field1"];
    echo "Circumference: ",round(2*pi()*$x,2) ;
    //give the value till 2 decimal
    ?>