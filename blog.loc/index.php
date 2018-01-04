<!doctype html>
<html>
<head>
    <title>Список новостей</title>
</head>
<body>
    <?php
    // получаем ВСЕ новости, выводим заголовки новостей
        $news = scandir('data');// вернёт массив
        print_r($news);
        foreach($news as $one){
            if(is_file("data/$one")){ // если это файл а не папка
                echo  "<a href=\"article.php?f=$one\">$one</a><hr>";// f - любой символ
            }
        }

    ?>
	<a href="add.php">Добавить новость</a>
</body>
</html>	