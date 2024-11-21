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

</body>

</html>
<?php
//similar to object
$assocArray = array("key" => "value1", "key2" => "value2");
echo $assocArray["key"] = "change value";

//to add new value pair
$assocArray["adnan"] = "saed";


//All the array functions are aplicable here too like push pop shift unshift
foreach ($assocArray as $a) {
    echo $a . "<br>";
}

//to print keys
foreach ($assocArray as $k => $v) {
    echo $k . " : " . $v . "<br>";
}

$onlyKeys=array_keys($assocArray);
foreach ($onlyKeys as $k => $v) {
    echo $k . " : " . $v . "<br>";
    //here yopu will get index as k
}
foreach ($onlyKeys as $k) {
    echo $k . " : " . "<br>";
}


$onlyValues=array_values($assocArray);
foreach ($onlyValues as $k => $v) {
    echo $k . " : " . $v . "<br>";
    //here yopu will get index as k
}
foreach ($onlyValues as $k) {
    echo $k . " : " . "<br>";
}

//lets flip all the keys and value
//and reversing the values
$arry2=array_reverse(array_flip($assocArray));
foreach($arry2 as $a=>$v){
    echo $a ." : ".$v. "<br>";
}
?>