<?php

    if(isset($_COOKIE['entry'])){
        $t = $_COOKIE['entry'];
    }
    else{
        $t = time();
        setcookie('entry', $t, time() + 3600 * 24 * 365);
    }
    
    if((time() - $t) < 100){
        echo 'Бери со скидкой!!!';
    }
    else{
        echo 'Ну ты тормоз!!!';
    }
    
    
    