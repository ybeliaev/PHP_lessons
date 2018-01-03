<?php
//  в отличии от куки данные хранятся на сервере
session_start();
$answer1 = $_SESSION['number1'];
$answer2 = $_POST['number2'];


if( ($answer1 == 54) && ($answer2 == 63) ){
    echo "Ты просто гений!<br>";
} else {
    echo "Подучиться нужно...<br>";
}

echo session_id();// идентификатор данной сессии PHPSESSID( файл может лежать в G:\OSPanel\userdata\temp)

?>

