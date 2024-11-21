<?php
    setcookie("key1","value1",(time()+(24*60*60)),"/");
    //expiry is one day
    setcookie("nationality","Indian",(time()+(24*60*60)),"/");
    if(isset($_COOKIE["nationality"])){
        echo "{$_COOKIE["nationality"]} are generally good";
    }

    //lets delete that
    //checkm after commenting it out
    //setcookie("nationality","Indian",(time()-0),"/");
    //to check the cookie go to cookie and press the drop down icon
    if(isset($_COOKIE["nationality"])){
        echo "{$_COOKIE["nationality"]} are generally good";
    }
    else{
        echo "Please enter yoyur nationality";
    }
?>