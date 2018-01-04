<?php
//Добавление новости
//данные в папке data
$msg = '';// переменная для случая с пустой строкой

if(count($_POST) > 0){
    // POST таким методом заносим данные
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    /* валидация
        - полей
        - (*) что такого файла ещё нет
    */
    if ($title == '' || $content == ''){
        $msg = 'Заполните все поля!';
    }
    elseif (is_numeric($title)){// вообще тут нужна проверка на нижнее под, кирилицу, латиницу...
        $msg = 'В названии должны быть только буквы';
    }
    elseif (file_exists('data/' . $title)){// если такое название уже есть
        $msg = 'Да такой документ ужо есть!';
    }
    else{
        file_put_contents("data/$title", $content);
        header("Location: index.php");
        exit();
    }

}
else{
    // GET юзер попадает таким методом на страницу
    $title = '';
    $content = '';
}

?>
<!doctype html>
<html>
<head>
    <title>Добавление новости</title>
</head>
<body>
<form method="post">
    Название файла<br>
    <input type="text" name="title" value="<?php echo $title; ?>"><br>
    Содержимое файла<br>
    <textarea name="content"><?php echo $title; ?></textarea><br> <!-- у текстэриа нет атрибута value -->
    <input type="submit" value="Сохранить"><br>
    <?php echo $msg ?>
</form>
</body>
</html>
