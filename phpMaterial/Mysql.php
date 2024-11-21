<?php
    $server="localhost";

    $user="root";
    $pass="";
    $database="adnan";
    $conn="";
    $conn=mysqli_connect($server,$user,$pass,$database);
    if($conn){
        echo"you are connected";
    }
    else{
        echo "failed";
    }

?>