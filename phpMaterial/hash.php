<?php
    $pass="pizza23";
    $hash=password_hash($pass,PASSWORD_DEFAULT);
    echo $hash;

    //to verify
    if(password_verify($pass,$hash)){
        echo "you are logged in";
    }

?>