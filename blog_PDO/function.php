<?php
//подключение к базе
function db_connect(){
    //делаем переменную "живучей"
    static $db;
    if ($db === null){//проверка на наличие подключения
        $db = new PDO('mysql:host=localhost;dbname=php1', 'root', '');
        $db->exec('SET NAMES UTF8');
    }
    return $db;
}
//запрос
function db_query($sql, $params = []){
    $db = db_connect();

    $query = $db->prepare($sql);
    $query->execute($params);

    db_check_error($query);

    return $query;
}

// проверка на ФАТАЛЬНУЮ ошибку
function db_check_error($query){
    $info = $query->errorInfo();
    if ($info[0] != PDO::ERR_NONE){// ERR_NONE = '0000' что будет же что и $info[0]
        exit($info[2]);// тут заменяет return
    }
}

