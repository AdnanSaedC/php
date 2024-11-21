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
    //string integer float boolean
    $name="adnan";
    echo "{$name} saed<br>";
    echo $name," saeed";

    $age=45.6;
    echo"<br> \${$age}";

    $unique=false;
    echo"<br> {$unique}";
    //for false nothing
    //but for true one
    $unique=true;
    echo"<br> {$unique}";

    $total=null;
    echo"<br>{$total}";
    
    $total=$age*$age;
    echo"<br>{$total}";
    
    $array=array("adnan","saed");
    array_push($array,"shdhhd","sghsgh");
    
    array_pop($array);
    array_shift($array);
    //adnan got removed
    array_unshift($array,"ajsjsj");

    //to get number of elememts
    echo "<br>" . count($array) . "<br>";

    $array=array_reverse($array);
    foreach($array as $arr){
        echo $arr."<br>";
        if($arr=="adnan"){
            $arr="hhsh";
        }
        echo $arr."<br>";
    }
?>