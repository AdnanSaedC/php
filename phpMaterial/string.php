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
$str="Adnan Saed";
echo strtoupper($str)."<br>";
echo strtolower($str)."<br>";
echo strrev($str)."<br>";
echo str_pad($str,20,'$')."<br>";
echo str_replace("Sa","fbhdfhhhfh",$str),"<br>";
echo strcasecmp($str,"Adnan Saed"),"<br>";
echo strlen($str),"<br>";
echo strpos($str," "),"<br>";
echo substr($str,7,7),"<br>";
//the third parameter is how many character to extract
$array= explode(" ",$str);
foreach ($array as $key => $value) {
    echo $value."<br>";
}
echo implode("-",$array);

//to accces global variables global variableName

?>