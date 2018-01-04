<?php
//error_reporting(E_ALL);// уровень показывать все ошибки
//?>
<!doctype html>
<html>
<head>
    <title>Список новостей</title>
</head>
<body>
    <?php
        $fname = isset($_GET['f']) ? $_GET['f'] : null;// если зайти на прямую на страницу - выбьет ошибку, поэтому проверка
        $path = "data/$fname";
        //print_r($fname);
        /* проверки:
            файл не пустой ,его нашли и он реально файл, а не каталог
        */
        if ($fname != '' && file_exists($path) && is_file($path)){
            $text = file_get_contents("data/$fname");//
            echo "<h1>$fname</h1>";
            echo "<div>$text</div>";
        }
        else{
            echo "<div>Ошибка 404. Страница не найдена. Ищите страницу:)</div>";
        }
    ?>
    <a href="index.php">Назад</a>
</body>
</html>	