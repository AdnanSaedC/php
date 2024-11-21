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
    <form action="08-issetAndEmpty.php" method="post">
        <input name="username">
        <input type="submit" name="btn">

    </form>
</body>

</html>
<?php
//isset true-declared and not null
//empty true-not declared false or null
//$username;
// if (isset($username)) {
//     echo "set  ";
// }
// if (empty($username)) {
//     echo "empty  ";
//     //it should tell get true obly if it has some value
//     //other than nul and false
// }
// $username = "shsjh";
// if (isset($username)) {
//     echo "set  ";
// }
//basically it should have some value


//it is an array
$user=$_POST["username"];
if(isset($user) && !empty($user)){
    echo $user;
    //if you enter false and null it works because they are
    //treated as String here
}
else{
    echo "Give some value other than null and false";
}


//let check our button is clicked or not
if(isset($_POST["btn"])){
    echo" <br><br> button git clicked";
    $count=count($_POST);
    $userEnteredFiledCount=0;
//another way if have tons of field even if one goes for toos you can check here
foreach ($_POST as $key => $value) {
    echo "<br>".$key ." : ".$value;
    if(isset($value) && !empty($value)){
        echo "  thank you";
        $userEnteredFiledCount++;
    }
    else{
        echo"please enter a value orther";
    }
}
if($userEnteredFiledCount==$count){
    echo" <br> All the field are entered";
}
}
?>